@extends('layouts.master2')

@section('nav')

@include('includes.nav')

@stop

@section('content')
<div class="container"><br><br>
    <hr>
  <div class="row">
      
      <!-- edit form column -->
      <div class="col-md-9 personal-info">
        <div class="alert alert-info alert-dismissable">
          <a class="panel-close close" data-dismiss="alert">×</a> 
          <i class="fa fa-coffee"></i>
          This is an <strong>.alert</strong>. Use this to show important messages to the user.
        </div>
        <h3><strong>{{$user->name}}'s Profile</strong></h3>
        
        <form class="form-horizontal" role="form" action="{{route('edit.profile')}}" method="POST" enctype="multipart/form-data">
           @csrf
          <div class="form-group">
            <label class="col-lg-3 control-label">Vorname : </label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('vorname') ? ' is-invalid' : '' }}" name="vorname" type="text" value="{{ old('vorname') }}" required autofocus>
              @if ($errors->has('vorname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('vorname') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Mat-Nr:</label>
            <div class="col-lg-8">
              <input class="form-control{{ $errors->has('matrikelnummer') ? ' is-invalid' : '' }}" name="matrikelnummer" type="text" value="{{ old('matrikelnummer') }}" required autofocus>
              @if ($errors->has('matrikelnummer'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('matrikelnummer') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Studiengang:</label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('studiengang') ? ' is-invalid' : '' }}" name="studiengang" type="text" value="{{ old('studiengang') }}" required autofocus>
            </div>
          </div>
           <div class="form-group">
            <label class="col-lg-3 control-label">Semester:</label>
            <div class="col-lg-8">
              <input class="form-control{{ $errors->has('semester') ? ' is-invalid' : '' }}" name="semester" type="text" value="{{ old('semester') }}" required autofocus>
              @if ($errors->has('semester'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('semester') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Adresse : </label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" type="text" value="{{ old('adresse') }}" required autofocus>
                @if ($errors->has('adresse'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('adresse') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Avatar : </label>
            <div class="col-lg-8">
            <input class="form-control {{ $errors->has('avatar') ? ' is-invalid' : '' }}" name="avatar" type="file" value="{{ old('avatar') }}" required autofocus>
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