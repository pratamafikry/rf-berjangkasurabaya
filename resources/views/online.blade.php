@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('ol1') }}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <ul style="list-style-type: square;">
          <li>
          <p>{{ trans('ol2') }}</p>
          </li>
          <li>
          <p>{{ trans('ol3') }}</p>
          <p>{{ trans('ol4') }}<br>
            {{ trans('ol5') }}<br>
            {{ trans('ol6') }}</p>
          </li>
          <li>
          <p>{{ trans('ol7') }}</p>
          </li>
          <li>
          <p>{{ trans('ol8') }}<br>
            {{ trans('ol9') }}<br>
            {{ trans('ol10') }}<br>
            {{ trans('ol11') }}<br>
            {{ trans('ol12') }}</p>
          </li>
          <li><span style="font-size: 11pt;">{{ trans('ol13') }}<br></span><span style="padding: 0px 0px 0px 30px; margin: 0px; font-size: 11pt;"><span style="padding: 0px 0px 0px 30px; margin: 0px; font-size: 11pt;">{{ trans('ol14') }} </span><br><span style="padding: 0px 0px 0px 30px; margin: 0px; font-size: 11pt;"><span style="padding: 0px 0px 0px 30px; margin: 0px; font-size: 11pt;">{{ trans('ol15') }}<br> </span> </span><br>
          <div style="margin-left: 50px;">
          <blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;">
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><strong><span style="font-size: 11pt;">Bank BCA - Cabang Sudirman, Jakarta</span></strong></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- IDR &nbsp; : 035 – 311 – 8975</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- USD&nbsp; : 035 – 311 – 7600</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><strong><span style="font-size: 11pt;">Bank CIMB Niaga - Cabang Gajahmada, Jakarta</span></strong></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- IDR &nbsp; : 800 – 12 – 97271 – 00</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- USD&nbsp; : 800 – 01 – 20945 – 40</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><strong><span style="font-size: 11pt;">BNI Bank - Gambir branch, Jakarta</span></strong></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- IDR&nbsp;&nbsp; : 017 – 5008 – 590</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- USD&nbsp; : 017 – 5020 – 200</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><strong><span style="font-size: 11pt;">Bank Mandiri - Cabang Imam Bonjol, Jakarta</span></strong></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- IDR &nbsp; : 122 - 000 - 664 - 2881</span></p>
          <p style="margin: 0in 0in 0.0001pt 30px; text-align: justify; line-height: 12.4pt;"><span style="font-size: 11pt;">- USD&nbsp; : 122 - 000 - 664 – 2873</span></p>
          <span style="padding: 0px; margin: 0px; font-size: 11pt;"><span style="padding: 0px; margin: 0px; font-size: 11pt;"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Artha Graha Bank, KPO Sudirman Branch, Jakarta</strong><br>&nbsp;&nbsp; &nbsp; &nbsp;&nbsp; IDR Account Number&nbsp; : 107-996-63271</span></span></blockquote>
          </div>
          </li>
          <br>
          <li>
          <p><span style=" line-height: 19.0476px;">{{ trans('ol16') }}</span></p>
          </li>
          <li>
          <p><span style=" line-height: 19.0476px;">{{ trans('ol17') }}</span></p>
          </li>
          <li>
          <p>{{ trans('ol18') }}</p>
          </li>
          </ul>
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