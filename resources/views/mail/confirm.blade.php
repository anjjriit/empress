@component('mail::message')
## Hi {{ $name }},

Thanks for your interest in our application.

Please confirm your email address by clicking on the button below.

@component('mail::button', ['url' => $url])
Confirm
@endcomponent

Thanks,<br>
{{ config('app.name') }} Admin
@endcomponent
