@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')

  <h1 class="mt-4 mb-3">{{$gebaude->name}}'s Räume 
    <small></small>
  </h1>

    @foreach($raume as $raum)   

    <!-- Project One -->
      <div class="row">
        <div class="col-md-7">
          <a href="{{$raum->id}}">
            <img class="img-fluid rounded mb-3 mb-md-0" src="{{$raum->image}}" alt="">
          </a>
        </div>
        <div class="col-md-5">
          <h3>Raum : {{$raum->raum_number}}</h3><br>
          <p><strong>Raum Name : </strong>{{$raum->name}}</p>
          <p><strong>created_at : </strong>{{\Carbon\Carbon::parse($raum->created_at)->format('d/m/Y H:i:s')}}</p>
          <p><strong>updated_at : </strong>{{\Carbon\Carbon::parse($raum->updated_at)->format('d/m/Y H:i:s')}}</p>
          @if ($raum->status == 0)
          <p><strong>Status : </strong> <span style="color:green;">Frei</span></p>
          <a class="btn btn-secondary" href="{{route('Buchung.create',[$raum->gebaude->id,$raum->name])}}">buchen
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
          @elseif($raum->status == 1)
          <p><strong>Status : </strong> <span style="color:red;">gebucht !</span></p>
          @endif   
        </div>
      </div>
      <!-- /.row -->

      <hr>
  <!-- /.row -->
  @endforeach
  <hr>
  {{$raume->links()}}
</div>
@stop




