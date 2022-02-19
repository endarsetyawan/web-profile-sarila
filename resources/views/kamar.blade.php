@extends('layouts/app2')
@section('isi')
<div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Total Kamar</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'h>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamar as $key => $itemKamar)
                    <tr>
                        <td style='font-size:  large;'>{{$key+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamar->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamar->jumlah }}</td>
                    </tr>
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>
      <div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kamar Anak</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamaranak as $keyAnak => $itemKamarAnak)
                    <tr>
                        <td style='font-size:  large;'>{{$keyAnak+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamarAnak->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamarAnak->jumlah }}</td>
                    </tr> 
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>
      
      <div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kamar Kebidanan</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register3" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamarbidan as $keyBidan => $itemKamarbidan)
                    <tr>
                        <td style='font-size:  large;'>{{$keyBidan+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamarbidan->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamarbidan->jumlah }}</td>
                    </tr> 
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>

      <div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kamar ICU</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register4" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamaricu as $keyIcu => $itemKamarIcu)
                    <tr>
                        <td style='font-size:  large;'>{{$keyIcu+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamarIcu->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamarIcu->jumlah }}</td>
                    </tr> 
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>

      <div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kamar Dewasa</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register5" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamardewasa as $keyDewasa => $itemKamarDewasa)
                    <tr>
                        <td style='font-size:  large;'>{{$keyDewasa+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamarDewasa->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamarDewasa->jumlah }}</td>
                    </tr> 
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>

      <div class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kamar Perinatologi</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register6" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th style='font-size:  large;'>NO</th>
                    <th style='font-size:  large;'>Bangsal</th>
                    <th style='font-size:  large;'>Jumlah Bed</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($kamarperinatologi as $keyPerin => $itemKamarperin)
                    <tr>
                        <td style='font-size:  large;'>{{$keyPerin+1}}</td>
                        <td style='font-size:  large;'>{{ $itemKamarperin->nama_bangsal }}</td>
                        <td style='font-size:  large;'>{{ $itemKamarperin->jumlah }}</td>
                    </tr> 
                @endforeach
                </tbody>
                </table>
             </div>
         </div>
         <!-- end container -->
      </div>
      @endsection