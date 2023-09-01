@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('pt1') }}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <div class="container">
          <div itemprop="articleBody">
        <div class="article-content" style="padding: 0px; margin: 0px; font-size: 11px; font-family: Tahoma, Arial, sans-serif; line-height: 16.5px;">
        <div style="padding: 0px; margin: 0px; text-align: justify;">
        <ul style="padding: 0px; margin: 12px 0px; list-style-type: disc;">
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;">{{ trans('pt2') }}</span><br><br></li>
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;">{{ trans('pt3') }}</span><br><br></li>
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;">{{ trans('pt4') }}&nbsp;</span>
        <ul>
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;">{{ trans('pt5') }}</span></li>
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;">{{ trans('pt6') }}<a href="http://etrade.rifanberjangka.com/login.php" target="_blank" style="padding: 0px; margin: 0px; color: #006699; text-decoration: underline;"></a>&nbsp;<span style="color: #006699;"><span style="text-decoration: underline;"><a href="http://etrade.rifanberjangka.com/login.php">{{ trans('pt7') }}</a></span></span></span></li>
        <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt;"><a href="http://etrade.rifanberjangka.com/login.php" target="_blank"></a>{{ trans('pt8') }}</span></li>
        </ul>
        </li>
        </ul>
        </div>
        </div>	</div>
        </div>
      </div>
      {{-- <div class="col-lg-12">
        <!-- about video -->
        <div class="about-video">
          <img class="img-fluid w-100" src="/assets-index/images/about/video-thumb.jpg" alt="video-thumb">
          <a class="venobox play-btn" href="https://www.youtube.com/embed/FwApTaNsolo" data-vbtype="iframe"><i class="ti-control-play"></i></a>
        </div>
      </div> --}}
    </div>
  </div>
  <!-- background shapes -->
  <img src="/assets-index/images/background-shape/green-dot.png" alt="background-shape" class="about-bg-1 up-down-animation">
  <img src="/assets-index/images/background-shape/blue-dot.png" alt="background-shape" class="about-bg-2 left-right-animation">
  <img src="/assets-index/images/background-shape/green-half-cycle.png" alt="background-shape" class="about-bg-3 up-down-animation">
  <img src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape" class="about-bg-4 left-right-animation">
  <img src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape" class="about-bg-5 up-down-animation">
  <img src="/assets-index/images/background-shape/service-half-cycle.png" alt="background-shape" class="about-bg-6 left-right-animation">
</section>
<!-- /about us -->
@endsection