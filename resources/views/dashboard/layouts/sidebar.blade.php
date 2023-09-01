<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      @can('user')
      {{-- <li class="nav-heading">Marketing</li> --}}

      
      <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/appointment">
              <i class="bi bi-calendar-event"></i>
              <span>Data Appointment</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/password">
            <i class="bi bi-person"></i>
            <span>Ganti Password</span>
          </a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
          <button class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </button>
        </form>
        </li>
        
        @endcan

        @can('admin')
      {{-- <li class="nav-heading">Manager</li> --}}

      
      <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/appointment">
              <i class="bi bi-calendar-event"></i>
              <span>Data Appointment</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        
        <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/marketing">
            <i class="bi bi-person"></i>
            <span>Manage Staff</span>
          </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/password">
            <i class="bi bi-person"></i>
            <span>Ganti Password</span>
          </a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
          <button class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </button>
        </form>
        </li>
        @endcan
        
        @can('kadiv')
      {{-- <li class="nav-heading">Manager</li> --}}

      
      <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/appointment">
              <i class="bi bi-calendar-event"></i>
              <span>Data Appointment</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        
        <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/marketing">
            <i class="bi bi-person"></i>
            <span>Manage Staff</span>
          </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/password">
            <i class="bi bi-person"></i>
            <span>Ganti Password</span>
          </a>
        </li>
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
          <button class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </button>
        </form>
        </li>
        @endcan

        @can('driver')
      {{-- <li class="nav-heading">Manager</li> --}}

      
      <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/app/driver">
              <i class="bi bi-calendar-event"></i>
              <span>Data Appointment</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        
        <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/driver">
            <i class="bi bi-person"></i>
            <span>Manage Driver</span>
          </a>
        </li><!-- End Profile Page Nav -->
        <li class="nav-item">
          <a class="nav-link collapsed" href="/password">
            <i class="bi bi-person"></i>
            <span>Ganti Password</span>
          </a>
        </li>

        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
          <button class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </button>
        </form>
        </li>
        
        @endcan

        @can('superadmin')
      {{-- <li class="nav-heading">Superadmin</li> --}}

      
      <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/appointment">
              <i class="bi bi-calendar-event"></i>
              <span>Data Appointment</span>
            </a>
        </li><!-- End F.A.Q Page Nav -->
        
        <li class="nav-item">
          <a class="nav-link collapsed" href="/dashboard/driver">
            <i class="bi bi-person"></i>
            <span>Manage Driver</span>
          </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard/marketing">
              <i class="bi bi-person"></i>
              <span>Manage Staff</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="/dashboard/posts">
              <i class="bi bi-clipboard-pulse"></i>
              <span>Manage Postingan</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link collapsed" href="/password">
              <i class="bi bi-person"></i>
              <span>Ganti Password</span>
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
            <button class="nav-link collapsed" href="#">
              <i class="bi bi-box-arrow-right"></i>
              <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
            </button>
          </form>
          </li>
        @endcan

        @can('receptionist')
        <li class="nav-item">
          <form action="/logout" method="post">
            @csrf
          <button class="nav-link collapsed" href="#">
            <i class="bi bi-box-arrow-right"></i>
            <span>Sign Out &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
          </button>
        </form>
        </li>
        @endcan
        


    </ul>

  </aside><!-- End Sidebar-->