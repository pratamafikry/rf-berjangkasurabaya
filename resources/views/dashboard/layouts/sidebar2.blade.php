<div class="sidebar border border-right col-md-3 col-lg-2 p-0 bg-body-tertiary">
    <div class="offcanvas-lg offcanvas-end bg-body-tertiary" tabindex="-1" id="sidebarMenu" aria-labelledby="sidebarMenuLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="sidebarMenuLabel">PT. Rifan Financindo Berjangka Surabaya</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" data-bs-target="#sidebarMenu" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body d-md-flex flex-column p-0 pt-lg-3 overflow-y-auto">
        <ul class="nav flex-column">
          @can('user')
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/appointment">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Data Appointment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#graph-up"/></svg>
              Reports
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#puzzle"/></svg>
              Integrations
            </a>
          </li>
        </ul>
        @endcan
        @can('admin')
        {{-- <hr class="my-3"> --}}
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">Administrator</h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/appointment">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Data Appointment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/marketing">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Manage Marketing
            </a>
          </li>
        </ul>
        @endcan

        @can('driver')
        {{-- <hr class="my-3"> --}}
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-1 mb-1 text-muted">Driver</h6>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2 active" aria-current="page" href="/dashboard">
              <svg class="bi"><use xlink:href="#house-fill"/></svg>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/app/driver">
              <svg class="bi"><use xlink:href="#file-earmark"/></svg>
              Data Appointment
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="/dashboard/driver">
              <svg class="bi"><use xlink:href="#people"/></svg>
              Manage Driver
            </a>
          </li>
        </ul>
        @endcan

        <hr class="my-3">

        <ul class="nav flex-column mb-auto">
          <li class="nav-item">
            <a class="nav-link d-flex align-items-center gap-2" href="#">
              <svg class="bi"><use xlink:href="#gear-wide-connected"/></svg>
              Settings
            </a>
          </li>
          <li class="nav-item">
            <form action="/logout" method="post">
              @csrf
              <button type="submit" class="nav-link d-flex align-item-center gap-2"><i class="bi bi-box-arrow-in-right"></i> Logout</a></button>
            </form>
          </li>
        </ul>
      </div>
    </div>
  </div>