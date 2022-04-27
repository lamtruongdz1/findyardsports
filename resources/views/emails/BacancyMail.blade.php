@component('mail::message')
<h1>Hello Admin</h1>
<h2>Bạn có một email liên hệ mới từ <strong>{{$body['name']}}</strong></h2>
<h3>Tiêu đề: {{ $body['subject'] }}</h3>
<h3>Email: {{$body['email']}}</h3>
<br>
<h3>Nội dung : {{ $body['message'] }}</h3>

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
