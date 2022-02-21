@extends('admin.layouts.home')
@section('title', 'Tambah Data Bangsal')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Bangsal</h1>
@stop
@section('isi')
<div class="page-content">
    <div class="container-fluid"> 
        
<form action="{{route('dokter_jadwal.update', $dokterjadwal)}}" method="post">
@method('PUT')
 @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">        
                            <h4 class="mt-0 header-title">Tambah Data Bangsal</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Spesialis</label>
                                        <div class="col-sm-10">
                                            <select name="id_spesialis" id="id_spesialis" class="form-control">
                                                <option value="">== Select Spesialis ==</option>
                                                @foreach ($spesialis as $tabel)
                                                    @if($tabel->id == $dokterjadwal->id_spesialis)
                                                        <option value="{{ $tabel->id }}" selected>{{ $tabel->nama_spesialis }}</option>
                                                    @else
                                                        <option value="{{ $tabel->id }}">{{ $tabel->nama_spesialis }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Dokter</label>
                                        <div class="col-sm-10">
                                            <select name="id_dokter" id="id_dokter" class="form-control">
                                                <option value="">== Select Dokter ==</option>
                                                @foreach ($datadokter as $tabell)
                                                    @if($tabell->id == $dokterjadwal->id_dokter)
                                                        <option value="{{ $tabell->id }}" selected>{{ $tabell->nama_dokter }}</option>
                                                    @else
                                                        <option value="{{ $tabell->id }}">{{ $tabell->nama_dokter }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right">Hari</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" type="text" id="hari" name="hari" value="{{$dokterjadwal->hari}}">
                                        </div>
                                    </div>                            
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right" >Waktu</label>
                                        <div class="col-sm-10">
                                            <select name="waktu" id="waktu" class="form-control">
                                                @if($dokterjadwal->id_dokter == "Pagi")
                                                    <option value="">== Select Waktu ==</option>
                                                    <option value="Pagi" selected>Pagi</option>
                                                    <option value="Siang">Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam">Malam</option>
                                                @elseif($dokterjadwal->id_dokter == "Siang")
                                                    <option value="">== Select Waktu ==</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang" selected>Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam">Malam</option>
                                                @elseif($dokterjadwal->id_dokter == "Sore")
                                                    <option value="">== Select Waktu ==</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang">Siang</option>
                                                    <option value="Sore" selected>Sore</option>
                                                    <option value="Malam">Malam</option>
                                                @elseif($dokterjadwal->id_dokter == "Malam")
                                                    <option value="">== Select Waktu ==</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang" selected>Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam" selected>Malam</option>
                                                @else
                                                    <option value="">== Select Waktu ==</option>
                                                    <option value="Pagi">Pagi</option>
                                                    <option value="Siang" selected>Siang</option>
                                                    <option value="Sore">Sore</option>
                                                    <option value="Malam">Malam</option>
                                                
                                                @endif
                                            </select>
                                        </div>
                                    </div>                            
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right" value="{{$dokterjadwal->jam}}">Jam</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" type="text" id="jam" name="jam" value="{{$dokterjadwal->jam}}">
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('dokter_jadwal.index')}}" class="btn btn-danger">
                                        Batal
                                    </a>
                                </div>
                            </div>                                                                 
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->
            
    </div>
</div>
@stop