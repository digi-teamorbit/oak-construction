<!DOCTYPE html>
<html lang="zxx">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Favicon icon -->
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset(!empty($favicon->img_path)?$favicon->img_path:'')}}">
    <title>::: Oak Construction Ltd. :::</title>

        <!-- ============================================================== -->
        <!-- All CSS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts.front.css')

    </head>
  <body class="responsive landing">
      
<!-- ============================================================== -->
<!-- BODY START HERE -->
<!-- ============================================================== -->
       <div class="landingSec flexRow">
      <div class="container">
        <div class="col-md-8 col-sm-12 col-xs-12 text-center flexCol centerCol">
          <div class="landingBox">
            <img src="{{asset('images/logo.png')}}" alt="img">
            <h1>Welcome To Oak Construction (whitby) Ltd,</h1>
            <h2>Our New Website Is Under Construction</h2>
            <a href="tel:01947 881266">Phone : 01947 881266</a><br>
            <a href="mailto:rob@oakconstructionltd.com">Email : rob@oakconstructionltd.com</a>
          </div>
        </div>
      </div>
    </div>

<!-- ============================================================== -->
<!-- BODY END HERE -->
<!-- ============================================================== -->


        <!-- ============================================================== -->
        <!-- All SCRIPTS ANS JS LINKS IN BELOW FILE -->
        <!-- ============================================================== -->
        @include('layouts/front.scripts')
        
        <script type="text/javascript">
      $(function() {
      var body = $('body');
      var backgrounds = ['url({{asset('images/banner.jpg')}})', 'url({{asset('images/banner2.jpg')}})', 'url({{asset('images/banner3.jpg')}})', 'url({{asset('images/banner4.jpg')}})'];
      var current = 0;

      function nextBackground() {
        body.css(
         'background',
          backgrounds[current = ++current % backgrounds.length]
       );

       setTimeout(nextBackground, 7000);
       }
       setTimeout(nextBackground, 7000);
         body.css('background', backgrounds[0]);
     });
    </script>

    </body>
</html>