<!DOCTYPE html>

<!--
 // WEBSITE: https://themefisher.com
 // TWITTER: https://twitter.com/themefisher
 // FACEBOOK: https://www.facebook.com/themefisher
 // GITHUB: https://github.com/themefisher/
-->

<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>Rifan Financindo Berjangka Ciputra World Surabaya | Home </title>

  <!-- mobile responsive meta -->
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  {{-- <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> --}}
  
  <!-- theme meta -->
  <meta name="theme-name" content="dtox" />
  
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link href="/asset-home/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  {{-- <link rel="stylesheet" href="/assets-index/plugins/bootstrap/bootstrap.css"> --}}
  <link href="/asset-home/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="/asset-home/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="/assets-index/plugins/themify-icons/themify-icons.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="/assets-index/plugins/slick/slick.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="/assets-index/plugins/Venobox/venobox.css">
  {{-- glightbox --}}
  <link rel="stylesheet" href="/assets-index/plugins/glightbox/css/glightbox.min.css">
  <!-- aos -->
  <link href="/asset-home/vendor/aos/aos.css" rel="stylesheet">
  <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet">
  <!-- Sidebar -->
  {{-- <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="/assets-index/plugins/sidebar/css/style.css"> --}}

  <!-- Main Stylesheet -->
  <link href="/assets-index/css/style.css" rel="stylesheet">
  
  <!--Favicon-->
  <link rel="shortcut icon" href="/assets-index/images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/assets-index/images/favicon.ico" type="image/x-icon">

</head>

<body>
  

<!-- navigation -->
@include('partials.navbar')

<!-- hero area -->
@yield('container')

<!-- footer -->
@include('partials.footer')


<script>
  $(document).ready(function() {
    $('#user').DataTable( {
        // dom: 'Bfrtip',
        // buttons: [
            
        // ],
        scrollX: true
    } );
} );
</script>
<!-- jQuery -->
<script src="/assets-index/plugins/jQuery/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="/asset-home/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- slick slider -->
<script src="/assets-index/plugins/slick/slick.min.js"></script>
<!-- venobox -->
<script src="/assets-index/plugins/Venobox/venobox.min.js"></script>
<!-- aos -->
<script src="/asset-home/vendor/aos/aos.js"></script>
<!-- Sidebar -->
{{-- <script src="/assets-index/plugins/sidebar/js/jquery.min.js"></script>
<script src="/assets-index/plugins/sidebar/js/popper.js"></script>
<script src="/assets-index/plugins/sidebar/js/bootstrap.min.js"></script>
<script src="/assets-index/plugins/sidebar/js/main.js"></script> --}}

{{-- glightbox --}}
<script src="/assets-index/plugins/glightbox/js/glightbox.min.js"></script>
<script src="//cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
<!-- Main Script -->
<script src="/assets-index/js/script.js"></script>
<script src="/asset-home/js/main.js"></script>

</body>
</html>
