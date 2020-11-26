<?php 
$cms1=DB::table('pages')->where('id',1)->first(); 
$cms2=DB::table('pages')->where('id',2)->first();
$cms3=DB::table('pages')->where('id',3)->first(); 
?>


<!--experienced-section -->
    <div class="experienced_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="experienced_img wow fadeInLeft" data-wow-delay="0.4s" data-wow-duration="2s">
                <img src="{{asset($cms1->image)}}" alt="img">
              </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
              <div class="experienced_text">
                <h4>{{$cms1->name}}</h4>
                <?= html_entity_decode($cms1->content) ?>
                <div class="row">
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="experienced_box wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
                      <img src="{{asset($cms2->image)}}" alt="img">
                      <h5>{{$cms2->name}}</h5>
                    </div>
                  </div>
                  <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="experienced_box experienced_box2 wow bounceIn" data-wow-delay="0.4s" data-wow-duration="2s">
                      <img src="{{asset($cms3->image)}}" alt="img">
                      <h5>{{$cms3->name}}</h5>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Worth-section -->