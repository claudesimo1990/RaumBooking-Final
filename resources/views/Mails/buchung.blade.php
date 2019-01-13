@component('mail::message')
# Gratulation ! 

Hallo **{{$user->name}}** Sie haben den Raum : n°  ** {{$data->id}} **
für den Zeitraum von ** {{\Carbon\Carbon::parse($data->von)->format('d/m/Y H:i:s')}} ** bis ** {{\Carbon\Carbon::parse($data->bis)->format('d/m/Y H:i:s')}} ** erfolgreich gebucht!

@component('mail::panel')
Ihre QR-CODE nummer lautet : ** {{$data->qrcode}} **.
@endcomponent

@component('mail::button', ['url' => 'http://localhost:8000'])
zurück zu Ihrem Homepage !
@endcomponent

Viele Grüße,<br>
{{ config('app.name') }}
@endcomponent
