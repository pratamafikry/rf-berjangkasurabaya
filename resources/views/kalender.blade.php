@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('ke1') }}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <iframe src="https://sslecal2.investing.com?defaultFont=%23000000&ecoDayFontColor=%23000000&columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=5,25,37,45,39,14,48,4,10,35,17,6,11,42,44,22,43,36,26,12,46,41,178,72&calType=week&timeZone=27&lang=54" width="900" height="500" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" style="margin: 0 auto;" ></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #ffffff;text-decoration: none;">Kalender Ekonomi Real Time dipersembahkan oleh <a href="https://id.investing.com" rel="nofollow" target="_blank" style="font-size: 11px;color: #06529D; font-weight: bold;" class="underline_link">Investing.com Indonesia</a>.</span></div>
        <h4>{{ trans('ke2') }}</h4>
        <p>{{ trans('ke3') }}</p>
        <p>{{ trans('ke4') }}</p>
        <p>{{ trans('ke5') }} </p>
        <h4>{{ trans('ke6') }}</h4>
        <p>{{ trans('ke7') }}</p>
        <p>{{ trans('ke8') }}</p>
        <p>{{ trans('ke9') }}</p>
        <p>{{ trans('ke10') }}</p>
        <p>{{ trans('ke11') }}</p>
        <div class="col-lg-12 mb-100">
        
        </div>
      </div>
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