@component('mail::message')
## Hi {{ $name }},

You are receiving this email because we received a password reset request for your account.

You can reset your password by clicking the button below.

@component('mail::button', ['url' => $url])
Reset Password
@endcomponent

If you did not request a password reset, no further action is required.

Thanks,<br>
{{ config('app.name') }} Admin
@endcomponent
