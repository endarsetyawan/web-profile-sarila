<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>RSU Sarila Husada</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   <link rel="shortcut icon" href="/images/icon-logo.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="/images/icon-logo.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="css/custom.css">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="images/loaders/heart-loading2.gif" alt="">
      </div>
      <!-- END LOADER -->
      <header>
      <div class="header-top wow fadeIn">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="image"></a>
            <div class="right-header">
                <div class="header-info">
                    <div class="info-inner">
                    <span class="icontop"><img src="images/phone-icon.png" alt="#"></span>
                    <span class="iconcont"><a href="https://wa.me/6281331000066" target='blank'>081 331 000 066</a></span>	
                    </div>
                    <div class="info-inner">
                    <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                    <span class="iconcont"><a data-scroll href="mailto:rssarilahusada@gmail.com">rssarilahusada@gmail.com</a></span>	
                    </div>
                    <!--<div class="info-inner">
                    <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                    <span class="iconcont"><a data-scroll href="#">Daily : 06.00am - 10.00pm</a></span>	
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom wow fadeIn">
        <div class="container">
            <nav class="main-menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                </div>
                
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
                    <li><a class="{{ Request::is('pendaftaran') ? 'active' : '' }}" href="/pendaftaran">Pendaftaran</a></li>
                    <li><a data-scroll href="#dokter">Data Dokter</a></li>
                    <li><a data-scroll href="#jadwal_dokter">Jadwal Dokter</a></li>
                    <li><a data-scroll href="#kamar">Total Kamar</a></li>
                    <li><a class="{{ Request::is('berita') ? 'active' : '' }}" data-scroll href="/berita">Berita</a></li>
                    <li><a class="{{ Request::is('kontak') ? 'active' : '' }}" data-scroll href="/kontak">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
      </header>
      @yield('isi')
      <div class="copyright-area wow fadeIn">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="footer-text">
                     <p>© 2021 SarilaHusada. All Rights Reserved.</p>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="social">
                     <ul class="social-links">
                        <li><a href=""><i class="fa fa-rss"></i></a></li>
                        <li><a href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                        <li><a href=""><i class="fa fa-youtube"></i></a></li>
                        <li><a href=""><i class="fa fa-pinterest"></i></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end copyrights -->
      <a href="#home" data-scroll class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>
      <script src="{{ asset('js/all.js') }}"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap.min.js"></script>
        <!-- all plugins -->
        <script src="{{ asset('js/custom.js') }}"></script>
    <!-- map -->
<script  type="text/javascript">
    $(document).ready( function () {
        $('#table-register').DataTable();
        $('#table-register2').DataTable();
        $('#table-register3').DataTable();
        $('#table-register4').DataTable();
        $('#table-register5').DataTable();
        $('#table-register6').DataTable();
        $('#table-register7').DataTable();
    } );
    </script>
   </body>
</html>
