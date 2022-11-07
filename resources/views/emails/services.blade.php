<p>
    Please see information of a client that reached out
</p>
<p>
    <b>Full name</b>: {{ $full_name }} <br>
    <b>Email address</b>: {{ $email }} <br>
    <b>Phone number</b>: {{ $phone_number }} <br>
    @if($client_type!=null)
        <b>Client type</b>: {{ $client_type }} <br>
    @endif

    @if($service_interested_in!=null)
        <b>Service interested in</b>: {{ $service_interested_in }} <br>
    @endif
</p>