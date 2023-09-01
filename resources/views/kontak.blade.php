@extends('layout.main')
@section('container')
<!-- about us -->
<section class="section-lg contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-title">Kontak</h2>
            </div>
        </div>
        <div class="row contact-bg p-5 rounded mb-5">
            <div class="col-lg-7 mb-4 mb-lg-0">
                <img src="/assets-index/images/logo.png" alt="" style="width: 60%; margin-left: 70px; margin-top: 83px">
            </div>
            <div class="col-lg-5">
                <p class="mb-5">{{ trans('kn') }}</p>
                <a href="tel:+623160009800" class="text-color h5 d-block">(+62)31 6000 9800</a>
                <a href="mailto:admin@rf-berjangkasurabaya.com" class="mb-1 text-color h5 d-block">Admin : admin@rf-berjangkasurabaya.com</a>
                <a href="mailto:hr-recruitment@ptrifangroup.com" class="mb-1 text-color h5 d-block">Recruitment : hr-recruitment@ptrifangroup.com</a>
                <a href="mailto:compliance.sby@rifan-financindo-berjangka.co.id" class="mb-1 text-color h5 d-block">Compliance : compliance.sby@rifan-financindo-berjangka.co.id</a>
                <p>Gedung Ciputra World Office Surabaya Lt. 32<br> Jl. Mayjen Sungkono, Gn. Sari, Kec. Dukuhpakis, Surabaya, Jawa Timur 60224</p>
            </div>
        </div>
        {{-- <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-layers-alt round-icon blue mr-2"></i> Sales</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-desktop round-icon green mr-2"></i> Help & Support</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="card p-4 border-blue">
                    <h5><i class="ti-panel round-icon orange mr-2"></i> Legal Departments</h5>
                    <p class="mb-0">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia.</p>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- background shapes -->
    <img class="contact-bg-1 up-down-animation" src="/assets-index/images/background-shape/feature-bg-2.png" alt="background-shape">
    <img class="contact-bg-2 left-right-animation" src="/assets-index/images/background-shape/green-half-cycle.png" alt="background-shape">
    <img class="contact-bg-3 up-down-animation" src="/assets-index/images/background-shape/green-dot.png" alt="background-shape">
    <img class="contact-bg-4 left-right-animation" src="/assets-index/images/background-shape/service-half-cycle.png" alt="background-shape">
    <img class="contact-bg-5 up-down-animation" src="/assets-index/images/background-shape/feature-bg-2.png" alt="background-shape">
</section>
<!-- /contact -->
<!-- /about us -->
@endsection