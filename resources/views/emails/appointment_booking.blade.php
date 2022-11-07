<p>
    Client appointment booking details
</p>
<p>
    <b>Full name</b>: &emsp; {{ $appointment_name }} <br>
    <b>Email address</b>: &emsp; {{ $appointment_email }} <br>
    <b>Phone number</b>: &emsp; {{ $appointment_phone_number }} <br>
    @if($appointment_date!=null)
        <b>Appointment date</b>: &emsp; {{ $appointment_date }} <br>
    @endif

    @if($appointment_description!=null)
        <b>Appointment description</b>: &emsp; {{ $appointment_description }} <br>
    @endif

    @if($service_interested_in!=null)
        <b>Service interested in</b>: &emsp; {{ $service_interested_in }} <br>
    @endif
</p>