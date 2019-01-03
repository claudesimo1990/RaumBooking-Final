@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')

  <h1 class="mt-4 mb-3">Gebäude 
    <small></small>
  </h1>
  <!-- Project One -->
  <div class="row">
    <div class="col-md-7">
      <a href="{{ route('posts.show') }}">
        <img class="img-fluid rounded mb-3 mb-md-0" src="http://placehold.it/700x300" alt="">
      </a>
    </div>
    <div class="col-md-5">
      <h3>Project One</h3>
        <ol>
          <li><h4>
            Anzahl_Etage :
          </h4></li>
          <li><h4>
            Anzahl_Raüme :
          </h4></li>
          <li><h4>
            created_at :
          </h4></li>
        </ol>
      <a class="btn btn-primary" href="#">View Project
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div>
  </div>
  <!-- /.row -->

  <hr>
</div>
@stop




