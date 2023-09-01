@extends('layout.main')
@section('container')
<section class="hero-section hero" data-background="" style="background-image: url(/assets-index/images/hero-area/banner-b.png);">
  <div class="container">
    <div class="row">
      <div class="col-lg-11 text-center zindex-1">
        <h4 class="mb-0" style="color: #ffffff">{{__('hero1')}}</h2>
        <h1 class="mb-3" style="color: #ffffff">{{__('hero2')}}</h1>
        <p class="mb-4" style="color: #929397">{{__('hero3')}}</p>
        <a href="http://etrade.rifanberjangka.com/login.php" class="btn btn-secondary btn-lg" style="margin-bottom: 5%">{{__('mulai-trading')}}</a>
        <a href="#feature" class="btn btn-secondary btn-lg page-scroll" style="margin-left: 0.5%; margin-bottom: 5%;">{{__('pelajari')}}</a>
        <!-- banner image -->
        <img class="img-fluid banner-image" src="/assets-index/images/hero-area/banner-img.png" alt="banner-img">
      </div>
    </div>
  </div>
  <!-- background shapes -->
  <div id="scene">
    <img class="img-fluid hero-bg-1 up-down-animation" src="/assets-index/images/background-shape/feature-bg-2.png" alt="">
    <img class="img-fluid hero-bg-2 left-right-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-3 left-right-animation" src="/assets-index/images/background-shape/seo-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-4 up-down-animation" src="/assets-index/images/background-shape/green-dot.png" alt="">
    <img class="img-fluid hero-bg-5 left-right-animation" src="/assets-index/images/background-shape/blue-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-6 up-down-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="">
    <img class="img-fluid hero-bg-7 left-right-animation" src="/assets-index/images/background-shape/yellow-triangle.png" alt="">
    <img class="img-fluid hero-bg-8 up-down-animation" src="/assets-index/images/background-shape/service-half-cycle.png" alt="">
    <img class="img-fluid hero-bg-9 up-down-animation" src="/assets-index/images/background-shape/team-bg-triangle.png" alt="">
  </div>
</section>
<!-- /hero-area -->

<!-- feature -->
<section class="section feature mb-0" id="feature">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center" style="margin-top: 325px">
        <h2 class="section-title">{{__('feature1')}}</h2>
        <p class="mb-100">{{__('feature2')}}</p>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-shield feature-icon mr-4"></i>
          </div>
          <div>
            <h4 style="margin-left: 10px">{{__('legalitas1')}}</h4>
            <p style="margin-left: 10px">{{__('legalitas2')}}</p>
          </div>
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-mobile feature-icon mr-4"></i>
          </div>
          <div>
            <h4 style="margin-left: 10px">{{__('kemudahan1')}}</h4>
            <p style="margin-left: 10px">{{__('kemudahan2')}}</p>
          </div>
        </div>
      </div>
      <!-- feature item --> 
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-user feature-icon mr-4"></i>
          </div>
          <div>
            <h4 style="margin-left: 10px">{{__('pialang1')}}</h4>
            <p style="margin-left: 10px">{{__('pialang2')}}</p>
          </div>
        </div>
      </div>
      <!-- feature item -->
      <div class="col-md-6 mb-80">
        <div class="d-flex feature-item">
          <div>
            <i class="ti-receipt feature-icon mr-4"></i>
          </div>
          <div>
            <h4 style="margin-left: 10px">{{__('laporan-transaksi1')}}</h4>
            <p style="margin-left: 10px">{{__('laporan-transaksi2')}}</p>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-11 text-center zindex-1" style="">
    <a href="https://regol.rifan-financindo-berjangka.co.id" class="btn btn-secondary btn-lg" style="margin-bottom: 5%;"><strong>{{ trans('akun') }}</strong></a>
    <a href="http://etrade.rifanberjangka.com/login.php" class="btn btn-secondary btn-lg" style="margin-bottom: 5%;">{{__('mulai-trading')}}</a>
    {{-- <a href="https://regol.rifan-financindo-berjangka.co.id/" class="btn btn-daftar btn-lg" style="margin-left: 15%; margin-bottom: 5 %"><strong>BUKA AKUN SEKARANG</strong></a>
    <a href="http://etrade.rifanberjangka.com/login.php" class="btn btn-secondary btn-lg" style="margin-left: 3%; margin-bottom: 5%">MULAI TRADING SEKARANG</a> --}}
  </div>
  </div>
  </div>
  <img class="feature-bg-1 up-down-animation" src="/assets-index/images/background-shape/feature-bg-1.png" alt="bg-shape">
  <img class="feature-bg-2 left-right-animation" src="/assets-index/images/background-shape/feature-bg-2.png" alt="bg-shape">
</section>
<!-- /feature -->

<!-- marketing -->
<section class="section-lg seo">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="seo-image">
          <img class="img-fluid" src="/assets-index/images/logo.png" alt="form-img">
        </div>
      </div>
      <div class="col-md-5">
        <h2 class="section-title">{{__('tentang-kami1')}}</h2>
        <p>{{__('tentang-kami2')}} </p>
        <a href="/about" class="btn btn-rounded" >{{__('baca')}}</a>
      </div>
    </div>
  </div>
  <!-- background image -->
  <img class="img-fluid seo-bg" src="/assets-index/images/backgrounds/seo-bg.png" alt="seo-bg">
  <!-- background-shape -->
  <img class="seo-bg-shape-1 left-right-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="bg-shape">
  <img class="seo-bg-shape-2 up-down-animation" src="/assets-index/images/background-shape/seo-half-cycle.png" alt="bg-shape">
  <img class="seo-bg-shape-3 left-right-animation" src="/assets-index/images/background-shape/seo-ball-2.png" alt="bg-shape">
</section>
<!-- /marketing -->

<!-- service -->
<section class="section-lg service">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-md-5 order-2 order-md-1">
        <h2 class="section-title">{{__('kelebihan1')}}</h2>
        <p class="mb-4">{{__('kelebihan2')}}</p>
        <ul class="pl-0 service-list">
          <li style="color: #ececec"><i class="ti-shield text-purple"></i>{{__('kelebihan3')}}</li>
          <li style="color: #ececec"><i class="ti-mobile text-purple"></i>{{__('kelebihan4')}}</li>
          <li style="color: #ececec"><i class="ti-stats-up text-purple"></i>{{__('kelebihan5')}}</li>
          <li style="color: #ececec"><i class="ti-face-smile text-purple"></i>{{__('kelebihan6')}}</li>
          <li style="color: #ececec"><i class="ti-credit-card text-purple"></i>{{__('kelebihan7')}}</li>
        </ul>
        <a href="https://install.appcenter.ms/users/rifanfinancindoberjangkapt-gmail.com/apps/rifanfinancindoberjangka/distribution_groups/rifanfinancindoberjangka" style="margin-right: 25px"><img src="/assets-index/images/apk_download.png" alt="" style="width: 200px"></a>
        <a href="https://apps.apple.com/us/app/tradepro-rifanfinancindo/id1449233045"><img src="/assets-index/images/appstore_download.png" alt="" style="width: 200px"></a>
      </div>
      <div class="col-md-7 order-1 order-md-2">
        <img class="img-fluid layer-3" src="/assets-index/images/hero-img.png" alt="service">
      </div>
    </div>
  </div>
  <!-- background image -->
  <img class="img-fluid service-bg" src="/assets-index/images/backgrounds/service-bg.png" alt="service-bg">
  <!-- background shapes -->
  <img class="service-bg-shape-1 up-down-animation" src="/assets-index/images/background-shape/service-half-cycle.png" alt="background-shape">
  <img class="service-bg-shape-2 left-right-animation" src="/assets-index/images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /service -->

<section class="section-lg pb-0 pricing" id="produk">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">{{__('produk1')}}</h2>
        <p class="mb-50">{{__('produk2')}} </p>
      </div>
      <div class="col-lg-10 mx-auto">
        <div class="row justify-content-center">
          <!-- pricing table -->
          <div class="produk-logo col-md-6 col-lg-4 mb-5 mb-lg-0">
            <a href="/spa3"><img src="/assets-index/images/product/produk-1.png" alt="" style="width: 120%"></a>
            
          </div>
          <!-- pricing table -->
          <div class="produk-logo col-md-6 col-lg-4 mb-5 mb-lg-0">
            <a href="/spa1"><img src="/assets-index/images/product/produk-2.png" alt="" style="width: 120%"></a>
            {{-- <div class="rounded text-center pricing-table table-2">
              <h3>Standard</h3>
              <h1><span>$</span>75</h1>
              <p>Far far away, behind the
                wordmountains, far from the
                countries Vokalia and
              </p>
              <a href="#" class="btn pricing-btn px-2">Buy Now</a>
            </div> --}}
          </div>
          <!-- pricing table -->
          <div class="produk-logo col-md-6 col-lg-4 mb-5 mb-lg-0">
            <a href="/spa2"><img src="/assets-index/images/product/produk-3.png" alt="" style="width: 120%"></a>
            {{-- <div class="rounded text-center pricing-table table-3">
              <h3>Premium</h3>
              <h1><span>$</span>99</h1>
              <p>Far far away, behind the
                wordmountains, far from the
                countries Vokalia and
              </p>
              <a href="#" class="btn pricing-btn px-2">Buy Now</a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
  
</section>

<!-- team -->
<section class="section-lg team" id="news">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">{{__('berita1')}}</h2>
        <p class="mb-5">{{__('berita2')}}</p>
        
      </div>
    </div>
    <div class="col-10 mx-auto">
      <div class="team-slider">
        <!-- team-member -->
        {{-- @foreach($posts as $post)
        <div class="card">
          <div class="position-absolute px-2 py-1 text-white" style="background-color: rgba(0,0,0,0.7)"><a href="/categories/{{$post->category->slug}}" class="text-decoration-none text-white">{{$post->category->name}}</a></div>
          @if ($post->image)
           <img src="{{ asset('storage/'.$post->image)}}" class="card-img-top" alt="{{ $post->category->name }}">
          @else
            <img src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{ $post->category->name }}">
          @endif
          
          <div class="card-body">
              <h5 class="card-title">{{$post->title}}</h5>
            <p>
                <small class="text-muted">Author : <a href="/author/{{$post->author->username}}" class="text-decoration-none">{{ $post->author->name}}</a> {{$post->created_at->diffForHumans()}}
              </small>
          </p>
          <p class="card-text">{{$post->excerpt}}</p>
          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
          </div>
        </div>
        @endforeach --}}
        @foreach($posts as $post)
        <div class="team-member">
          <div class="d-flex mb-4">
            <div class="mr-3" style="width: 490px">
              @if ($post->image)
           <img class="img-fluid" src="{{ asset('storage/'.$post->image)}}" class="card-img-top" alt="{{ $post->category->name }}">
          @else
            <img class="img-fluid" src="https://source.unsplash.com/500x400?{{$post->category->name}}" class="card-img-top" alt="{{ $post->category->name }}">
          @endif
            </div>
          </div>
            <div class="align-self-center">
              <a href="/news/{{ $post->slug }}"><h4>{{$post->title}}</h4></a>
              <h6 class="text-color">Author : {{$post->author->name}} in {{$post->category->name}}</a></h6>
            </div>
          <p>{{$post->excerpt}}</p>
        </div>
        @endforeach
      </div>
      <!-- background shapes -->
  <img class="pricing-bg-shape-1 up-down-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="pricing-bg-shape-2 up-down-animation" src="/assets-index/images/background-shape/seo-half-cycle.png" alt="background-shape">
  <img class="pricing-bg-shape-3 left-right-animation" src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape">
    </div>
    <a href="/news" class="btn btn-rounded-gold mb-4" style="margin-left: 40%">{{__('baca')}}</a>
  </div>
  <!-- backgound image -->
  <img src="/assets-index/images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
  <!-- background shapes -->
  <img class="team-bg-shape-1 up-down-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-2 left-right-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-3 left-right-animation" src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape">
  <img class="team-bg-shape-4 up-down-animation img-fluid" src="/assets-index/images/background-shape/team-bg-dots.png" alt="background-shape">
</section>
<!-- /team -->

<section class="section-lg team" id="team">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">{{__('kegiatan')}}</h2>
        
        
      </div>
    </div>
    <div class="col-10 mx-auto">
      <div class="team-slider">
        
        @foreach($kegiatan as $kegiatan)
        <div class="team-member">
          <div class="d-flex mb-4">
            <div class="mr-3" style="width: 490px">
              @if ($kegiatan->image)
           <img class="img-fluid" src="{{ asset('storage/'.$kegiatan->image)}}" class="card-img-top" alt="{{ $kegiatan->category->name }}">
          @else
            <img class="img-fluid" src="https://source.unsplash.com/500x400?{{$kegiatan->category->name}}" class="card-img-top" alt="{{ $kegiatan->category->name }}">
          @endif
            </div>
          </div>
            <div class="align-self-center">
              <a href="/news/{{ $kegiatan->slug }}"><h4>{{$kegiatan->title}}</h4></a>
              <h6 class="text-color">Author : {{$kegiatan->author->name}} in {{$kegiatan->category->name}}</a></h6>
            </div>
          <p>{{$kegiatan->excerpt}}</p>
        </div>
        @endforeach
        
      </div>
     <!-- background shapes -->
  <img class="pricing-bg-shape-1 up-down-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="pricing-bg-shape-2 up-down-animation" src="/assets-index/images/background-shape/seo-half-cycle.png" alt="background-shape">
  <img class="pricing-bg-shape-3 left-right-animation" src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape">
    </div>
    <a href="/info-kegiatan" class="btn btn-rounded-gold mb-4" style="margin-left: 40%">{{__('baca')}}</a>
  </div>
  <!-- backgound image -->
  <img src="/assets-index/images/backgrounds/team-bg.png" alt="team-bg" class="img-fluid team-bg">
  <!-- background shapes -->
  <img class="team-bg-shape-1 up-down-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-2 left-right-animation" src="/assets-index/images/background-shape/seo-ball-1.png" alt="background-shape">
  <img class="team-bg-shape-3 left-right-animation" src="/assets-index/images/background-shape/team-bg-triangle.png" alt="background-shape">
  <img class="team-bg-shape-4 up-down-animation img-fluid" src="/assets-index/images/background-shape/team-bg-dots.png" alt="background-shape">
</section>

<!-- pricing -->
{{-- <section class="widget">
  <div class="container-fluid">
      <h2 class="section-title" style="text-align: center">Kalender Ekonomi & Kurs Mata Uang</h2>
          <p class="mb-5" style="text-align: center">Indikator yang dapat membantu keputusan transaksi nasabah</p>
    <div class="card">
      <div class="card-body" style="background-color: #fff; border-radius: 10px">
        <div class="row">
        <div class="col">
        <span><iframe src="https://sslecal2.investing.com?columns=exc_flags,exc_currency,exc_importance,exc_actual,exc_forecast,exc_previous&features=datepicker,timezone&countries=5,25,37,45,39,14,48,4,10,35,17,6,11,42,44,22,43,36,26,12,46,41,178,72&calType=week&timeZone=27&lang=54" width="650" height="467" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" style="border-radius: 10px; display:flex; margin-left: 40px;"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"><span style="font-size: 11px;color: #000000;text-decoration: none;">Kalender Ekonomi Real Time dipersembahkan oleh <a href="https://id.investing.com" rel="nofollow" target="_blank" style="font-size: 11px;color: #000000; font-weight: bold;" class="underline_link">Investing.com Indonesia</a>.</span></div></span>
      </div>
        <div class="col">
        <iframe src="https://id.widgets.investing.com/live-currency-cross-rates?theme=lightTheme" width="100%" height="100%" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" style="margin-right: 20px"></iframe><div class="poweredBy" style="font-family: Arial, Helvetica, sans-serif;"></div>
        </div>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- /pricing -->

<!-- client logo slider -->
<section class="section">
  <div class="container">
      <div class="client-logo-slider align-self-center">
          <a href="https://www.aspebtindo.org/anggota/daftar-anggota?tipe=&search=rifan" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/aspebtindo.png" alt="client-logo" style="width: 50px"></a>
          <a href="https://bappebti.go.id/pialang_berjangka/detail/012" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/kemendag.png" alt="client-logo"></a>
          <a href="https://www.jfx.co.id/media?hal=daftar-pelaku&data=Pialang" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/jfx.png" alt="client-logo"></a>
          <a href="https://www.ptkbi.com/index.php/c_kbi_wppue_01_anggota_mitra#PL" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/kbi.png" alt="client-logo"></a>
          <a href="https://www.aspebtindo.org/anggota/daftar-anggota?tipe=&search=rifan" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/aspebtindo.png" alt="client-logo" style="width: 50px"></a>
          <a href="https://bappebti.go.id/pialang_berjangka/detail/012" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/kemendag.png" alt="client-logo"></a>
          <a href="https://www.jfx.co.id/media?hal=daftar-pelaku&data=Pialang" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/jfx.png" alt="client-logo"></a>
          <a href="https://www.ptkbi.com/index.php/c_kbi_wppue_01_anggota_mitra#PL" class="text-center d-block outline-0 p-5"><img class="d-unset img-fluid" src="/assets-index/images/clients-logo/kbi.png" alt="client-logo"></a>
          
      </div>
  </div>
</section>
<!-- /client logo slider -->

{{-- <!-- newsletter -->
<section class="newsletter">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2>Subscribe to our newsletter</h2>
        <p class="mb-5">Receive updates, news and deals</p>
      </div>
      <div class="col-lg-8 col-sm-10 col-12 mx-auto">
        <form action="#">
          <div class="input-wrapper position-relative">
            <input type="email" class="newsletter-form" id="newsletter" placeholder="Enter your email">
            <button type="submit" value="send" class="btn newsletter-btn">subscribe</button>
          </div>
        </form>
      </div>
    </div>
  </div> --}}
  <!-- background shapes -->
  <img class="newsletter-bg-shape left-right-animation" src="/assets-index/images/background-shape/seo-ball-2.png" alt="background-shape">
</section>
<!-- /newsletter -->
@endsection