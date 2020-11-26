@extends('layouts.main')
@section('content')

<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->

    <!-- Slider  Sectiion Start -->
    <div class="inner_banner" style="background: url({{asset($inner_banner->image)}});
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
              <li><a href="javascript:void(0)">About</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- Slider Sectiion End -->

    <!--experienced-section -->
    @include('widgets.experienced_section')
    <!-- Worth-section -->

    <!--Future-section -->

    <div class="Future_section" style="background: url({{asset($cms_about1->image)}});
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2 col-xs-12">
              <div class="Future_text">
                <h5>{{$cms_about1->name}}</h5>
                <?= html_entity_decode($cms_about1->content) ?>
                <a href="javascript:void(0)" class="btn_green">Discover more</a>
              </div>
          </div>
        </div>
      </div>
    </div>

    <!--Future-section -->

    <!-- history-section -->

    <div class="history_section">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="history_Box">
              <img src="{{asset($cms_about2->image)}}" alt="img">
              <h3>{{$cms_about2->name}}</h3>
              <?= html_entity_decode($cms_about2->content) ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="history_Box">
              <img src="{{asset($cms_about3->image)}}" alt="img">
              <h3>{{$cms_about3->name}}</h3>
              <?= html_entity_decode($cms_about3->content) ?>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="history_Box">
              <img src="{{asset($cms_about4->image)}}" alt="img">
              <h3>{{$cms_about4->name}}</h3>
              <?= html_entity_decode($cms_about4->content) ?>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- history-section -->

    <!-- Work-section -->
    <div class="Work_section">
      <div class="container-fluid no-margin">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12 no-margin">
            <div class="Work_text">
              <h5>{{$cms_about5->name}}</h5>
              <?= html_entity_decode($cms_about5->content) ?>
              <div class="fr-progressbar">
                <div class="row">
                  <div class="col-md-12">
                      <h3 class="progress-title">Industrial</h3>
                      <div class="progress">
                          <div class="progress-bar">
                              <div class="progress-value">98%</div>
                          </div>
                      </div>

                      <h3 class="progress-title">Construction</h3>
                      <div class="progress">
                          <div class="progress-bar progress-bar2">
                              <div class="progress-value">88%</div>
                          </div>
                      </div>
                      <h3 class="progress-title">Remodeling</h3>
                      <div class="progress">
                          <div class="progress-bar progress-bar3">
                              <div class="progress-value">78%</div>
                          </div>
                      </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 no-margin">
            <div class="Work_img">
              <img src="{{asset($cms_about5->image)}}" alt="img">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Work-section -->

    <!-- OurProjects-section -->
    <div class="Servicing_section">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="Servicing_iconBox">
              <img src="{{asset($cms_about6->image)}}" alt="img">
              <h4>{{$cms_about6->name}}</h4>
              <div class="Servicing_overlay">
                <?= html_entity_decode($cms_about6->content) ?>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="Servicing_text">
              <h5>{{$cms_about7->name}}</h5>
              <?= html_entity_decode($cms_about7->content) ?>
              <div class="row flexRow">
                <div class="col-md-5 col-sm-5 col-xs-12">
                  <div class="Servicing_textImg">
                    <img src="{{asset($cms_about8->image)}}" alt="img">
                    <a href="{{$cms_about8->url}}"><i class="fa fa-play" aria-hidden="true"></i></a>
                  </div>
                </div>
                <div class="col-md-7 col-sm-7 col-xs-12 flexCol">
                  <h6>{{$cms_about8->name}}</h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- OurProjects-section -->

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