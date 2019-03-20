@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/home.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Neue Buchung</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="form-horizontal" role="form" action="{{route('Buchung.store')}}" method="POST">
          @csrf

          <input type="hidden" id="raum_number" name="raum_number" value="">
          <input type="hidden" id="user_id" name="user_id" value="">
          <input type="hidden" id="username" name="username" value="">
          <input type="hidden" id="gebaude_id" name="gebaude_id" value="">
          <input type="hidden" id="raum_id" name="raum_id" value="">

           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Date</label>
            <input type="date" name="date" class="form-control {{ $errors->has('von') ? ' is-invalid' : '' }}" id="date">
            @if ($errors->has('date'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('date') }}</strong>
                </span>
               @endif
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Von:</label>
            <input type="time" name="von" class="form-control {{ $errors->has('von') ? ' is-invalid' : '' }}" id="von">
            @if ($errors->has('von'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('von') }}</strong>
                </span>
               @endif
          </div>
           <div class="form-group">
            <label for="recipient-name" class="col-form-label">Bis:</label>
            <input type="time" name="bis" class="form-control {{ $errors->has('bis') ? ' is-invalid' : '' }}" id="bis">
            @if ($errors->has('vorname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('bis') }}</strong>
                </span>
               @endif
          </div> 
          <div class="form-group">
            <label for="message-text" class="col-form-label">Event:</label>
            <textarea class="form-control {{ $errors->has('message') ? ' is-invalid' : '' }}" name="message" id="message-text"></textarea>
              @if ($errors->has('vorname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('message') }}</strong>
                </span>
               @endif
          </div>
        </div>
        <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Abbrechen</button>
        <button type="submit" class="btn btn-primary">Buchen</button>
      </div>
        </form>
      </div>
      
    </div>
  </div>
</div>
 <h3 style="text-shadow: 4px" class="mt-4 mb-3">{{$gebaude->name}}'s Räume </h3>

    @foreach($raume as $key=>$raum)   
    <!-- Project One -->
      <div class="row">
        <div></div>
        <div class="col-md-5">
          <a href="{{$raum->id}}">
            <img style="width:100%;height: auto;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 12px 20px 0 rgba(0, 0, 0, 0.19);opacity: .8;
              filter: alpha(opacity=50); /* For IE8 and earlier */" class="img-fluid rounded mb-3 mb-md-0" src="http://localhost:8000/storage/raum/{{$raum->image}}" alt="">
          </a>
        </div>
          <div class="col-md-5" style="width:20%;">
          <div id="table-wrapper">
           <div id="table-scroll">
          <table class="table table-hover table-bordered results">
          <thead>
            <tr>
              <th scope="col">Date</th>
              <th scope="col">Von</th>
              <th scope="col">Bis</th>
              <th scope="col">Event</th>
            </tr>
          </thead>  
          <tbody>
            @forelse($raum->buchungen as $key=>$buchung)
            <tr>
              <td>{{\Carbon\Carbon::parse($buchung->date)->format('d.m.Y')}}</td>
              <td>{{\Carbon\Carbon::parse($buchung->von)->format('H:i:s')}}</td>
              <td>{{\Carbon\Carbon::parse($buchung->bis)->format('H:i:s')}}</td>
              <td>{{$buchung->event}}</td>
            </tr> 
            @empty
            <div class="p-2 mb-2 bg-danger text-white">
              <strong>
                <p>
                  Noch Keine Buchung vorhanden !
               </p>
              </strong>
            </div>
            @endforelse
          </tbody> 
        </table>
      </div>
      </div>
        </div>
        <div class="col-md-2">
          <h3>N°: {{$raum->raum_number}}</h3><br>
          <p><strong>Name: </strong>{{$raum->name}}</p>
          <p><strong>Datum: </strong>{{\Carbon\Carbon::parse($raum->created_at)->format('d.m.Y')}}</p>
          <a style="color:white;" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-gebaude_id='{{$raum->gebaude->id}}' data-username='{{$user->name}}'data-raum_id='{{$raum->id}}' data-raum_number="{{$raum->raum_number}}">Buchen</a>  
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