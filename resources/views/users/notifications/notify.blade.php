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
        @forelse(auth()->user()->notifications as $notification)      
         <div class="jumbotron jumbotron-fluid">
            <div class="container">
              <h3 class="mb-4"> Buchung des Raums {{$notification['data']['raum_number']}} für {{$notification['data']['event']}}</h3>
              <p class="lead">Sie Haben erfolgreich den Raum <strong>{{$notification['data']['raum_number']}}</strong> für den Zeitraum von <strong>{{$notification['data']['von']}}</strong> bis <strong>{{$notification['data']['bis']}}</strong>  gebucht.</p>
              <p>
                Ihre Qrcode lautet : <span><strong>
                {{$notification['data']['qrcode']}}
                </strong></span>
              </p> 
            </div>  
            <div style="display:block;float: right;margin-top: 22px;">
              {{ Form::open(array('method'=>'delete','route'=>['notications.destroy',$notification->id]))}}
                <button class="btn btn-danger" type="submit">löschen</button>
              {{Form::close()}}
            </div>        
         </div>
         @empty
         <div class="bg-danger pt-3 text-center pb-3 mt-4 text-white">
           <p>
             Sie Haben keine Notification !
           </p>     
         </div>
          <br><br><br><br><br><br><br>
        @endforelse 
     </div>
     </div>
@endsection
