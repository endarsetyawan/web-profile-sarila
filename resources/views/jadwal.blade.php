@extends('layouts/app2')
@section('isi')

<div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Jadwal Dokter</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <table id="table-register" class="table table-bordered table-hover">
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
                <p style="text-align: center"><span style="color: #ff0000"><strong>SETIAP TANGGAL MERAH DAN HARI MINGGU TUTUP</strong></span><br />
<span style="color: #ff0000"> <strong>JADWAL SEWAKTU-WAKTU BISA BERUBAH</strong></span></p>
             </div>
         </div>
         <!-- end container -->
      </div>
      @endsection