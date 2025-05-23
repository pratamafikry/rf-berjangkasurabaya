<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Rifan Financindo Berjangka Surabaya</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="/assets/img/favicon.png" rel="icon">
  <link href="/assets/img/logo.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="/assets/vendor/simple-datatables/style.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.4.0/css/buttons.dataTables.min.css">
  
  <!-- Template Main CSS File -->
  <link href="/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: May 30 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="/dashboard" class="logo d-flex align-items-center">
        <img src="/assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Appointment</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

  
    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        {{-- <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon--> --}}

        

        {{-- </li><!-- End Messages Nav --> --}}

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/dashboard">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->
      
      


    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

<div class="pagetitle">
  <h1>Selamat Datang Driver PT. Rifan Financindo Berjangka Ciputra World Surabaya</h1>
</div><!-- End Page Title -->

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
{{session('success')}}
</div>
@endif


<section class="section">
  <div class="row">
    <div class="col-lg-12">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Data Appointment</h5>
           {{-- <code>.datatable</code> --}}
           <form action="/driver" method="get">
            @csrf
          <div class="row mb-3">
            <div class="col-sm-3">
              <label>Sesi</label>
              <select class="form-control" name="sesi" id="sesi">
                <option value="">Pilih Sesi</option>
                <option value="Sesi 1">Sesi 1</option>
                <option value="Sesi 2">Sesi 2</option>
                <option value="Sesi 3">Sesi 3</option>
              </select>
            </div>
            <div class="col-sm-3">
              <label for="tgl_temu" class="form-label">Tanggal </label>
              <input type="date" class="form-control" name="tgl_temu" id="tgl_temu">  
          </div>
            <div class="col-sm-3">
              <button type="submit" class="btn btn-primary mt-4">Search</button>
            </div>
          </div>
        </form>

          <!-- Table with stripped rows -->
          <table class="table" id="user">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Tanggal</th>
                <th scope="col">Waktu</th>
                <th scope="col">Sesi</th>
                <th scope="col">Alamat</th>
                <th scope="col">Nama Karyawan</th>
                <th scope="col">Team</th>
                <th scope="col">Driver</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($appointments as $appointment)
              <tr>
                <td>{{$loop ->iteration}}</td>
                <td>{{$appointment->tgl_temu}}</td>
                <td>{{$appointment->jam}}</td>
                <td>{{$appointment->sesi}}</td>
                <td>{{$appointment->alamat}}</td>
                <td>{{$appointment->nama}}</td>
                <td>{{$appointment->team}}</td>
                <td>{{$appointment->driver->name}} ({{$appointment->driver->plat_mobil}})</td>
                {{-- <td><a href="/dashboard/appointment/{{$appointment->slug}}/edit" class="btn btn-warning">Edit</span></a></td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>

          {{-- <a href="/dashboard/driver/create" class="btn btn-primary mb-3" style="float: right">Tambah Driver</a> --}}
          <!-- End Table with stripped rows -->

        </div>
      </div>

    </div>
  </div>

</main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>Rifan Financindo Surabaya</span></strong>. All Rights Reserved
    </div>
    {{-- <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div> --}}
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="/assets/vendor/echarts/echarts.min.js"></script>
  <script src="/assets/vendor/quill/quill.min.js"></script>
  <script src="/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="/assets/vendor/php-email-form/validate.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
  <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.0/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.0/js/buttons.html5.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/2.4.0/js/buttons.print.min.js"></script>



  <script>
    $(document).ready(function() {
      $('#data').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              'excel', 'pdf'
          ],
          scrollX: true
      } );
  } );
  </script>
  <script>
    $(document).ready(function() {
      $('#user').DataTable( {
          dom: 'Bfrtip',
          buttons: [
              
          ],
          scrollX: true
      } );
  } );
  </script>
  <!-- Template Main JS File -->
  <script src="/assets/js/main.js"></script>

  








</body>

</html>