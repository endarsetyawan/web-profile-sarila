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
   <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   <!-- Site CSS -->
   <link rel="stylesheet" href="{{asset('style.css')}}">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="{{asset('css/colors.css')}}">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="{{asset('css/versions.css')}}">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="{{asset('css/custom.css')}}">
   <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap.min.css">
   <!-- Modernizer for Portfolio -->
   <script src="{{asset('js/modernizer.js')}}"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">
      <!-- LOADER -->
      <div id="preloader">
         <img class="preloader" src="{{ URL::to('images/loaders/heart-loading2.gif') }}" alt="">
      </div>
      <!-- END LOADER -->
      <header>
      <div class="header-top wow fadeIn">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="{{ URL::to('images/logo.png')}}" alt="image"></a>
            <div class="right-header">
                <div class="header-info">
                    <div class="info-inner">
                    <span class="icontop"><img src="{{ URL::to('images/phone-icon.png') }}" alt="#"></span>
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
                    <li><a class="{{ Request::is('/pendaftaran') ? 'active' : '' }}" href="/">Pendaftaran</a></li>
                    <li><a class="{{ Request::is('data_dokter') ? 'active' : '' }}" data-scroll href="/data_dokter">Data Dokter</a></li>
                    <li><a class="{{ Request::is('jadwal_dokter') ? 'active' : '' }}" data-scroll href="/jadwal_dokter">Jadwal Dokter</a></li>
                    <li><a class="{{ Request::is('kamar') ? 'active' : '' }}" data-scroll href="/kamar">Total Kamar</a></li>
                    <li><a class="{{ Request::is('berita') ? 'active' : '' }}" data-scroll href="/berita">Berita</a></li>
                    <li><a class="{{ Request::is('kontak') ? 'active' : '' }}" data-scroll href="/kontak">Kontak</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
      </header>
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('{{ URL::to('images/slider-bg.png')}}');">
    <div class="container">
        <div class="row">
             <div class="col-md-12 col-sm-12">
            <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="{{URL::to('images/icon-logo.png')}}" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Selamat Datang","RSU Sarila Husada", "Mitra Anda Menuju Sehat"]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>

<div id="time-table" class="time-table-section">
    <div class="container">
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row">
            <div class="service-time one" style="background:#2895f1;">
                <span class="info-icon"><i class="fa fa-ambulance" aria-hidden="true"></i></span>
                <h3>Rawat Inap</h3>
                <ul>
                    <li><span class="left">Perawatan Umum</span>
                    <li><span class="left">Perawatan Bayi dan Anak</span>
                    <li><span class="left">Perawatan Kebidanan</span>
                    <li><span class="left">Perawatan Insentif(ICU)</span>
                </ul>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row">
            <div class="service-time middle" style="background:#0071d1;">
                <span class="info-icon"><i class="fa fa-clock-o" aria-hidden="true"></i></span> 
                <h3>Jam Kerja</h3>
                <div class="time-table-section">
                <ul>
                    <li><span class="left">Rawat Inap</span><span class="right">Setiap Hari - 24 Jam</span></li>
                    <li><span class="left">UGD</span><span class="right">Setiap Hari - 24 Jam</span></li>
                    <li><span class="left">Fisioterapi</span><span class="right">Senin-Sabtu - 08.00 - 20.00</span></li>
                    <li><span class="left">Radiologi</span><span class="right">Setiap Hari - 24 Jam</span></li>
                    <li><span class="left">farmasi</span><span class="right">Setiap Hari - 24 Jam</span></li>
                </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="row">
            <div class="service-time three" style="background:#0060b1;">
                <span class="info-icon"><i class="fa fa-hospital-o" aria-hidden="true"></i></span>
                <h3>Radiologi</h3>
                <ul>
                    <li><span class="left">Usg Abdomen</span>
                    <li><span class="left">Usg Thyroid</span>
                    <li><span class="left">Panoramic dan cephalometri</span>
                    <li><span class="left">Rontgen</span>
                </ul>
            </div>
        </div>
    </div>
    </div>
</div>
      @yield('isi')
      <footer id="footer" class="footer-area wow fadeIn">
         
      </footer>
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
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCNUPWkb4Cjd7Wxo-T4uoUldFjoiUA1fJc&callback=myMap"></script>
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
