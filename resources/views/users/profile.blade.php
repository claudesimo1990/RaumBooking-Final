@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')
 <div class="row justify-content-center">
        <div class="container">    
                <div class="jumbotron">
                  <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="https://www.svgimages.com/svg-image/s5/man-passportsize-silhouette-icon-256x256.png" alt="stack photo" class="img">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{ $users->name }}</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span>N° :  11111111{{ $users->id }}</p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;"></span>Email : {{ $users->email }}</p></li>
                            <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span>Ort : TH KÖLN</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span> Adresse :  <a id="link" href="#">www.Th-köln.de</p></a>
                          </ul>
                          <button class="lg bg-primary">Profil Editieren</button>
                      </div>
                  </div>
         </div>
     </div>
     </div>
@endsection
