<!-- ======= Header ======= -->
<header id="header" class="fixed-top d-flex align-items-center header-transparent">

  <div class="container d-flex align-items-center justify-content-between">
    <div class="logo">
      <h1><a href="/"><img src="/asset-home/img/logo.png" alt=""></a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      {{-- <a href="/"><img src="/asset-home/img/logo.png" alt="" class="img-fluid"><span style="color: white;">Rifan Financindo Berjangka <strong>Ciputra World Surabaya</strong></span></a> --}}
    </div>

    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="/">{{ trans('beranda') }}</a></li>
        <li class="dropdown"><a href="/about"><span>{{__('about')}}</span></i></a>
        <li class="dropdown"><a href="/#produk"><span>{{__('produk')}}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>{{__('jfx')}}</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="/ole">{{__('ole')}}</a></li>
                <li><a href="/gol">{{__('gol')}}</a></li>
                <li><a href="/gol250">{{__('gol250')}}</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>{{__('spa')}}</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="/spa1">HKK50_BBJ & HKK5U_BBJ</a></li>
                <li><a href="/spa2">JPK50_BBJ & JPK5U_BBJ</a></li>
                <li><a href="/spa3">XUL10 & XULF</a></li>
                <li><a href="/spa4">GU1010_BBJ & GU10F_BBJ</a></li>
                <li><a href="/spa5">EU1010_BBJ & EU10F_BBJ</a></li>
                <li><a href="/spa6">AU1010_BBJ &amp; AU10F_BBJ</a></li>
                <li><a href="/spa7">UC1010_BBJ &amp; UC10F_BBJ</a></li>
                <li><a href="/spa8">UJ1010_BBJ &amp; UJ10F_BBJ</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a class="nav-link scrollto" href="/broker">{{__('broker')}}</a></li>
        <li class="dropdown"><a href="#produk"><span>{{__('prosedur')}}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li class="dropdown"><a href="#"><span>{{__('buka')}}</span> <i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="/pembukaan-reguler">Reguler</a></li>
                <li><a href="/pembukaan-online">Online</a></li>
              </ul>
            </li>
            <li><a href="/prosedur-penarikan">{{__('penarikan')}}</a></li>
            <li><a href="/petunjuk-transaksi">{{__('petunjuk')}}</a></li>
            {{-- <li><a href="/ilustrasi">Specimen Agreement</a></li> --}}

          </ul>
        </li>
        <li class="dropdown"><a href="#edukasi"><span>{{__('edukasi')}}</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="/edukasi-eksklusif">{{ trans('tutorial') }}</a></li>
            <li class="dropdown"><a href="">{{ trans('indikator') }}<i class="bi bi-chevron-right"></i></a>
              <ul>
                <li><a href="/kalender-ekonomi">{{ trans('kalender') }}</a></li>
              </ul>
            </li>
            <li><a href="https://digitalmarketing.rf-berjangka.com/">{{__('marketing')}}</a></li>
            <li><a href="/index-symbols">{{__('simbol')}}</a></li>

          </ul>
        </li>
        
        <li><a class="nav-link scrollto" href="/#news">{{__('berita')}}</a></li>
        {{-- <li><a class="nav-link scrollto" href="/#invest">{{__('mulai')}}</a></li> --}}
        <li><a class="nav-link scrollto" href="/kontak">{{__('kontak')}}</a></li>
        <li class="dropdown"><a href=""><img class="flag-icon" src="{{__('/asset-home/img/'.app()->getLocale().'.png')}}" style="width: 25px;"><i class="bi bi-chevron-down"></i></a>
          <ul>
            @if(app()->getLocale()=='id')
              <li><a href="{{url('locale/en')}}"><img src="{{__('/asset-home/img/en.png')}}" alt="" style="width: 25px;">{{__('english')}}</a></li>
              <li><a href="{{url('locale/cn')}}"><img src="{{__('/asset-home/img/cn.png')}}" alt="" style="width: 25px;">{{__('china')}}</a></li>
            @endif

            @if(app()->getLocale()=='en')
              <li><a href="{{url('locale/id')}}"><img src="{{__('/asset-home/img/id.png')}}" alt="" style="width: 25px;">{{__('indonesian')}}</a></li>
              <li><a href="{{url('locale/cn')}}"><img src="{{__('/asset-home/img/cn.png')}}" alt="" style="width: 25px;">{{__('china')}}</a></li>
            @endif

            @if(app()->getLocale()=='cn')
              <li><a href="{{url('locale/id')}}"><img src="{{__('/asset-home/img/id.png')}}" alt="" style="width: 25px;">{{__('indonesian')}}</a></li>
              <li><a href="{{url('locale/en')}}"><img src="{{__('/asset-home/img/en.png')}}" alt="" style="width: 25px;">{{__('english')}}</a></li>
            @endif
            

          </ul>
        </li>
        
        {{-- <li><a class="nav-link" href="/login">Login</a></li> --}}
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->

  </div>

</header><!-- End Header -->