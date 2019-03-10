@component('mail::message')
# Gratulation ! 
Hallo **{{$user->name}}** Sie haben den Raum : n°  ** {{$data['raum_number']}} ** am
**{{\Carbon\Carbon::parse($data['date'])->format('d/m/Y')}}** für den Zeitraum von ** {{\Carbon\Carbon::parse($data['von'])->format('H:i:s')}} ** bis ** {{\Carbon\Carbon::parse($data['bis'])->format('H:i:s')}} ** erfolgreich gebucht!

@component('mail::panel')
Ihre QR-CODE nummer lautet : ** {{$data['qrcode']}} ** 
@endcomponent

@component('mail::button', ['url' => 'http://localhost:8000'])
zurück zu Ihrem Homepage !
@endcomponent

Viele Grüße,<br>
{{ config('app.name') }}
@endcomponent
