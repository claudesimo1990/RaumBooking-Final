@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{asset('css/user/email.css')}}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ihre Email Adresse wurde noch nicht bestätigt') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Bevor Sie fortfahren, überprüfen Sie 
                            bitte Ihre E-Mail auf einen Bestätigungslink.') }}
                    {{ __('Wenn Sie die E-Mail nicht erhalten haben') }}, <a href="{{ route('verification.resend') }}">{{ __('Klicken Sie hier, um eine andere anzufragen') }}</a>.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
