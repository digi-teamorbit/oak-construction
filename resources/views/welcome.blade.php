@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="main_slider">
      <div class="carousel slide" data-ride="carousel" id="myCarousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <?php $counter=0; ?>
          @foreach ($banner as $value)
          <div class="item {{$counter == 0 ? 'active' :''}}">
            <img alt="img" src="{{asset($value->image)}}">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider_text">
                      <h4 class="wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">{{$value->title}}</h4>
                      <?= html_entity_decode($value->description) ?>
                      <a href="javascrpt:void(0)" class="btn_green wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">Discover more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php $counter++; ?>
          @endforeach
          <!-- <div class="item">
            <img alt="img" src="{{asset('images/slider_img1.jpg')}}">
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="slider_text">
                      <h4>Welcome to Oak Construction Ltd</h4>
                      <h1>
                        Expertise To Build <br>What Matters.
                      </h1>
                      <a href="javascrpt:void(0)" class="btn_green">Discover more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->
        </div>
      </div>
      <!-- Left and right controls -->
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">
        <i class="fa fa-angle-left" aria-hidden="true"></i>
      </a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">
        <i class="fa fa-angle-right" aria-hidden="true"></i>
      </a>
    </div>
    <!-- Slider Sectiion End -->

    <!-- Info-section -->
    <div class="Info_section">
      <div class="container">
        <div class="row">
          <div class="Info_bg wow fadeInUp" data-wow-delay="0.4s" data-wow-duration="2s">
            <div class="col-md-4 col-sm-4 col-xs-12 info_box">
                 <div class="info_icon">
                   <i class="fa fa-phone" aria-hidden="true"></i>
                 </div>
                 <div class="info_text">
                   <h6>Call For Consultation</h6>
                   <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}">{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 info_box">
                 <div class="info_icon">
                   <i class="fa fa-clock-o" aria-hidden="true"></i>
                 </div>
                 <div class="info_text">
                   <h6>working hours</h6>
                   <a href="javascript:void(0)">{{App\Http\Traits\HelperTrait::returnFlag(1965) }}</a>
                 </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12 info_box">
                 <div class="info_icon">
                   <i class="fa fa-envelope" aria-hidden="true"></i>
                 </div>
                 <div class="info_text">
                   <h6>send us email</h6>
                   <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}">{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
                 </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Info-section -->

    <!--experienced-section -->
    @include('widgets.experienced_section')
    <!-- Worth-section -->

    <!-- OurService-section -->

    <div class="OurService_section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="OurService_head wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">
              <h4>{{$cms_home1->name}}</h4>
              <?= html_entity_decode($cms_home1->content) ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="OurService_slider wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
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
            <!-- <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="OurService_box">
                <img src="{{asset('images/services_img5.jpg')}}" alt="img"> 
                <div class="OurService_boxText">
                  <img src="{{asset('images/services_icon3.png')}}" class="ser_img1" alt="img">
                  <img src="{{asset('images/services_icon33.png')}}" class="ser_img2" alt="img">
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
                  <img src="{{asset('images/services_icon3.png')}}" class="ser_img1" alt="img">
                  <img src="{{asset('images/services_icon33.png')}}" class="ser_img2" alt="img">
                  <h4>BARN CONVERSIONS</h4>
                  <p>There are many variations of paassages of available but majority.</p>
                  <a href="">Read More</a>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- OurService-section -->

    <!-- OurProjects-section -->
    <div class="OurProjects_section" style="background: url({{asset($cms_home2->image)}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="OurProjects_head wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="2s">
              <h4>{{$cms_home2->name}}</h4>
              <?= html_entity_decode($cms_home2->content) ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="OurProjects_section2">
      <div class="container-fluid">
        <div class="row">
          <div class="OurProjects_slider">
            @foreach ($projects as $project)
            <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset($project->image)}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>{{$project->title}}</h4>
                </div>
              </div>
            </div>
            @endforeach
            <!-- <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset('images/projects_img2.jpg')}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>Wall <br> Alterations</h4>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset('images/projects_img3.jpg')}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>Extensions</h4>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset('images/projects_img4.jpg')}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>NEW BUILD</h4>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset('images/projects_img5.jpg')}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>Door <br> Repairs</h4>
                </div>
              </div>
            </div> -->
            <!-- <div class="col-md-3 col-sm-3 col-xs-12 no-margin">
              <div class="OurProjects_Box wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset('images/projects_img1.jpg')}}" alt="img">
                <div class="OurProjects_BoxOverlay">
                  <a href="{{route('project')}}"><i class="fa fa-plus" aria-hidden="true"></i></a>
                  <h4>Wall <br> Alterations</h4>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>

    <!-- OurProjects-section -->

    <!-- Meets_section -->
    <div class="Meets_section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="Meets_head wow fadeInDown" data-wow-delay="0.4s" data-wow-duration="2s">
              <!-- <h3>{{$cms_home3->name}}</h3> -->
              <?= html_entity_decode($cms_home3->content) ?>
              <a href="javascript:void(0)" class="btn_green">Discover more</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="Meets_Box wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="2s">
              <img src="{{asset($cms_home4->image)}}" alt="img">
              <div class="Meets_Overlay">
                <h5>{{$cms_home4->name}}</h5>
                <?= html_entity_decode($cms_home4->content) ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="Meets_Box wow fadeInRight" data-wow-delay="0.4s" data-wow-duration="2s">
              <img src="{{asset($cms_home5->image)}}" alt="img">
              <div class="Meets_Overlay">
                <h5>{{$cms_home5->name}}</h5>
                <?= html_entity_decode($cms_home5->content) ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Meets_section -->

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