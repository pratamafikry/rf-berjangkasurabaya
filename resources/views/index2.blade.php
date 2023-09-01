@extends('layout.main')
@section('container')
<section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Rifan Financindo Berjangka <span>Ciputra World Surabaya</span></h1>
            <h2>Mengapa memilih Rifan Financindo Berjangka?</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="/asset-home/img/hero-img.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container-fluid">

        <div class="row">
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            {{-- <a href="https://youtu.be/FwApTaNsolo" class="glightbox play-btn mb-4"></a> --}}
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Tentang PT. Rifan Financindo Berjangka Ciputra World Surabaya</h3>
            <p>PT. Rifan Financindo Berjangka Ciputra World Surabaya hadir sebagai perusahaan yang berorientasi kepada layanan jasa yang memberikan fasilitas dan edukasi terbaik bagi masyarakat yang tertarik untuk mendapatkan keuntungan dalam perdagangan komoditas dan pasar derivatif di Indonesia. Perusahaan telah didukung oleh teknologi informasi yang mumpuni dan sumber daya manusia profesional yang memenuhi standar kualifikasi kepatutan dan kompetensi oleh pemerintah yang dinaungi oleh <strong>Badan Pengawas Perdagangan Berjangka Komoditi (BAPPEBTI)</strong></p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-globe"></i></div>
              <h4 class="title"><a href="">Apa Yang Kami Lakukan ?</a></h4>
              <p class="description">Kami memberikan pandangan, arahan dan edukasi kepada seluruh nasabah maupun masyarakat yang tertarik dengan kegiatan bisnis investasi. Konsultan Perusahaan Rifan Financindo Surabaya berupaya dengan sepenuh hati untuk memberikan yang terbaik dan mengembangkan kesadaran masyarakat bahwa kegiatan investasi merupakan sebuah kegiatan yang menyenangkan dan mempunyai nilai bisnis dengan keuntungan yang sangat tinggi.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-clipboard"></i></div>
              <h4 class="title"><a href="">Misi Kami</a></h4>
              <p class="description">1. Memberikan pelayanan terbaikdan terpercaya <br>
                2. Fair terhadap konsumen <br>
                3. Tumbuh & berkembang secara kekeluargaan <br>
                4. Menciptakan lapangan kerja yang seluas-luasnya</p>
            </div>

            {{-- <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Dine Pad</a></h4>
              <p class="description">Explicabo est voluptatum asperiores consequatur magnam. Et veritatis odit. Sunt aut deserunt minus aut eligendi omnis</p>
            </div> --}}

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Mengapa Kami ?</h2>
          <p>Alasan Memilih Kami</p>
        </div>

        <div class="row" data-aos="fade-left">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <img src="/asset-home/img/icon-A.png" alt="" style="width: 25%">
              <h3><a href="/legalitas-perusahaan">Legalitas Perusahaan</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <img src="/asset-home/img/icon-B.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Efisiensi Modal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <img src="/asset-home/img/icon-C.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Wakil Pialang Berjangka Resmi</a></h3>
            </div>
          </div>
            <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
              <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                <img src="/asset-home/img/icon-D.png" alt="" style="width: 25%">
                <h3><a href="/alasan-memilih-kami">Likuiditas Tinggi</a></h3>
              </div>
            </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <img src="/asset-home/img/icon-E.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Fasilitas Online Trading</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <img src="/asset-home/img/icon-F.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Laporan Transaksi Harian</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <img src="/asset-home/img/icon-G.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Tanpa Batasan Waktu Posisi Terbuka</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <img src="/asset-home/img/icon-H.png" alt="" style="width: 25%">
              <h3><a href="/alasan-memilih-kami">Layanan Sistem Informasi Transaksi Nasabah (SITNa)</a></h3>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Features Section -->

    {{-- <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">

          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Details Section ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Produk Unggulan</h2>
          <p>Berikut Produk Unggulan Kami</p>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-left">
            <img src="/asset-home/img/produk-1.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Emas LOCO London</h3>
            <p class="fst-italic">
              roduk derivatif emas Loco London XUL10 (Rupiah) dan XULF (USD) adalah kode kontrak gulir harian emas Loco London yang ditransaksikan melaui mekanisme Sistem Perdagangan Alternatif di Bursa Berjangka Jakarta. Harga perdagangan XUL10/XULF mengacu pada harga fisik emas Loco London over the counter (OTC) di New York.
            </p>
            <div class="text-center text-lg-start">
              <a href="/spa3" class="btn-get-started scrollto">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>

        
        
        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-right">
            <img src="/asset-home/img/produk-2.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5" data-aos="fade-up">
            <h3>Indeks Derivatif Saham Hong Kong</h3>
            <p class="fst-italic">
              HKK50_BBJ (Rupiah) dan HKK5U_BBJ (USD) adalah kode kontrak gulir berkala indeks asing (indeks derivatif saham Hong Kong) yang ditransaksikan melaui mekanisme Sistem Perdagangan Alternatif di Bursa Berjangka Jakarta. Harga perdagangan HKK50_BBJ/HKK5U_BBJ mengacu pada produk derivatif saham di Hong Kong Exchanges and Clearing Limited (HKEx).Indeks derivatif saham Hong Kong (Hang Seng Index Futures) di HKEx adalah turunan dari indeks saham utama Hang Seng (Hang Seng Index), sehingga setiap perubahan harga yang terjadi pada indeks derivatif tersebut akan selalu mengacu pada perubahan yang terjadi di pasar sahamnya.
            </p>
            <div class="text-center text-lg-start">
              <a href="/spa3" class="btn-get-started scrollto">Pelajari Lebih Lanjut</a>
            </div>
          </div>
        </div>
        
        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="/asset-home/img/produk-3.png" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Indeks Derivatif Saham Jepang</h3>
            <p class="fst-italic">
              PK50_BBJ (IDR) dan JPK5U_BBJ (USD) adalah kode kontrak bergulir berkala indeks asing (indeks derivatif saham Jepang) yang terdaftar dan tercatat di Bursa Berjangka Jakarta. Harga perdagangan JPK50_BBJ / JPK5U_BBJ referensi derivatif untuk indeks saham Nikkei 225 diperdagangkan di Singapore Exchange (SGX).</p>

              <div class="text-center text-lg-start">
                <a href="/spa2" class="btn-get-started scrollto">Pelajari Lebih Lanjut</a>
              </div>
          </div>
        </div>
       

      </div>
    </section><!-- End Details Section -->


    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <h1 style="color: #eee; text-align: center;">Legalitas</h1>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/legalitas-1.jpg" class="testimonial-img" alt="" style="width: 25%">
              </a>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://www.aspebtindo.org/anggota/daftar-anggota">
                <img src="/asset-home/img/legalitas-2.jpg" class="testimonial-img" alt="">
              </a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/legalitas-3.jpg" class="testimonial-img" alt="" style="width: 25%">
              </a>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/legalitas-4.jpg" class="testimonial-img" alt="" style="width: 25%">
              </a>
                
              </div>
            </div><!-- End testimonial item -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Corporate Value</h2>
          <p>Nilai Luhur Kami</p>
        </div>

        <div class="row g-0" data-aos="fade-left">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="100">
              <a href="/asset-home/img/gallery/gallery-1.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-1.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="150">
              <a href="/asset-home/img/gallery/gallery-2.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-2.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="200">
              <a href="/asset-home/img/gallery/gallery-3.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-3.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="250">
              <a href="/asset-home/img/gallery/gallery-4.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-4.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="300">
              <a href="/asset-home/img/gallery/gallery-5.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-5.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="350">
              <a href="/asset-home/img/gallery/gallery-6.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-6.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="400">
              <a href="/asset-home/img/gallery/gallery-7.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-7.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item" data-aos="zoom-in" data-aos-delay="450">
              <a href="/asset-home/img/gallery/gallery-8.png" class="gallery-lightbox">
                <img src="/asset-home/img/gallery/gallery-8.png" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    
    <!-- ======= Team Section ======= -->
    <section id="news" class="news">
      <div class="container">
        
        <div class="section-title" data-aos="fade-up">
          <h2>News</h2>
          <p>Hal-Hal Aktual Seputar Perusahaan</p>
          <a href="https://www.rfbnews.com/index.php/id/" target="_blank">
            <img src="/asset-home/img/rfbnews.jpg" alt="">
          </a>
        </div>
        
        <div class="row justify-content-md-center" data-aos="fade-left">
          
          {{-- <div class="col-lg-3 col-md-6 center">
            <iframe src="https://fxpricing.com/fx-widget/market-currency-rates-widget.php?id=1,2,3,5,14,20" width="100%" height="290" style="border: 1px solid #eee;"></iframe> <div id="fx-pricing-widget-copyright"> <span>Powered by </span><a href="https://fxpricing.com/" target="_blank">FX Pricing</a> </div> <style type="text/css"> #fx-pricing-widget-copyright{ text-align: center; font-size: 13px; font-family: sans-serif; margin-top: 10px; margin-bottom: 10px; color: #9db2bd; } #fx-pricing-widget-copyright a{ text-decoration: unset; color: #bb3534; font-weight: 600; } </style>
          </div> --}}
          
          {{-- <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <!-- Currency Converter Script - FxExchangeRate.com  --><div style="font-size:16px; font-family: sans-serif,Arial, Helvetica;width:278px; line-height:24px;border:1px solid #2D6AB4;background-color:#FFFFFF;margin:0px auto;"><div style="background-color:#2D6AB4;height:2.2rem;color:#FFFFFF; font-weight:bold;text-align:left;padding:6px 0 0 6px; max-width:100%;"><i style="background-size: contain;background-position: 50%;background-repeat: no-repeat; position: relative;display: inline-block;width: 1.33333333em;line-height: 1em; 
              padding:0 8px 0 0px;font-size:18px;background-image:url(https://w.fxexchangerate.com/static/flags/usd.webp);">&nbsp;</i><a rel="nofollow" style="color:#FFFFFF;padding-left:5px;text-decoration:none;" href="https://usd.fxexchangerate.com">United States Dollar</a></div><script type="text/javascript" src="https://w.fxexchangerate.com/converter.php?fm=USD&ft=EUR,GBP,JPY,AUD,CAD,CNY,HKD,IDR,&lg=en&am=1&ty=2"></script></div><!--  End of Currency Converter Script -  FxExchangeRate.com -->
            </div> --}}
            
            <div class="col-lg-9 col-md-6 mt-5 mt-lg-0">
              <!-- TradingView Widget BEGIN -->
              <div class="tradingview-widget-container">
                <div class="tradingview-widget-container__widget"></div>
                <div class="tradingview-widget-copyright"><a href="https://id.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Lacak seluruh pasar di TradingView</span></a></div>
                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-forex-cross-rates.js" async>
            {
              "width": 770,
              "height": 400,
              "currencies": [
                "EUR",
                "USD",
                "JPY",
                "GBP",
                "CHF",
                "AUD",
                "CAD",
                "NZD"
              ],
              "isTransparent": false,
            "colorTheme": "light",
            "locale": "id"
          }
          </script>
          </div>
          <!-- TradingView Widget END -->
        </div>

        {{--<div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
          <div class="member" data-aos="zoom-in" data-aos-delay="400">
            <div class="pic"><img src="/asset-home/img/team/team-4.jpg" class="img-fluid" alt=""></div>
            <div class="member-info">
              <h4>Amanda Jepson</h4>
              <span>Accountant</span>
              <div class="social">
                <a href=""><i class="bi bi-twitter"></i></a>
                <a href=""><i class="bi bi-facebook"></i></a>
                <a href=""><i class="bi bi-instagram"></i></a>
                <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div> --}}
          
        </div>
        
      </div>
    </section><!-- End Team Section -->

    <!-- ======= Pricing Section ======= -->
    <section id="invest" class="invest">
      <div class="container">
        
        <div class="section-title" data-aos="fade-up">
          <h2>Mulai Investasi</h2>
          <p>Mulai berinvestasi dengan membuat akun trading !</p>

          <div class="row">
								

            <div class="col-12 col-sm-6 col-lg-6">
          <div style="background: url('/asset-home/img/trading-bg.png'); background-size: cover; background-position: center; width: 99%; height: 265px; border-radius: 10px; border: 2px solid #f50723; padding: 15px;">
          <div style="color: #ffffff; text-align: left;">
          <h4 style="color: #bb3534"><strong>LIVE TRADING</strong></h4>
          </div>
          <div style="width: 100%; padding-top: 23%; justify-content: center;"><a href="http://demo.rifanberjangka.com/login.php" target="_blank"> <button type="button" class="btn btn-xl btn-danger mb-2" style="border-radius: 10px;">AKUN DEMO</button> </a> <a href="http://etrade.rifanberjangka.com/login.php" target="_blank"> <button type="button" class="btn btn-xl btn-danger mb-2" style="border-radius: 10px; margin-left: 10px;">AKUN REAL</button> </a></div>
          </div>
          </div>
          <div class="col-12 col-sm-6 col-lg-6">
          <div style="background: url('/asset-home/img/regist-bg.png'); background-size: cover; background-position: center; width: 99%; height: 265px; border-radius: 10px; border: 2px solid #0c832a; padding: 15px;">
          <div style="color: #ffffff; text-align: left;">
          <h4 style="color: rgb(18, 100, 42)"><strong>REGISTRATION</strong></h4>
          </div>
          <div style="width: 100%; padding-top: 23%; "><a href="https://regol.rifan-financindo-berjangka.co.id" target="_blank"> <button type="button" class="btn btn-xl btn-success mb-2" style="border-radius: 10px; margin-left: 10px;">REGISTRASI AKUN ONLINE</button> </a></div>
          </div>
          </div>
          </div>
          
          <div class="row">
            <div class="col-12 col-lg-12">
              <div style="margin-top: 20px;">
                <div style="width: 100%;">
                  <a href="#" data-bs-toggle="modal" data-bs-target="#modal-tradepro">
                    <img src="/asset-home/img/trade-pro.jpg" style="width:100%">
                  </a>
                </div>
              </div>
            </div>
          </div>

        {{-- Modal --}}
        <div class="modal fade" id="modal-tradepro" tabindex="-1" aria-labelledby="modal-tradepro-label" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="modal-tradepro-label">Download Tradepro Apps</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <a target="_blank" href="https://apps.apple.com/us/app/tradepro-rifanfinancindo/id1449233045">
                  <img style="width:100%;padding:5px;" src="/asset-home/img/appstore_download.png" alt="Click for your IOS device"></a>
                  <a target="_blank" href="https://install.appcenter.ms/users/rifanfinancindoberjangkapt-gmail.com/apps/rifanfinancindoberjangka/distribution_groups/rifanfinancindoberjangka">
                    <img style="width:100%;padding:5px;" src="/asset-home/img/apk_download.png" alt="Click for your Android device">
                  </a>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>

          
          {{-- <div class="row">
            <div class="col-sm-6 mb-3 mb-sm-0">
              <div class="card" style="width: 80%">
                <img src="/asset-home/img/trading-bg.png" alt="" class="card-img-top" >
                <div class="card-body" style="align-items: center">
                  <h5 class="card-title">Live Trading</h5>
                  <a href="http://etrade.rifanberjangka.com/login.php" class="btn btn-danger">Akun Real</a>
                  <a href="http://demo.rifanberjangka.com/login.php" class="btn btn-danger ">Akun Demo</a>
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card" style="width: 80%">
                <img src="/asset-home/img/regist-bg.png" alt="registrasi" class="card-img-top" >
                <div class="card-body">
                  <h5 class="card-title">Registrasi</h5>
                  <a href="https://rf-berjangkasurabaya.com/register/" class="btn btn-success">Request Akun Demo</a>
                  <a href="https://regol.rifan-financindo-berjangka.co.id/" class="btn btn-success">Registrasi Online</a>
                </div>
              </div>
            </div>
            
          </div> --}}
          
          
          
          
          
          
        </div>
      </section>
      <!-- End Pricing Section -->

      
      <!-- ======= F.A.Q Section ======= -->
      <section id="faq" class="faq section-bg">
        <div class="container">
          
          <div class="section-title" data-aos="fade-up">
            <h2>F.A.Q</h2>
            <p>Frequently Asked Questions</p>
          </div>
          
          <div class="faq-list">
            <ul>
              <li data-aos="fade-up">
                <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-1" class="collapsed">Apa itu PT. Rifan Financindo Berjangka ? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                  <p>
                    PT. Rifan Financindo Berjangka berpengalaman lebih dari 20 tahun di industri Perdagangan Berjangka Komoditi dan merupakan perusahaan pialang terbesar dengan menduduki posisi teratas dari 10 perusahaan pialang berjangka teraktif dari PT. Kliring Berjangka Indonesia (Persero).
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-3">Apa yang dimaksud dengan perdagangan berjangka komoditi?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Perdagangan Berjangka Komoditi yang selanjutnya disebut Perdagangan Berjangka adalah segala sesuatu yang berkaitan dengan jual beli Komoditi dengan penarikan Margin dan dengan penyelesaian kemudian berdasarkan Kontrak Berjangka, Kontrak Derivatif Syariah, dan/atau Kontrak Derivatif lainnya.
                </p>
              </div>
            </li>
            
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Apa manfaat perdagangan berjangka komoditi ?<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Ada tiga manfaat utama dari Perdagangan Berjangka Komoditi. Pertama, sebagai sarana Pengelolaan Risiko (risk management) melalui kegiatan Lindung Nilai (hedging), kedua, sarana pembentukan harga (price discovery), dan ketiga, sebagai alternatif investasi (investment enhancement).
                </p>
              </div>
            </li>
            
            
            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Apakah PT Rifan Financindo Berjangka legal? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  PT Rifan Financindo Berjangka adalah perusahaan yang legal dan diakui oleh Kementrian Perdagangan dan Bappebti, tercatat di bursa berjangka Jakarta dengan Izin Usaha Pialang Berjangka : Keputusan Kepala BAPPEBTI No : 08 / BAPPEBTI / SI / XII / 2000
                </p>
              </div>
            </li>
            
            {{--<li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li> --}}
            
          </ul>
        </div>
        
      </div>
    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container">

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/jfx.png" class="testimonial-img" alt="" style="width: 55%">
              </a>
              </div>
            </div><!-- End testimonial item -->
            
            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="https://www.aspebtindo.org/anggota/daftar-anggota">
                <img src="/asset-home/img/aspeb.png" class="testimonial-img" alt="" style="width: 65%">
              </a>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/bappebti.png" class="testimonial-img" alt="" style="width: 55%">
              </a>
                
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <a href="">
                <img src="/asset-home/img/kbi.png" class="testimonial-img" alt="" style="width: 55%">
              </a>
                
              </div>
            </div><!-- End testimonial item -->



          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Location:</h4>
                <p>Gedung Ciputra World Office Surabaya, Jl. Mayjen Sungkono, Gn. Sari, Kec. Dukuhpakis, Surabaya, Jawa Timur 60224</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><strong>Admin :</strong> admin@rf-berjangkasurabaya.com</p>
                <p><strong>Recruitment :</strong> hr-recruitment@ptrifangroup.com</p>
                <p><strong>Compliance :</strong> compliance.sby@rifan-financindo-berjangka.co.id</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>(031) 6000 9800</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection