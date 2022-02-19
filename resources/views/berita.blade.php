@extends('layouts/app2')
@section('isi')

<div id="about" class="section wow fadeIn">
    <div class="container">
    <div class="heading">
        <span class="icon-logo"><img src="{{URL::to('images/icon-logo.png')}}" alt="#"></span>
        <h2>Berita {{$nama_kategori}}</h2>
    </div>
    <!-- end title -->
    <div class="mainbar" style="
    margin: 0;
    padding: 0;
    float: left;
    width: 65%;
    ">
    @foreach ($berita as $keyberita => $itemBerita)
    <div class="row">
        <div class="col-md-6">
            <div class="message-box">
                <h4>{{$itemBerita->nama_kategori}}</h4>
                <h5>{{date('d-m-Y, h:i:s', strtotime($itemBerita->date))}}</h5>
                <h2>{{$itemBerita->judul}}</h2>
                {!! $itemBerita->isi !!}
                <a href="/berita_detail/{{$itemBerita->id}}" data-scroll class="btn btn-light btn-radius btn-brd grd1 effect-1">Baca Selengkapnya</a>
            </div>
            <!-- end messagebox -->
        </div>
        <!-- end col -->
        <div class="col-md-6">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                        <a href="/images/berita/{{$itemBerita->gambar}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img src="/images/berita/{{$itemBerita->gambar}}" alt="" class="img-responsive">
            </div>
            </div>
            <!-- end media -->
        </div>
    </div>
    <hr class="hr1">
    @endforeach
    </div>
    <div class="sidebar" style="
    padding: 0;
    float: right;
    width: 280px;
    ">
            <div class="appointment-form">
                <h3><span>+</span> Kategori Berita</h3>
                <div class="form">
                <form action="index.html">
                    <fieldset>
                    @foreach ($kategori as $keykategori => $itemKategori)
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="row">
                            <div class="form-group">
                            <hr class="hr2">
                            <a class="{{ Request::is('berita/$itemKategori->id') ? 'active' : '' }}" style="font-size: 25px;" href="/berita/{{$itemKategori->id}}">{{$itemKategori->nama_kategori}}</a>
                            </div>
                            </div>
                        </div>
                    @endforeach
                    </fieldset>
                </form>
                </div>
            </div>
        </div>
</div>
</div>
      @endsection