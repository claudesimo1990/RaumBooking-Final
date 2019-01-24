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
           @forelse ($profiles as $profile) 
                <div class="jumbotron">
                 <div class="row">
                      <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                          <img src="storage/avatar/{{$profile->avatar}}" alt="avatar" class="img" style="width: 350px;height: 350px;border-radius: 350%;">
                      </div>
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                        
                          <div class="container" style="border-bottom:1px solid black">
                            <h2>{{ $profile->user->name }}</h2>
                          </div>
                            <hr>
                          <ul class="container details">
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><strong>Vorname : </strong>{{$profile->vorname}}</p></li>
                                <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><strong>Email : </strong>{{$profile->user->email}}</p></li>
                            <li><p><span class="glyphicon glyphicon-earphone one" style="width:50px;"></span><strong>Mat-Nr :</strong> {{$profile->matrikelnummer}}</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><strong>Studiengang :</strong> {{$profile->studiengang}}</p></li>
                            <li><p><span class="glyphicon glyphicon-new-window one" style="width:50px;"></span><strong>semester : </strong>{{$profile->semester}}</p></li>
                              <li><p><span class="glyphicon glyphicon-map-marker one" style="width:50px;"></span><strong>Adresse : </strong>{{$profile->adresse}}</p></li>
                          </ul>
                          <a class="btn btn-primary" href="/profile/{{$profile->id}}">Profil update</a>
                      </div>
                  </div>
             </div>
             @empty
            <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Ups ! Profile nicht vorhanden !</h1>
              <p class="lead">Um ihre Profile zu erstellen bitte klicken sie hier <a class="badge badge-primary" href="{{route('edit.profile')}}">Profil erstellen</a></p> 
            </div>
        </div>
         @endforelse 
     </div>
     </div>
@endsection
