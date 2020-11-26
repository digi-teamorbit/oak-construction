@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="inner_banner inner_banner3" style="background: url({{asset($inner_banner->image)}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col-md-5 col-sm-5 col-xs-12">
            <h2>{{$inner_banner->title}}</h2>
          </div>
          <div class="col-md-7 col-sm-7 col-xs-12">
            <ul>
              <li><a href="javascript:void(0)">HOme</a></li>
              <li><a href="javascript:void(0)">-</a></li>
              <li><a href="javascript:void(0)">Pages</a></li>
              <li><a href="javascript:void(0)">-</a></li>
              <li><a href="javascript:void(0)">Our Projects</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <section class="project-sec1">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="project-Tabs">
              <ul>
                <li><a href="{{route('project')}}">All</a></li>
                <li><a href="{{route('alterations_york')}}" class="active">Alterations in York</a></li>
                <li><a href="javascript:void(0)">Barn Conversion Whitby, North York Moors</a></li>
                <li><a href="javascript:void(0)">Bathroom Design and installation Service</a></li>
                <li><a href="javascript:void(0)">Full Property Extension and alterations</a></li>
                <li><a href="javascript:void(0)">House Extension In Whitby, North Yorkshire</a></li>
                <li><a href="javascript:void(0)">Groundworks, Foundation, Concreting, Landscaping, Drives, Drainage, Farm Ditches</a></li>
                <li><a href="javascript:void(0)">Traditional Sandstone Flagging Project</a></li>
                <li><a href="javascript:void(0)">Full Renovation of Listed Building</a></li>
                <li><a href="javascript:void(0)">Robin Hoods Bay Renovation</a></li>
                <li><a href="javascript:void(0)">Kitchens designed and installed</a></li>
                <li><a href="javascript:void(0)">Internal alteration in Whitby Cottage</a></li>
                <li><a href="javascript:void(0)">New Sun Room and patio in with with glass screen</a></li>
                <li><a href="javascript:void(0)">New Build in Sandsend Whitby</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="row">
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img1.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img2.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img3.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img4.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img5.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="project-box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                  <img src="{{asset('images/project_img6.jpg')}}" class="img-responsive" alt="rps1b-img1">
                  <h3><a href="{{route('single_project')}}">Lorem ipsum dolo</a></h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>

</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection