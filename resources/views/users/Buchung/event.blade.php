@extends('layouts.master2')
@section('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@endsection
@section('content')
<div class="container-fluid">
    <div class="row justify-content-center"style="margin-right: -280px;margin-left: -280px">
        <div class="col-md-8 col-md-offset-2">
            <div class="card">
                <div class="card-header">Calender Aller Buchungen</div>
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script>
{!! $calendar->script() !!}
@endsection