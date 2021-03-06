@extends('admin.layouts.home')
@section('title2', 'Kamar Perinatologi')
@section('title1', 'Kamar')
@section('content_header')
    <h1 class="m-0 text-dark">Data Kamar Anak</h1>
@stop
@section('isi')
<div class="page-content">
    <div class="container-fluid"> 
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        @if ($message = Session::get('sukses'))
                            <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        
                        @if ($message = Session::get('gagal'))
                            <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        
                        @if ($message = Session::get('peringatan'))
                            <div class="alert alert-warning alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button> 
                            <strong>{{ $message }}</strong>
                            </div>
                        @endif
                        <a href="{{route('kamar_perinatologi.create')}}" class="btn btn-primary mb-2">
                        Tambah
                        </a>
                        <h4 class="mt-0 header-title">Data Kamar Perinatologi</h4>

                        <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bangsal</th>
                                <th>Jumlah</th>
                                <th>Aksi</th>
                            </tr>
                            </thead>


                            <tbody>
                            @foreach($kamar_perinatologi as $key => $tabel)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$tabel->nama_bangsal}}</td>
                                    <td>{{$tabel->jumlah}}</td>
                                    <td align='center'>
                                        <a href="{{route('kamar_perinatologi.edit', $tabel)}}" class="btn btn-primary btn-xs">
                                            Edit
                                        </a>
                                        <a href="{{route('kamar_perinatologi.destroy', $tabel)}}" onclick="return confirm('Anda yakin mau menghapus item ini ?')" class="btn btn-danger btn-xs">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->



    </div><!-- container -->

    <footer class="footer text-center text-sm-left">
        &copy; 2021 IT Sarila Husada <span class="text-muted d-none d-sm-inline-block float-right"></span>
    </footer>
</div>

@stop