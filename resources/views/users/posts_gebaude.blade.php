@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')

  <h3 class="mt-4 mb-3">GEBÄUDE</h3>
  
    @foreach($gebaudes as $gebaude)   

    <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="gebaude/{{$gebaude->id}}">
            <img style="width:100%;height: auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19);opacity: .8;
              filter: alpha(opacity=50); /* For IE8 and earlier */" class="img-fluid rounded mb-3 mb-md-0" src="http://localhost:8000/storage/gebaude/{{$gebaude->image}}" alt="">
           </a>
        </div>
        <div class="col-md-5">
          <h3>{{$gebaude->name}}</h3><br>
          <p><strong>Anzahl Etage  :  </strong>{{$gebaude->anz_etage}}</p>
          <p><strong>Anzahl Raum  :  </strong>{{$gebaude->anz_raum}}</p>
          <p><strong>Gebaut am  :  </strong>{{\Carbon\Carbon::parse($gebaude->created_at)->format('d.m.Y')}} um {{\Carbon\Carbon::parse($gebaude->created_at)->format('H:i:s')}}</p>
          <p><strong>Letzte Änderung am :  </strong>{{\Carbon\Carbon::parse($gebaude->updated_at)->format('d.m.Y')}} um {{\Carbon\Carbon::parse($gebaude->updated_at)->format('H:i:s')}}</p>
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




