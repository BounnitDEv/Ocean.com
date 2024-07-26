@component('mail::message')
<strong>First name : </strong>{{ $data['first_name'] }}<br>
<strong>Last name : </strong>{{ $data['last_name'] }}<br>
<strong>Email : </strong>{{ $data['email'] }}<br>
<strong>Phone : </strong>{{ $data['phone'] }}<br>
<strong>Country : </strong>{{ $data['country'] }}<br>
<strong>Message : </strong><br>
{{ $data['message'] }}
@endcomponent