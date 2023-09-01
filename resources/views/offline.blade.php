@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0" style="background-image: url(/assets-index/images/backgrounds/about-bg.png); background-repeat:no-repeat;">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{ trans('reg1') }}</h2>
      </div>
      <div class="col-lg-12 mb-100" >
        <div id="carouselExampleCaptions" class="carousel slide" style="margin-bottom: 10px">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="7" aria-label="Slide 8"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/assets-index/images/prosedur/01.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg2') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/02.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg3') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/03.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg4') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/04.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg5') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/05.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">>
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg6') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/06.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.3">{{ trans('reg7') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/07.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.2;">{{ trans('reg8') }}</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="/assets-index/images/prosedur/08.png" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <p style="font-size: 30px; line-height: 1.2;">{{ trans('reg9') }}</p>
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
        <div itemprop="articleBody">
          <h2 class="contentheading" style="padding: 0px; margin: 0px; font-family: Tahoma, Arial, Helvetica, sans-serif; font-size: 22px; color: #ffffff; text-align: center;"><span style="font-size: 18pt; font-family: 'Open Sans', sans-serif;"><strong>{{ trans('reg10') }}</strong></span></h2>
      <p>&nbsp;</p>
      <div class="article-content" style="padding: 0px; margin: 0px; font-size: 11px; font-family: Tahoma, Arial, sans-serif; line-height: 16.5px;">
      <ol style="padding: 0px; margin: 12px 0px;">
      <ul style="padding: 0px; margin: 12px 0px;">
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;">
      <p><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">{{ trans('reg11') }}&nbsp; &nbsp;</span><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">&nbsp; &nbsp; &nbsp; &nbsp;</span></p>
      </li>
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;">
      <p><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="font-family: 'Open Sans', sans-serif; font-size: 13.3333px;">{{ trans('reg12') }}&nbsp; &nbsp; &nbsp;</span> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;</span></p>
      </li>
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;">
      <p><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">{{ trans('reg13') }}</span></p>
      <blockquote style="margin: 0 0 0 40px; border: none; padding: 0px;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="line-height: 19.8px;">{{ trans('reg14') }}<br></span><span style="line-height: 19.8px;">{{ trans('reg15') }}<br></span><span style="line-height: 19.8px;">{{ trans('reg16') }}<br></span><span style="line-height: 19.8px;">{{ trans('reg17') }}</span></span></blockquote>
      </li>
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;">
      <p><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">Isi {{ trans('reg18') }}</span></p>
      </li>
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;">
      <p><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">{{ trans('reg19') }}<strong>.</strong></span></p>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-family: 'Open Sans', sans-serif;"><strong><span style="font-size: 10pt;">Bank BCA - Cabang Sudirman, Jakarta</span></strong></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- IDR : 035 – 311 – 8975</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- USD : 035 – 311 – 7600</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px; margin: 0px;">&nbsp;</div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-family: 'Open Sans', sans-serif;"><strong><span style="font-size: 10pt;">Bank CIMB Niaga - Cabang Gajahmada, Jakarta</span></strong></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- IDR : 800 – 12 – 97271 – 00</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- USD&nbsp; : 800 – 01 – 20945 – 40</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px; margin: 0px;">&nbsp;</div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-family: 'Open Sans', sans-serif;"><strong><span style="font-size: 10pt;">BNI Bank - Gambir branch, Jakarta</span></strong></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- IDR&nbsp;&nbsp; : 017 – 5008 – 590</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- USD&nbsp; : 017 – 5020 – 200</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px; margin: 0px;">&nbsp;</div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-family: 'Open Sans', sans-serif;"><strong><span style="font-size: 10pt;">Bank Mandiri - Cabang Imam Bonjol, Jakarta</span></strong></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- IDR &nbsp; : 122 - 000 - 664 - 2881</span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- USD&nbsp; : 122 - 000 - 664 - 2873</span></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px; margin: 0px;">&nbsp;</div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-family: 'Open Sans', sans-serif;"><strong><span style="font-size: 10pt;">Bank Artha Graha - Cabang KPO Sudirman, Jakarta</span></strong></span></div>
      <div style="font-family: Tahoma, Arial, sans-serif; font-size: 11px; line-height: 16.5px; padding: 0px 0px 0px 40px; margin: 0px; text-align: justify;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">- IDR &nbsp; : 107 - 996 - 3271</span></div>
      </li>
      </ul>
      <ul style="padding: 0px; margin: 12px 0px; list-style-type: square;">
      <li style="padding: 0px; margin: 0px 0px 0px 35px; line-height: 19.8px;"><span style="font-size: 10pt; font-family: 'Open Sans', sans-serif;">{{ trans('reg20') }}<br><br></span></li>
      </ul>
      </ol></div>	</div>
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