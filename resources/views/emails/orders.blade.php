<p>
    Please see information of a Lifestyle Products Client ORDER
</p>
<p>
    <b>First name</b>: &emsp; {{ $first_name }} <br>
    <b>Last name</b>: &emsp; {{ $last_name }} <br>
    @if($company_name!=null)
        <b>Company Name</b>: &emsp; {{ $company_name }} <br>
    @endif
    <b>Country Name</b>: &emsp; {{ $country_name }} <br>
    <b>Street Address</b>: &emsp; {{ $street_address }} <br>
    @if($apartment_suite_unit!=null)
        <b>Apartment Suite Unit</b>: &emsp; {{ $apartment_suite_unit }} <br>
    @endif
    <b>Town City</b>: &emsp; {{ $town_city }} <br>
    <b>State Province</b>: &emsp; {{ $state_province }} <br>
    <b>Zip Postal Code</b>: &emsp; {{ $zip_postal_code }} <br>
    <b>Phone number</b>: &emsp; {{ $phone }} <br>
    <b>Email address</b>: &emsp; {{ $email }} <br>

    @if($additional_information!=null)
        <b>Additional information</b>: &emsp; {{ $additional_information }} <br>
    @endif

</p>
<p>
    @if(!empty($products) && count($products) > 0)
        <h3>Client order details</h3>
        
        <b>Receipt Number</b>: &emsp; {{ $receipt_number }} <br>
        <b>Product Count</b>: &emsp; {{ $product_count }} <br>
        <b>Quantity Count</b>: &emsp; {{ $quantity_count }} <br>

        <h4>Order breakdown</h4>

        @foreach($products as $product)
            <b>{{ $product->product_name }}</b>: x{{ $product->quantity }} &emsp; R{{$product->sub_total}} <br>
        @endforeach
        <b>Order Total Price</b>: &emsp; R{{ $order_total_price }} <br>
    @endif
</p>