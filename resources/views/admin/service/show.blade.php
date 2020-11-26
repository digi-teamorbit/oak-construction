@extends('layouts.app')

@section('content')
    <div class="container-fluid bg-white mt-5">
        <!-- .row -->
        <div class="row">
            <div class="col-sm-12">
                <div class="white-box card">
                <div class="card-body">
                    <h3 class="box-title pull-left">Service #{{ $service->id }}</h3>
                    
                        <a class="btn btn-success pull-right" href="{{ url('/admin/service') }}">
                            <i class="icon-arrow-left-circle" aria-hidden="true"></i> Back</a>
                    
                    <div class="clearfix"></div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table">
                            <tbody>
                            <tr>
                                <th>ID</th>
                                <td>{{ $service->id }}</td>
                            </tr>
                            <tr><th> Title </th><td> {{ $service->title }} </td></tr><tr><th> Short Description </th><td><?= html_entity_decode($service->short_description) ?></td></tr><tr><th> Long Description </th><td><?= html_entity_decode($service->long_description) ?></td></tr><tr><th>Icon</th><td><img src="{{asset($service->icon) }}"></td></tr><tr><th>Image</th><td><img src="{{asset($service->image) }}"></td></tr>
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

