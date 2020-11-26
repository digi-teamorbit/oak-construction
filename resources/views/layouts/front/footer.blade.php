<?php
$cms1=DB::table('pages')->where('id', 9)->first();
?>


    <!-- Start_section -->
    <div class="Start_section">
      <div class="container">
        <div class="row flexRow">
          <div class="col-md-9 col-sm-9 col-xs-12">
            <?= html_entity_decode($cms1->content) ?>
          </div>
          <div class="col-md-3 col-sm-3 col-xs-12 text-right flexCol">
            <a href="{{route('contact')}}" class="btn_green">Contact with us</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Start_section -->



    <!--Footer Content Start-->
    <footer id="footer">
      <div class="main_footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="footer_box1">
                <a href="javascript:void(0)"><img src="{{asset($logo2->img_path)}}" alt="img"></a>
                <div class="footer_news">
                  <form method="post" action="{{route('newsletterSubmit')}}">
                    @csrf
                  <input name="email" type="text" placeholder="Email address" required="" style="text-transform: none;">
                  <input type="submit" class="btn_sub" value="Subscribe">
                  <!-- <a href="javascript:void(0)" class="btn_green">Subscribe</a> -->
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="footer_box2">
                      <h5 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                        Sitemap
                      </h5>
                      <ul>
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('services')}}">Our Services</a></li>
                        <li><a href="{{route('contact')}}">Contact us</a></li>  
                      </ul>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="footer_box2">
                    <h5 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                      Links
                    </h5>
                    <ul>
                      <li><a href="{{route('project')}}">Projects</a></li>
                      <li><a href="javascript:void(0)">Resources</a></li>
                      <li><a href="javascript:void(0)">Guide</a></li>
                      <li><a href="javascript:void(0)">News</a></li>  
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-5 col-sm-5 col-xs-12">
              <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <div class="footer_box4">
                    <h5 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                      Follow Us
                    </h5>
                    <a href="tel:{{App\Http\Traits\HelperTrait::returnFlag(59) }}"> <span>Get a Quote</span>{{App\Http\Traits\HelperTrait::returnFlag(59) }}</a>
                    <a href="mailto:{{App\Http\Traits\HelperTrait::returnFlag(218) }}"> <span>Send us Email</span>{{App\Http\Traits\HelperTrait::returnFlag(218) }}</a>
                  </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                  <div class="footer_box3">
                    <h5 class="wow fadeInDown" data-wow-delay="0.2s" data-wow-duration="2s">
                      Legal
                    </h5>
                    <ul>
                      <li><a href="javascript:void(0)">FAQs</a></li>
                      <li><a href="javascript:void(0)">Privacy Policy</a></li>
                      <li><a href="javascript:void(0)">Terms of Use</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy_right">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-xs-6 col-sm-12">
              <p>
                {{App\Http\Traits\HelperTrait::returnFlag(499) }}
              </p>
            </div>
            <div class="col-md-6 col-xs-6 col-sm-12">
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
    </footer>
    <!--Footer Content End-->

    <style type="text/css">
      .footer_news .btn_sub {
    transition: ease-in-out 0.5s;
    border-radius: 2px;
    background-color: rgb(73, 143, 55);
    box-shadow: 0px 5px 10px 0px rgba(0, 0, 0, 0.1);
    font-size: 14px;
    line-height: 19px;
    color: #fff;
    font-weight: 700;
    display: inline-block;
    text-transform: uppercase;
    padding: 21px 25px;
    width: 114px;
}
    </style>