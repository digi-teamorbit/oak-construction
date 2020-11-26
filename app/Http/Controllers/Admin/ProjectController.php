<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Project;
use App\ProjectCategory;
use Illuminate\Http\Request;
use Image;
use File;
use DB;

class ProjectController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */

    public function index(Request $request)
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $keyword = $request->get('search');
            $perPage = 25;

            if (!empty($keyword)) {
                $project = Project::where('title', 'LIKE', "%$keyword%")
                ->orWhere('website', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->orWhere('value', 'LIKE', "%$keyword%")
                ->orWhere('short_description', 'LIKE', "%$keyword%")
                ->orWhere('long_description', 'LIKE', "%$keyword%")
                ->orWhere('image', 'LIKE', "%$keyword%")
                ->orWhere('gallery_images', 'LIKE', "%$keyword%")
                ->paginate($perPage);
            } else {
                $project = Project::paginate($perPage);
            }

            return view('admin.project.index', compact('project'));
        }
        return response(view('403'), 403);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            
            // category
            $items = ProjectCategory::pluck('category_name', 'id');

            return view('admin.project.create', compact('items'));
        }
        return response(view('403'), 403);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {

        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','add-'.$model)->first()!= null) {
            $this->validate($request, [
            'category' => 'required',
			'title' => 'required',
			'website' => 'required',
			'location' => 'required',
			'value' => 'required',
			'short_description' => 'required',
			'long_description' => 'required',
			'image' => 'required'
		]);

            $project = new project($request->all());

            if ($request->hasFile('image')) {

                $file = $request->file('image');
                
                //make sure yo have image folder inside your public
                $project_path = 'uploads/projects/';
                $fileName = $file->getClientOriginalName();
                $profileImage = date("Ymd").$fileName.".".$file->getClientOriginalExtension();

                Image::make($file)->save(public_path($project_path) . DIRECTORY_SEPARATOR. $profileImage);

                $project->image = $project_path.$profileImage;
            }

          $project->save();
          

            // gallery images
            if(! is_null(request('gallery_images'))) {
                
                $photos=request()->file('gallery_images');
                foreach ($photos as $photo) {
                    $destinationPath = 'uploads/projects/';
                   
                    $filename = date("Ymdhis").uniqid().".".$photo->getClientOriginalExtension();
                    //dd($photo,$filename);
                    Image::make($photo)->save(public_path($destinationPath) . DIRECTORY_SEPARATOR. $filename);
                  
                    DB::table('product_imagess')->insert([
                        
                        ['image' => $destinationPath.$filename, 'product_id' => $project->id]
                       
                    ]);
                    
                }
            
            }
           

            return redirect('admin/project')->with('flash_message', 'Project added!');
        }
        return response(view('403'), 403);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','view-'.$model)->first()!= null) {
            $project = Project::findOrFail($id);
            return view('admin.project.show', compact('project'));
        }
        return response(view('403'), 403);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $project = Project::findOrFail($id);
            
            // category
            $items = ProjectCategory::pluck('category_name', 'id');
            
            // gallery images
            $project_images = DB::table('product_imagess')
                          ->where('product_id', $id)
                          ->get();

            return view('admin.project.edit', compact('project', 'items', 'project_images'));
        }
        return response(view('403'), 403);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','edit-'.$model)->first()!= null) {
            $this->validate($request, [
            'category' => 'required',
			'title' => 'required',
			'website' => 'required',
			'location' => 'required',
			'value' => 'required',
			'short_description' => 'required',
			'long_description' => 'required',
		]);
            $requestData = $request->all();
            

        if ($request->hasFile('image')) {
            
            $project = project::where('id', $id)->first();
            $image_path = public_path($project->image); 
            
            if(File::exists($image_path)) {
                File::delete($image_path);
            }

            $file = $request->file('image');
            $fileNameExt = $request->file('image')->getClientOriginalName();
            $fileNameForm = str_replace(' ', '_', $fileNameExt);
            $fileName = pathinfo($fileNameForm, PATHINFO_FILENAME);
            $fileExt = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $fileName.'_'.time().'.'.$fileExt;
            $pathToStore = public_path('uploads/projects/');
            Image::make($file)->save($pathToStore . DIRECTORY_SEPARATOR. $fileNameToStore);

             $requestData['image'] = 'uploads/projects/'.$fileNameToStore;               
        }

        
        // gallery images
        if(! is_null(request('gallery_images'))) {
                
                $photos=request()->file('gallery_images');
                foreach ($photos as $photo) {
                    $destinationPath = 'uploads/projects/';
                   
                    $filename = date("Ymdhis").uniqid().".".$photo->getClientOriginalExtension();
                    //dd($photo,$filename);
                    Image::make($photo)->save(public_path($destinationPath) . DIRECTORY_SEPARATOR. $filename);
                  
                    DB::table('product_imagess')->insert([
                        
                        ['image' => $destinationPath.$filename, 'product_id' => $id]
                       
                    ]);
                    
                }
            
            }


            $project = Project::findOrFail($id);
             $project->update($requestData);

             return redirect('admin/project')->with('flash_message', 'Project updated!');
        }
        return response(view('403'), 403);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        $model = str_slug('project','-');
        if(auth()->user()->permissions()->where('name','=','delete-'.$model)->first()!= null) {
            Project::destroy($id);

            return redirect('admin/project')->with('flash_message', 'Project deleted!');
        }
        return response(view('403'), 403);

    }
}
