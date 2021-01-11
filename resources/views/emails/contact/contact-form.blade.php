@component('mail::message')

# You have received a new message!
<strong>Name: </strong>{{ $data['name'] }} 
<br>
<strong>Email: </strong> {{ $data['email'] }}
<br>
<strong>Message:</strong>
<br>
{{ $data['message'] }}

@endcomponent
