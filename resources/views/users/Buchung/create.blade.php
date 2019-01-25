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
        <h3><strong>Reservierung</strong></h3>
        <br>
        
        <form class="form-horizontal" role="form" method="POST">
           @csrf
          <div class="form-group">
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('vorname') ? ' is-invalid' : '' }}" name="vorname" type="text" value="{{$user->name}}" required autofocus>
              @if ($errors->has('vorname'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('vorname') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">Von :</label>
            <div class="col-lg-8">
              <input class="form-control{{ $errors->has('von') ? ' is-invalid' : '' }}" name="von" type="datetime-local" value="{{ old('von') }}" >
              @if ($errors->has('von'))
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('von') }}</strong>
                </span>
               @endif
            </div>
          </div>
          <div class="form-group">
            <label class="col-lg-3 control-label">bis :</label>
            <div class="col-lg-8">
              <input class="form-control {{ $errors->has('bis') ? ' is-invalid' : '' }}" name="bis" type="datetime-local" value="{{ old('bis') }}" required autofocus>
            </div>
          </div>
          <div class="form-group">
                <label class="col-lg-3 control-label">Nachricht:</label>
              <div class="col-lg-8">
                <textarea rows="6" cols="100" class="form-control" id="message"  name="kommentar" required="" data-validation-required-message="Please enter your message" maxlength="555" style="resize:none"></textarea>
              </div>
          </div>
          </div>
          </div>
          <div class="form-group">
            <label class="col-md-3 control-label"></label>
            <div class="col-md-8">
              <button type="submit"  class="btn btn-primary">Buchen</button>
            </div>
          </div>
        </form>
      </div>
  </div>
</div>
<hr>
@stop