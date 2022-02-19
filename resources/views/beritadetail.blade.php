@extends('layouts/app2')
@section('isi')

<div id="about" class="section wow fadeIn">
    <div class="container">
    <div class="heading">
        <span class="icon-logo"><img src="{{URL::to('images/icon-logo.png')}}" alt="#"></span>
        <h2>Detail Berita</h2>
    </div>
    @foreach ($berita as $keyberita => $itemBerita)
    <div style="margin: 0; padding: 10px 20px;">
        <div class="message-box">
            <h2>{{$itemBerita->judul}}</h2>
            <h4>{{$itemBerita->nama_kategori}}, {{date('d-m-Y, h:i:s', strtotime($itemBerita->date))}}</h4>
        </div>
    </div>
    <div class="row">
        <!-- end col -->
        <div class="col-md-12">
        <div class="service-widget">
            <div class="post-media wow fadeIn">
                        <a href="/images/berita/{{$itemBerita->gambar}}" data-rel="prettyPhoto[gal]" class="hoverbutton global-radius"><i class="flaticon-unlink"></i></a>
                        <img style="
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
" src="/images/berita/{{$itemBerita->gambar}}" alt="" class="img-responsive">
            </div>
            </div>
            <!-- end media -->
        </div>
        <hr class="hr1"><br>
        <div class="col-md-12">
        <p>{!! $itemBerita->isi !!}
        </p>
        </div>
    </div>
    @endforeach
    </div>
</div>
      @endsection