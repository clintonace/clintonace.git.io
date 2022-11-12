@component('mail::message')

{{$email['name']}}<br>
{{$email['email']}}<br>
{{$email['phone']}}<br>
{{$email['message']}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
