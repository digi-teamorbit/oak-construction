@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="inner_banner inner_banner5" style="background: url({{asset($inner_banner->image)}});
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
              <li><a href="javascript:void(0)">-</a></li>
              <li><a href="javascript:void(0)">Single Services</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <!-- OurService-section -->

    <section class="blog-sec1">
      <div class="container">
        <div class="col-sm-4">
          <div class="blogsec1-side">
            <!-- <form class="">
              <input type="text" class="form-control" placeholder="Search">
              <button type="submit"><i class="fa fa-search"></i></button>
            </form> -->
            <div class="bs1-categ">
              <h3>Services</h3>
              <ul>
                @foreach ($services_title as $title)
                <li><a class="{{ request()->is('services/'.$title->id) ? 'active' : '' }}" href="{{route('single_service', $title->id)}}">{{$title->title}} <i class="fa fa-angle-right"></i></a></li>
                <!-- <li><a href="#">Property Maintenance <i class="fa fa-angle-right"></i></a></li> -->
                <!-- <li><a href="#">New Build <i class="fa fa-angle-right"></i></a></li> -->
                <!-- <li><a href="#">Lorem Ipsum <i class="fa fa-angle-right"></i></a></li> -->
                <!-- <li><a href="#">Lorem Ipsum <i class="fa fa-angle-right"></i></a></li> -->
                <!-- <li><a href="#">Lorem Ipsum <i class="fa fa-angle-right"></i></a></li> -->
                @endforeach
              </ul>
            </div>
            <div class="bs1-need-help">
              <h3>{{$cms_single1->name}}</h3>
              <div class="bs1nh-inner">
                <?= html_entity_decode($cms_single1->content) ?>
                <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(1961) }}">{{App\Http\Traits\HelperTrait::returnFlag(1961) }}</a>
              </div>
            </div>
            <div class="bs1nh-dowload-btn">
              <h3>Download</h3>
              <a href="#" class="btn-red">Download our Brochures</a>
              <a href="#" class="btn-black">Our company details</a>
            </div>
          </div>
        </div>
        <div class="col-sm-8">
          <div class="blog-side-1ch">
            <img src="{{asset($service->image)}}" class="img-responsive blog-mg1" alt="blog-mg1">
            <h3>{{$service->title}}</h3>
            <?= html_entity_decode($service->short_description) ?>
            <div class="blog-icon-sec1">
              <img src="{{asset($service->icon)}}" class="img-responsive blog-icon1" alt="blog-icon1">
              <?= html_entity_decode($service->long_description) ?>
            </div>
            <!-- <div class="blog-icon-sec1">
              <img src="{{asset('images/blog-icon2.png')}}" class="img-responsive blog-icon1" alt="blog-icon1">
              <h6>Strong business plan requires experience</h6>
               <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div> -->
            <!-- <div class="for-faq">
                <div class="accordion">We never compromise on quality</div>
                <div class="panel">
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>
                <div class="accordion">We’re professional builders in canada</div>
                <div class="panel">
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div> 
                <div class="accordion">The greatest challenge with product quality</div>
                <div class="panel">
                  <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                </div>  
            </div> -->
            <!-- <div class="blogside-last-sec1">
              <div class="row">
                <div class="col-sm-6">
                  <div class="blogsidelast-img">
                    <img src="{{asset('images/blogsidelast-img1.jpg')}}" class="img-responsive" alt="blogsidelast-img1">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="blogsidelast-content">
                    <h3>Lorem ipsum dolor sit amet, consectetur</h3>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scramble.</p>
                    <ul>
                      <li>Research beyond the business plan</li>
                      <li>Marketing options and rates</li>
                      <li>The ability to turnaround consulting</li>
                      <li>The ability to turnaround consulting</li>
                    </ul>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </section>

    <!-- OurService-section -->

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->

@endsection
@section('css')
<style>
.bs1-categ ul li a.active {
    background: #498f37;
    color: #fff;
}
</style>
@endsection

@section('js')
<script type="text/javascript"></script>
@endsection