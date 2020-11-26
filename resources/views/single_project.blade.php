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
              <li><a href="javascript:void(0)">Single Project</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <div class="project_detailSec1">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-8 col-xs-12">
            <div class="project_detaiText1">
              <h6>Project Details</h6>
              <h2>{{$project->title}}</h2>
              <?= html_entity_decode($project->short_description) ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="project_detaiSide1">
              <ul>
                <li><h3>Date:  <span>{{date_format(date_create($project->updated_at),"F Y")}}</span></h3></li>
                <li><h3>Website  <span>{{$project->website}}</span></h3></li>
                <li><h3>Location  <span>{{$project->location}}</span></h3></li>
                <li><h3>Value  <span>#{{$project->value}}</span></h3></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="house_Sec1">
      <div class="container">
        <div class="row">
          @foreach ($gallery as $image)
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="house_Text1">
              <img src="{{asset($image->image)}}" alt="img">
              <div class="house_overlay">
                <a href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="house_Text1">
              <img src="{{asset('images/house_img1.jpg')}}" alt="img">
              <div class="house_overlay">
                <a href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div> -->
        </div>
        <!-- <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="house_Text1">
              <img src="{{asset('images/house_img2.jpg')}}" alt="img">
              <div class="house_overlay">
                <a href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="house_Text1">
              <img src="{{asset('images/house_img3.jpg')}}" alt="img">
              <div class="house_overlay">
                <a href="javascript:void(0)"><i class="fa fa-plus" aria-hidden="true"></i></a>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>

    <div class="project_detailSec1 project_detailSec3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="project_detaiText1">
              <?= html_entity_decode($project->long_description) ?>
            </div>
          </div>
        </div>
      </div>
    </div>

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