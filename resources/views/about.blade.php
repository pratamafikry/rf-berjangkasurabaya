@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg about pb-0">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h2 class="section-title">{{__('about1')}}</h2>
      </div>
      <div class="col-lg-12 mb-100">
        <p>{{__('about2')}}</p>
        <p>{{__('about3')}}</p>
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

<!-- product -->


<section class="section product" style="">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">{{__('about4')}}</h2>
        <p class="mb-100">{{__('about5')}}</p>
      </div>
      
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="/assets-index/images/legalitas-1.jpg"><img src="/assets-index/images/legalitas-1.jpg" alt="product-img" class=" gallery-lightbox rounded w-100 img-fluid"></a>
      </div>
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="/assets-index/images/legalitas-2.jpg"><img src="/assets-index/images/legalitas-2.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
      </div>
      <div class="col-md-4 col-sm-6 mb-50">
        <a href="/assets-index/images/legalitas-3.jpg"><img src="/assets-index/images/legalitas-3.jpg" alt="product-img" class="rounded w-100 img-fluid"></a>
      </div>
      {{-- <div class="col-12 text-center">
        <a href="#" class="btn btn-primary">Explore More Product</a>
      </div> --}}
    </div>
  </div>
</section>

  <!-- our vision -->
{{-- <section class="section">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h2 class="section-title">Our Vision</h2>
        <p>Far far away, behind the word mountains,
          far from the countries Vokalia and Consonantia,
          there live the blind texts. Separated they
          live in Bookmarksgrove right at the coast of the
          Semantics, a large language ocean.</p>
      </div>
      <div class="col-md-6">
        <img src="/assets-index/images/about/vision.png" alt="vision" class="img-fluid w-100">
      </div>
    </div>
  </div>
</section> --}}
<!-- /our vision -->

<!-- clients -->
<section class="section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <h2 class="section-title">{{__('about6')}}</h2>
        <ul class="list-inline text-center">
          <li class="list-inline-item mx-5 mb-5" style="width: 25%"><a href="https://bappebti.go.id/pialang_berjangka/detail/012"><img src="/assets-index/images/clients-logo/kemendag.png" alt="clients-logo" class="img-fluid" ></a></li>
          <li class="list-inline-item mx-5 mb-5" style="width: 10%"><a href="https://www.aspebtindo.org/anggota/daftar-anggota?tipe=&search=rifan"><img src="/assets-index/images/clients-logo/aspebtindo.png" alt="clients-logo" class="img-fluid" ></a></li>
          <li class="list-inline-item mx-5 mb-5" style="width: 20%"><a href="https://www.ptkbi.com/index.php/c_kbi_wppue_01_anggota_mitra#PL"><img src="/assets-index/images/clients-logo/kbi.png" alt="clients-logo" class="img-fluid"></a></li>
          <li class="list-inline-item mx-5 mb-5" style="width: 25%"><a href="https://www.jfx.co.id/media?hal=daftar-pelaku&data=Pialang"><img src="/assets-index/images/clients-logo/jfx.png" alt="clients-logo" class="img-fluid"></a></li>
          
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- /clients -->
</section>
<!-- /product -->
@endsection