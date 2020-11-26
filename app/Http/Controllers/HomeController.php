<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\inquiry;
use App\schedule;
use App\newsletter;
use App\post;
use App\banner;
use App\imagetable;
use DB;
use Mail;use View;
use Session;
use App\Http\Helpers\UserSystemInfoHelper;
use App\Http\Traits\HelperTrait;
use Auth;
use App\Profile;


class HomeController extends Controller
{   
    use HelperTrait;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     // use Helper;
     
    public function __construct()
    {
        //$this->middleware('auth');

        $logo = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo')
                     ->first();

        $logo2 = imagetable::
                     select('img_path')
                     ->where('table_name','=','logo2')
                     ->first();
             
        $favicon = imagetable::
                     select('img_path')
                     ->where('table_name','=','favicon')
                     ->first(); 
        
        View()->share('logo',$logo);
        View()->share('logo2',$logo2);
        View()->share('favicon',$favicon);

    } 

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $banner = DB::table('banners')->get();   
        
        $cms_home1 = DB::table('pages')->where('id', 4)->first();
        $cms_home2 = DB::table('pages')->where('id', 5)->first();
        $cms_home3 = DB::table('pages')->where('id', 6)->first();
        $cms_home4 = DB::table('pages')->where('id', 7)->first();
        $cms_home5 = DB::table('pages')->where('id', 8)->first();

        $services = DB::table('services')->get();
        $projects=DB::table('projects')->get();

        return view('welcome', compact('banner', 'cms_home1', 'cms_home2', 'cms_home3', 'cms_home4', 'cms_home5', 'services', 'projects'));
    }

    public function about()
    { 
        $inner_banner=DB::table('inner_banners')->where('id',1)->first();

        $cms_about1 = DB::table('pages')->where('id', 10)->first();
        $cms_about2 = DB::table('pages')->where('id', 11)->first();
        $cms_about3 = DB::table('pages')->where('id', 12)->first();
        $cms_about4 = DB::table('pages')->where('id', 13)->first();
        $cms_about5 = DB::table('pages')->where('id', 14)->first();
        $cms_about6 = DB::table('pages')->where('id', 15)->first();
        $cms_about7 = DB::table('pages')->where('id', 16)->first();
        $cms_about8 = DB::table('pages')->where('id', 17)->first();

        return view('about', compact('inner_banner', 'cms_about1', 'cms_about2', 'cms_about3', 'cms_about4', 'cms_about5', 'cms_about6', 'cms_about7', 'cms_about8'));
    }

    public function alterationsYork()
    { 
        $inner_banner=DB::table('inner_banners')->where('id',2)->first();
        return view('alterations_york', compact('inner_banner'));
    }

    public function contact()
    { 
        $inner_banner=DB::table('inner_banners')->where('id',3)->first();
        return view('contact', compact('inner_banner'));
    }

    public function project()
    { 
        $inner_banner=DB::table('inner_banners')->where('id',4)->first();

        $project_categories=DB::table('project_categories')->get();
        $projects=DB::table('projects')->get();

        return view('project', compact('inner_banner', 'project_categories', 'projects'));
    }

    public function category($id)
    { 
        $inner_banner=DB::table('inner_banners')->where('id',4)->first();
        
        $project_categories=DB::table('project_categories')->get();
        $projects=DB::table('projects')->where('category', $id)->get();

        return view('project', compact('inner_banner', 'project_categories', 'projects'));
    }

    // public function project1()
    // { 
    //     $inner_banner=DB::table('inner_banners')->where('id',5)->first();
    //     return view('project1', compact('inner_banner'));
    // }

    // public function project2()
    // { 
    //     $inner_banner=DB::table('inner_banners')->where('id',6)->first();
    //     return view('project2', compact('inner_banner'));
    // }

    public function singleProject($id)
    { 
        $inner_banner=DB::table('inner_banners')->where('id',7)->first();

        $project=DB::table('projects')->where('id', $id)->first();
        $gallery=DB::table('product_imagess')->where('product_id', $id)->get();

        return view('single_project', compact('inner_banner', 'project', 'gallery'));
    }

    public function services()
    { 
        $inner_banner=DB::table('inner_banners')->where('id',8)->first();

        $services = DB::table('services')->get();

        return view('services', compact('inner_banner', 'services'));
    }

    public function singleService($id)
    { 
        $inner_banner=DB::table('inner_banners')->where('id',9)->first();

        $cms_single1 = DB::table('pages')->where('id', 18)->first();

        $service=DB::table('services')->where('id', $id)->first();
        $services_title=DB::table('services')->get();

        return view('single_service', compact('inner_banner', 'cms_single1', 'service', 'services_title'));
    }

    public function landing()
    { 
        return view('landing');
    }
    

    public function contactUsSubmit(Request $request)
    {

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'comment' => 'required'
        ]);

        $inquiry = new inquiry;
        $inquiry->inquiries_fname = $request->name;
        // $inquiry->inquiries_lname = $request->lname;
        $inquiry->inquiries_email = $request->email;
       // $inquiry->inquiries_phone = $request->phone;
        $inquiry->extra_content = $request->comment;
        $inquiry->save();
            
        Session::flash('message', 'Thank you for contacting us! We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return back();
    }

    public function newsletterSubmit(Request $request)
    {

        $this->validate($request, [
            'email' => 'required'
        ]);

        $is_email = newsletter::where('newsletter_email',$request->email)->count();
        
        if($is_email == 0) {
            
        $inquiry = new newsletter;
        //$inquiry->newsletter_name = $request->name;
        $inquiry->newsletter_email = $request->email;
        //$inquiry->newsletter_message = $request->comment;
        $inquiry->save();
        Session::flash('message', 'Thank you for subscribing! We will get back to you asap!'); 
        Session::flash('alert-class', 'alert-success'); 
        return redirect('/');
        
        } else {
            Session::flash('flash_message', 'email already exists'); 
            Session::flash('alert-class', 'alert-success'); 
            return redirect('/');
        }
        
    }
   
}
