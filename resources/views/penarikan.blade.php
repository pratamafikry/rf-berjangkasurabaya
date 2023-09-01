@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('pe1') }}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <section class="inner-page">
          <div class="container">
            <div itemprop="articleBody">
              <p style="padding: 0px; margin-top: 12px; margin-bottom: 12px; font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px;"><span style="padding: 0px; margin: 0px; text-align: justify; font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="padding: 0px; margin: 0px;">{{ trans('pe2') }}<br style="padding: 0px; margin: 0px;"><br style="padding: 0px; margin: 0px;"><span style="padding: 0px; margin: 0px; text-decoration: underline;"><strong style="padding: 0px; margin: 0px;">{{ trans('pe2') }}</strong></span><br style="padding: 0px; margin: 0px;"></span>
            </span>
          </p>
          <ul style="list-style-type: square; margin-left:25px">
            <li><span style="padding: 0px; margin: 0px; font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="padding: 0px; margin: 0px;">{{ trans('pe3') }}</span></span>
            </li>
            <li><span style="padding: 0px; margin: 0px; font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="padding: 0px; margin: 0px;">{{ trans('pe4') }}.</span></span>
            </li>
            <li><span style="padding: 0px; margin: 0px; font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="padding: 0px; margin: 0px;">{{ trans('pe5') }}</span></span>
            </li>
            <li><span style="padding: 0px; margin: 0px; font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="padding: 0px; margin: 0px;">{{ trans('pe6') }}</span></span>
            </li>
          </ul>	</div>
          </div>
        </section>
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