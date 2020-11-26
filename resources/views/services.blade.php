@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="inner_banner inner_banner4" style="background: url({{asset($inner_banner->image)}});
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
              <li><a href="javascript:void(0)">Services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <!-- OurService-section -->

    <div class="OurService_section Service_page">
      <div class="container">
        <div class="row">
          @foreach($services as $service)
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="OurService_box">
              <img src="{{asset($service->image)}}" alt="img"> 
              <div class="OurService_boxText">
                <img src="{{asset($service->icon)}}" class="ser_img1" alt="img">
                <img src="{{asset($service->icon)}}" class="ser_img2" alt="img">
                <h4>{{$service->title}}</h4>
                <?= html_entity_decode($truncated = Str::limit($service->short_description, 70)) ?><br>
                <a href="{{route('single_service', $service->id)}}">Read More</a>
              </div>
            </div>
          </div>
          @endforeach
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="OurService_box">
              <img src="{{asset('images/services_img2.jpg')}}" alt="img"> 
              <div class="OurService_boxText">
                <img src="{{asset('images/services_icon2.png')}}" class="ser_img1" alt="img">
                <img src="{{asset('images/services_icon22.png')}}" class="ser_img2" alt="img">
                <h4>Wall Alterations</h4>
                <p>There are many variations of paassages of available but majority.</p>
                <a href="">Read More</a>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="OurService_box">
              <img src="{{asset('images/services_img3.jpg')}}" alt="img"> 
              <div class="OurService_boxText">
                <img src="{{asset('images/services_icon3.png')}}" class="ser_img1" alt="img">
                <img src="{{asset('images/services_icon33.png')}}" class="ser_img2" alt="img">
                <h4>Extensions</h4>
                <p>There are many variations of paassages of available but majority.</p>
                <a href="">Read More</a>
              </div>
            </div>
          </div> -->
        </div>
        <div class="row">
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="OurService_box">
              <img src="{{asset('images/services_img5.jpg')}}" alt="img"> 
              <div class="OurService_boxText">
                <img src="{{asset('images/services_icon1.png')}}" class="ser_img1" alt="img">
                <img src="{{asset('images/services_icon11.png')}}" class="ser_img2" alt="img">
                <h4>NEW BUILD</h4>
                <p>There are many variations of paassages of available but majority.</p>
                <a href="">Read More</a>
              </div>
            </div>
          </div> -->
          <!-- <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="OurService_box">
              <img src="{{asset('images/services_img4.jpg')}}" alt="img"> 
              <div class="OurService_boxText">
                <img src="{{asset('images/services_icon2.png')}}" class="ser_img1" alt="img">
                <img src="{{asset('images/services_icon22.png')}}" class="ser_img2" alt="img">
                <h4>Barn Conversions</h4>
                <p>There are many variations of paassages of available but majority.</p>
                <a href="">Read More</a>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <!-- OurService-section -->

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