@component('mail::message')
Nome: **{{$reply_name}}**

E-mail: {{$reply_email}}

Assunto: {{$subject}}

Mensagem: 
@component('mail::panel')
    {{$message}}
@endcomponent


Obrigado,<br>
{{ config('app.name') }}
@endcomponent
