@extends('admin.layouts.home')
@section('title', 'Tambah Data Bangsal')
@section('content_header')
    <h1 class="m-0 text-dark">Tambah Data Bangsal</h1>
@stop
@section('isi')
<div class="page-content">
    <div class="container-fluid"> 
        
<form action="{{route('kamar_utama.update', $kamar_utama)}}" method="post">
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
                                        <label for="example-text-input" class="col-sm-2 col-form-label text-right">Nama Bangsal</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" id="nama_bangsal" name="nama_bangsal" value="{{$kamar_utama->nama_bangsal}}">
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="example-email-input" class="col-sm-2 col-form-label text-right">Jumlah Bangsal</label>
                                        <div class="col-sm-10">
                                            <input  class="form-control" type="text" id="jumlah_bangsal" name="jumlah" value="{{$kamar_utama->jumlah}}">
                                        </div>
                                    </div>                            
                                </div>
                            </div>     
                            <div class="row">
                                <div class="col-sm-12 text-right">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{route('kamar_utama.index')}}" class="btn btn-danger">
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