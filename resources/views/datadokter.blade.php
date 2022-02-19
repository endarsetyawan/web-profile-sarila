@extends('layouts/app2')
@section('isi')

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
                </div><!-- end container -->
    </div>
      @endsection