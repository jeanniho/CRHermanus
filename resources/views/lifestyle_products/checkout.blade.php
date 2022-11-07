@extends("lifestyle_products.lifestyle_products")

@section("title")
    Checkout - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Checkout
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Checkout
@endsection

@section("content")
<div class="container mt-3 mb-5">
@if(!empty($products) && count($products) > 0)
    <form action="{{ route('checkout') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-sm-12 col-md-6">
                <h3 class="font-weight-bold">
                    Billing details
                </h3>
                <div class="row">
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="first_name">First name *</label>
                        <input type="text" class="form-control" placeholder="Your first name" 
                        id="first_name" name="first_name" required>
                    </div>
                    <div class="form-group col-sm-12 col-md-6">
                        <label for="last_name">Last name *</label>
                        <input type="text" class="form-control" placeholder="Your last name" 
                        id="last_name" name="last_name" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="company_name">Company name (optional)</label>
                    <input type="text" class="form-control" placeholder="Enter company name" 
                    id="company_name" name="company_name">
                </div>

                <div class="form-group">
                    <label for="country_name">Country / Region *</label>
                    <div>
                        <small>
                            *If no country is chosen the country name displayed below will be used
                        </small>
                    </div>
                    <select class="form-control form-control-sm" id="country_name" name="country_name" required>
                    </select>
                </div>

                <div class="form-group">
                    <label for="street_address">Street address *</label>
                    <input type="text" class="form-control" placeholder="House number and street name" 
                    id="street_address" name="street_address" required>
                    <input type="text" class="form-control mt-2" placeholder="Apartment, suite, unit, etc. (optional)" 
                    id="apartment_suite_unit" name="apartment_suite_unit">
                </div>

                <div class="form-group">
                    <label for="town_city">Town / City *</label>
                    <input type="text" class="form-control" id="town_city" 
                    placeholder="City / town name" name="town_city" required>
                </div>

                <div class="form-group">
                    <label for="state_province">State / Province *</label>
                    <input type="text" class="form-control" id="state_province" 
                    placeholder="State / Province" name="state_province" required>
                </div>

                <div class="form-group">
                    <label for="zip_postal_code">ZIP / Postal Code *</label>
                    <input type="tel" class="form-control" id="zip_postal_code" 
                    placeholder="ZIP / Postal Code" name="zip_postal_code" required>
                </div>

                <div class="form-group">
                    <label for="phone">Phone *</label>
                    <input type="tel" class="form-control" id="phone" 
                    placeholder="Phone number" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" class="form-control" id="email" 
                    placeholder="Enter email address" name="email" required>
                </div>
            </div>

            <div class="col-sm-12 col-md-6">
                <h3 class="font-weight-bold">
                    Additional information
                </h3>
                <div class="form-group">
                    <label for="additional_information">Order notes (optional)</label>
                    <textarea rows="3" type="text" class="form-control" 
                    placeholder="Notes about your order, e.g. special notes for delivery" 
                    id="additional_information" name="additional_information"></textarea>
                </div>
            </div>
        </div>

        <div class="mt-5">
            <h3 class="font-weight-bold text-center mb-1">Your order</h3>
            
            <!-- Your order section -->
            <div>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <h5 class="font-weight-bold">Product</h5>
                        <!-- <span class="font-weight-bold">Product count</span> -->
                        <h4 class="badge font-weight-900">Subtotal</h4>
                    </li>
                    @foreach($products as $product)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            {{ $product->product_name }} x{{ $product->quantity }}
                            <!-- <span class="font-weight-bold">x1</span> -->
                            <span class="badge badge-primary badge-pill">
                                R{{$product->sub_total}}.00
                            </span>
                        </li>
                    @endforeach
                    @if($total_price)
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5 class="font-weight-bold">Total</h5>
                            <!-- <span class="font-weight-bold">x2</span> -->
                            <span class="badge badge-success badge-pill">
                                R{{ $total_price }}.00
                            </span>
                        </li>
                    @endif
                    
                </ul>
            </div>
        </div>

        <div class="container ml-20 mr-20"><hr></div>

        <small id="services_help" class="form-text text-muted">
            Your personal data will be used to process your order, 
            support your experience throughout this website, 
            and for other purposes described in our 
            <a href="{{route('customer_privacy_notice')}}" class="text-danger">
                privacy policy
            </a>.
        </small>

        <div class="row text-center">
            <div class="col">
                <a href="{{route('cart')}}" class="btn btn-danger mt-3">
                    Cart
                </a>
            </div>
            <div class="col">
                <button type="submit" class="btn btn-success mt-3">
                    Place order
                </button>
            </div>
        </div>
    </form>
@else
    <div class="jumbotron">
        <h3 class="font-weight-600 text-center">
            Your cart is empty. <br>
            Nothing to checkout
        </h3>
    </div>
@endif
</div>

@endsection