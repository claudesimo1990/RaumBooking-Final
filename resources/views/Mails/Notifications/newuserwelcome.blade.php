@component('mail::message')
# Introduction
Welcome {{$user->name}} auf unsere Homepage . Was können wir 
verbessern um Ihnen zu helfen ?

@component('mail::button', ['url' => ''])
zurück zu der Startseite
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
