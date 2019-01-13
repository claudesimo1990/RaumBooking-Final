@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')

  <h1 class="mt-4 mb-3">GEBÄUDE 
    <small></small>
  </h1>

    @foreach($gebaudes as $gebaude)   

    <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="gebaude/{{$gebaude->id}}">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{$gebaude->image}}" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>{{$gebaude->name}}</h3><br>
          <p><strong>Anzahl Etage  :  </strong>{{$gebaude->anz_etage}}</p>
          <p><strong>Anzahl Raum  :  </strong>{{$gebaude->anz_raum}}</p>
          <p><strong>created_at  :  </strong>{{$gebaude->created_at}}</p>
          <p><strong>updated_at  :  </strong>{{$gebaude->updated_at}}</p>
          <a class="btn btn-secondary" href="gebaude/{{$gebaude->id}}">Auswählen
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
        </div>
      </div>
      <!-- /.row -->

      <hr>
  <!-- /.row -->
  @endforeach
  <p>{{$gebaudes->links()}}</p>
</div>
@stop




