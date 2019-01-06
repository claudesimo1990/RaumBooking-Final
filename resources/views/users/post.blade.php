@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop
@section('content')

  <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <img class="img-fluid" src="{{$actgeb->image}}" alt="">
        </div>
        
        <div class="col-md-4">
          <h3 class="my-3">Raum Beschreibung</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3 class="my-3">Raum Infos </h3>
          <ol>
            <li><strong>Raum Name : {{$actgeb->name}}</strong></li>
            <li><strong>Raumnummer : {{$actgeb->raum_number}}</strong></li>
            <li><strong>Gebaude Name: {{$actgeb->gebaude->name}}</strong></li>
            <li><strong>created At : {{$actgeb->created_at}}</strong></li>
            <li><strong>Updated At : {{$actgeb->updated_at}}</strong></li>
          </ol>
        </div>

      </div>
      <!-- /.row -->
  

      <!-- Related Projects Row -->
      <h3 class="my-4">Verfügbare Räume</h3>
      <div class="row">
        @foreach($gebaude as $raum )
        <div class="col-md-3 col-sm-6 mb-4">
          <a href="/gebaude/{{$gebaude->id}}/{{$raum->name}}">
            <img class="img-fluid" src="{{$raum->image}}" alt=""> <br>
          </a> 
          <p><strong>raum_nummer : {{$raum->raum_number}}</strong></p>
          <p><strong>raum_name : {{$raum->name}}</strong></p>
        </div>
        @endforeach
      </div>
      
@stop