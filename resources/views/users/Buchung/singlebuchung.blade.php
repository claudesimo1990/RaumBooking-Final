@extends('layouts.master2')

@section('css')
<link rel="stylesheet" href="{{ asset('css/user/profile.css') }}">
@stop

@section('nav')

@include('includes.nav')

@stop

@section('content')
 <div class="row justify-content-center">
        <div class="container">
        @forelse ($singlebuchung as $buchung)   
                <div class="jumbotron">
                  
                 <div class="row">
                      <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8">
                         <h6>hier kommt die verschiedene Reservierungen !</h6>
                        </div>        
                    </div>
                  </div>
             @empty
            <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h1 class="display-4">Noch keine Buchung vorhanden !</h1>
            </div>
        </div>
         @endforelse 
     </div>
     </div>
@endsection
