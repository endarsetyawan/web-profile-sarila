@extends('layouts/app')
@section('isi')
<div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('images/slider-bg.png');">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12">
            <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="images/icon-logo.png" alt="#" /></span></span>
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
<div id="dokter" class="parallax section db" data-stellar-background-ratio="0.4" style="background:#fff;" data-scroll-id="doctors" tabindex="-1">
        <div class="container">
		
		<div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>The Specialist Clinic</h2>
            </div>

            <div class="row dev-list text-center">
                @foreach ($dokterprofil as $keydatdok => $datdok)
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s" style="visibility: visible; animation-duration: 1s; animation-delay: 0.2s; animation-name: fadeIn;">
                    <div class="widget clearfix">
                        <img src="images/{{$datdok->foto}}" alt="" class="img-responsive img-rounded">
                        <div class="widget-title">
                            <h3 style="font-size: 16px;">{{$datdok->nama_dokter}}</h3>
                            <small>{{$datdok->nama_spesialis}}</small>
                        </div>
                    </div><!--widget -->
                </div><!-- end col -->
                @endforeach
            </div><!-- end row -->
            <a href="/data_dokter" style='align:cemter;' data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Selengkapnya --></a>
        </div><!-- end container -->
    </div>
    <div id="jadwal_dokter" class="services wow fadeIn">
         <div class="container">
            <div class="row">
                  <div class="inner-services">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Jadwal Dokter</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <table id="table" class="table table-bordered table-hover" style="background: white;color: black;">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>Poliklinik</th>
                    <th>Nama Dokter</th>
                    <th>Hari</th>
                    <th>Waktu</th>
                    <th>Jam</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jadwaldokter as $keyJadwal => $itemJadwal)
                        <tr>
                            <td style='font-size:  large;text-align: left;'>{{$keyJadwal+1}}</td>
                            <td style='font-size:  large;text-align: left;'>{{ $itemJadwal->nama_spesialis }}</td>
                            <td style='font-size:  large;text-align: left;'>{{ $itemJadwal->nama_dokter }}</td>
                            <td style='font-size:  large;text-align: left;'>{{ $itemJadwal->hari }}</td>
                            <td style='font-size:  large;text-align: left;'>{{ $itemJadwal->waktu }}</td>
                            <td style='font-size:  large;text-align: left;'>{{ $itemJadwal->jam }}</td>
                        </tr> 
                    @endforeach
                </tbody>
                </table>
                <a href="/jadwal_dokter" style='align:cemter;' data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Selengkapnya --></a>
            </div>
         </div>
         <!-- end container -->
      </div>
      </div>
      </div>
<div id="kamar" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Total Kamar</h2>
            </div>
            <!-- end title -->
            <div class="row">
               <table id="table-register2" class="table table-bordered table-hover" style="background: white;color: black;">
                <thead>
                    <tr>
                    <th>NO</th>
                    <th>Bangsal</th>
                    <th>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamar as $key => $itemKamar)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{ $itemKamar->nama_bangsal }}</td>
                        <td>{{ $itemKamar->jumlah }}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                <a href="/kamar" style='align:cemter;' data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Selengkapnya --></a>
            </div>
         </div>
         <!-- end container -->
</div>

@endsection
