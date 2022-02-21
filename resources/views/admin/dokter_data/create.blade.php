@extends('admin.layouts.home')
@section('title', 'Tambah Data Bangsal')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Bangsal</h1>
@stop
@section('isi')
<div class="page-content">
    <div class="container-fluid"> 
        
<form action="{{route('dokter_data.store')}}" method="post" enctype="multipart/form-data">
 @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">         
                            <h4 class="mt-0 header-title">Tambah Data Bangsal</h4>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Dokter</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="nama_dokter" name="nama_dokter">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right">Alamat</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" type="text" id="alamat" name="alamat"></textarea>
                                        </div>
                                    </div>  
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Spesialis</label>
                                        <div class="col-sm-10">
                                            <select name="id_spesialis" id="id_spesialis" class="form-control">
                                                <option value="">== Select Spesialis ==</option>
                                                @foreach ($spesialis as $tabel)
                                                    <option value="{{ $tabel->id }}">{{ $tabel->nama_spesialis }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div> 
                                    <div class="form-group row">
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">File Foto</label>
                                        <div class="col-sm-10">
                                            <input type="file" id="input-file-now" class="dropify" id="file" name="file"/>   
                                        </div>
                                    </div> 

                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('kamar_anak.index')}}" class="btn btn-danger">
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