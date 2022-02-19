@extends('layouts/app2')
@section('isi')
<div id="getintouch" class="section wb wow fadeIn" style="padding-bottom:0;">
         <div class="container">
            <div class="heading">
               <span class="icon-logo"><img src="images/icon-logo.png" alt="#"></span>
               <h2>Kontak</h2>
            </div>
         </div>
        <div id="price" class="section pr wow fadeIn" style="background-image:url('images/price-bg.png');">
            <div class="container">
                <div class="row">
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
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group in_name">
                                                <input type="text" class="form-control" placeholder="Name" name='nama'  >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group in_email">
                                                <input type="text" class="form-control" placeholder="E-mail" name='email' >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group in_email">
                                                <input type="text" class="form-control" id="phone" placeholder="Phone" name='hp' >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group in_email">
                                                <input type="text" class="form-control" id="subject" placeholder="Subject" name='subjek' >
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group in_message"> 
                                                <textarea class="form-control" id="message" rows="5" placeholder="Message"  name='pesan'></textarea>
                                                </div>
                                                <div class="actions">
                                                <input type="submit" value="Send Message" name="submit" id="submitButton" class="btn small" title="Submit Your Message!">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
      <footer id="footer" class="footer-area wow fadeIn">
         <div class="container">
         @foreach ($kontak as $key => $itemKontak)
            <div class="row">
               <div class="col-md-4">
                  <div class="logo padding">
                     <a href=""><img src="images/logo.png" alt=""></a>
                     <p>{{$itemKontak->moto}}</p>
                  </div>
               </div>
               <div class="col-md-8">
                  <div class="footer-info padding">
                     <h3>CONTACT US</h3>
                     <p><i class="fa fa-map-marker" aria-hidden="true"></i> {{$itemKontak->alamat}}</p>
                     <p><i class="fa fa-paper-plane" aria-hidden="true"></i> {{$itemKontak->email}}</p>
                     <p><i class="fa fa-phone" aria-hidden="true"></i> {{$itemKontak->nomer}}</p>
                  </div>
               </div>
            </div>
        @endforeach
         </div>
      </footer>
      @endsection