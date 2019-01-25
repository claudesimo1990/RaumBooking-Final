@extends('layouts.master2')
@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@stop
@section('nav')

@include('includes.nav')

@stop

@section('content')
<div class="container">
  <div class="row">
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <h3><strong>{{$user->name}}'s Profile Update</strong></h3>
        
        <form class="form-horizontal" role="form" action="/profile/{{$profile->id}}"  method="POST" enctype="multipart/form-data">
           @csrf

          <div class="form-group">
            <label class="col-lg-3 control-label" for="vorname">Vorname : </label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('vorname') ? ' is-invalid' : '' }}" name="vorname" type="text" value="{{$profile->vorname}}" required autofocus>
              @if ($errors->has('vorname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('vorname') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="matrikelnummer">Mat-Nr:</label>
            <div class="col-lg-8">
              <input class="form-control{{ $errors->has('matrikelnummer') ? ' is-invalid' : '' }}" name="matrikelnummer" type="text" value="{{$profile->matrikelnummer}}" required autofocus>
              @if ($errors->has('matrikelnummer'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('matrikelnummer') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="studiengang">Studiengang:</label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('studiengang') ? ' is-invalid' : '' }}" name="studiengang" type="text" value="{{$profile->studiengang}}"}}" required autofocus>
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label" for="semester">Semester:</label>
            <div class="col-lg-8">
              <input class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" type="text" value="{{$profile->semester}}" required autofocus>
              @if ($errors->has('semester'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('semester') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="adresse">Adresse : </label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" type="text" value="{{$profile->adresse}}" required autofocus>
                @if ($errors->has('adresse'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('adresse') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label" for="avatar">Profilbild : </label>
            <div class="col-lg-8">
            <input class="form-control {{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" type="file" value="{{$profile->avatar}}" required autofocus>
              @if ($errors->has('avatar'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('avatar') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit"  class="btn btn-primary">Speichern</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
@stop