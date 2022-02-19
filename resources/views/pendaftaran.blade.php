@extends('layouts/app2')
@section('isi')

<div id="about" class="section wow fadeIn">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Pendaftaran Pasien</h2>
            </div>
            <!-- end title -->
            <div class="row">
            <div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">

        <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
            <div class="container">
                <div class="row container">
                    <div class="col-md-12">
                        <div class="tab-content">
                            <div class="tab-pane active fade in" id="tab1">
                                @if($message = Session::get('success'))
                                    <div class='alert alert-success alert-block'>
                                        <button type='button' class='close' data-dismiss='alert'>x</button>
                                        <strong>{{$message}}</strong>
                            </div>
                                @endif
                                <div class="row text-center">
                                    <form action="/send-email" method="post">
                                    @csrf
                                        <table class="col-md-12">
                                            <tr>
                                                <td class="pendaftaranLabel col-md-4">Pasien</td>
                                                <td>
                                                    <select class="form-control col-md-8" aria-label="Default select example">
                                                        <option selected>Pilih Jenis Kedatangan</option>
                                                        <option value="1">Pasien Lama</option>
                                                        <option value="2">Pasien Baru</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pendaftaranLabel">Nama atau No.MR</td>
                                                <td><input type="text" class="form-control" placeholder="Name" name='nama'  ></td>
                                            </tr>
                                            <tr>
                                                <td class="pendaftaranLabel">Poli Tujuan</td>
                                                <td>
                                                    <select class="form-control col-md-8" aria-label="Default select example">
                                                        <option selected>Pilih Poli</option>
                                                        <option value="1">Poliklinik Gigi</option>
                                                        <option value="1">Poliklinik Mata</option>
                                                        <option value="1">Poliklinik Obsgyn</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="pendaftaranLabel">Tipe Pasien</td>
                                                <td>
                                                    <select class="form-control col-md-8" aria-label="Default select example">
                                                        <option selected>Pilih Type Pasien</option>
                                                        <option value="1">UMUM</option>
                                                        <option value="2">bpjs</option>
                                                        <option value="2">Asuransi Lain</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>
                                                    <input type="submit" value="Daftar" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
            </div>
         </div>
         <!-- end container -->
      </div>
      @endsection