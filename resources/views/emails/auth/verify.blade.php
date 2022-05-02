@component('mail::message')
# Hello, {{$user->name}}

Click the link below to complete registration.

@component('mail::button', ['url' => route('register.verify', ['token' => $user->verify_token])])
Verify email
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
