@component('mail::message')
<h3>New Messege form{{$contact_form_data["email"]}}</h3>
<p>Name:{{$contact_form_data["name"]}}</p>
<p>Phone:{{$contact_form_data["phone"]}}</p>
<p>message:{{$contact_form_data["message"]}}</p>
@endcomponent
