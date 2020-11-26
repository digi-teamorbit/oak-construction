<!-- Header Start -->
    <header class="header">
      <div class="main_header">
        <div class="container">
          <div class="row">
            <div class="col-md-3 col-sm-8 col-xs-8">
              <div class="main_logo">
                <a href="{{route('home')}}"><img alt="img" src="{{asset($logo->img_path)}}"></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs hidden-sm">
              <div class="menuSec">
                <ul id="menu">
                  <li>
                    <a href="{{route('home')}}">Home</a>
                  </li>
                  <li>
                    <a href="{{route('services')}}">Services</a>
                  </li>
                  <li>
                    <a href="{{route('project')}}">Projects</a>
                  </li>
                  <li>
                    <a href="{{route('contact')}}">Contact Us</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-md-3 col-sm-8 col-xs-8">
              <div class="main_social pull-right">
                <ul>
                  <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(682) }}" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                  <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1960) }}" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                  <li><a href="{{App\Http\Traits\HelperTrait::returnFlag(1964) }}" target="_blank"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                  <!-- <li><a href="javascript:void(0)"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- Header End -->