<?php
$images=DB::table('product_imagess')->where('product_id', $project->id)->get();
?>

@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Project #{{ $project->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/project') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $project->id }}</td>
                            </tr>
                            <tr><th> Category </th><td> {{ $project->category }} </td></tr><tr><th> Title </th><td> {{ $project->title }} </td></tr><tr><th> Website </th><td> {{ $project->website }} </td></tr><tr><th> Location </th><td> {{ $project->location }} </td></tr><tr><th> Value </th><td> {{ $project->value }} </td></tr><tr><th> Short Description </th><td><?= html_entity_decode($project->short_description) ?></td></tr><tr><th> Long Description </th><td><?= html_entity_decode($project->long_description) ?></td></tr><tr><th> Image </th><td><img src="{{asset($project->image)}}" style="width: 30%;"></td></tr>
                            <tr><th> Gallery Images </th><td>
                                @foreach ($images as $img)
                                <img src="{{asset($img->image)}}" style="width: 30%;">
                                @endforeach
                            </td></tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.admin.footer')
</div>
@endsection

