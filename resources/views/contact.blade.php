@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="inner_banner inner_banner2" style="background: url({{asset($inner_banner->image)}});
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
              <li><a href="javascript:void(0)">contact</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <section class="contact-sec1">
      <div class="container">
        <span class="heading-h2-span">write message</span>
        <h2 class="heading-h2">Get in Touch With us</h2>
        <div class="contactsec1-main">
          <form action="{{route('contactUsSubmit')}}" method="post">
            @csrf
            <div class="row">
              <div class="col-sm-6">
                <input name="name" type="text" class="form-control @error('name') is-danger @enderror" placeholder="Your name" required="">
                @error('name')
                 <p class="help is-danger" style="color: red;">{{ $errors->first('name') }}</p>
               @enderror
              </div>
              <div class="col-sm-6">
                <input name="email" type="email" class="form-control @error('email') is-danger @enderror" placeholder="Email address" required="">
                @error('email')
                 <p class="help is-danger" style="color: red;">{{ $errors->first('email') }}</p>
               @enderror
              </div>
              <div class="col-sm-12">
                <textarea name="comment" rows="9" class="form-control @error('comment') is-danger @enderror" placeholder="Write comment" required=""></textarea>
                @error('comment')
                 <p class="help is-danger" style="color: red;">{{ $errors->first('comment') }}</p>
               @enderror
              </div>
              <div class="col-sm-12">
                <button type="submit" class="btn-red">SEND MESSAGE</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>
    <section class="timinginfo-sec timinginfo-sec-1c">
      <div class="container">
        <div class="tis-main">
          <div class="row">
            <div class="col-sm-4">
              <div class="tism-box tis-cust-1">
                <span class="tism-span"><i class="fa fa-phone"></i></span>
                <div class="tism-content">
                  <span>Call For Consultation</span>
                  <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"><h4>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</h4></a>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="tism-box tis-cust-2">
                <span class="tism-span"><i class="fa fa-clock-o"></i></span>
                <div class="tism-content">
                  <span>working hours</span>
                  <a href="javascript:void(0)"><h4>{{App\Http\Traits\HelperTrait::returnFlag(1965) }}</h4></a>
                </div>
                <div class="clearfix"></div>
              </div>  
            </div>
            <div class="col-sm-4">
              <div class="tism-box tis-cust-3">
                <span class="tism-span"><i class="fa fa-envelope"></i></span>
                <div class="tism-content">
                  <span>send us email</span>
                  <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"><h4>{{App\Http\Traits\HelperTrait::returnFlag(218) }}</h4></a>
                </div>
                <div class="clearfix"></div>
              </div>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="map-iframe">
      <iframe src="{{App\Http\Traits\HelperTrait::returnFlag(1966) }}"></iframe>
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