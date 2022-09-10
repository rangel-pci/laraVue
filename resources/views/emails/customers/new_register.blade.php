@component('mail::message')
# Olá, {{ $data->toName }}!

@component('mail::panel')
Seu cadastro em {{ config('app.name') }} foi concluído!
@endcomponent

@endcomponent
