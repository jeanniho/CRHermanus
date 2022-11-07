@extends("admin.admin_index")

@section("title")
    Client order view
@endsection

@section("content")
<div class="container">
    @if(!empty($order) && !empty($products) && count($products) > 0)
        <div class="jumbotron p-3">
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">
                        <b>Client Checkout Information</b>
                    </h5>

                    <!-- <h6 class="card-subtitle mb-3 text-muted">
                        <b>Order status</b>: {{ $order->order_status }} <br>
                        <b>Order price</b>: R{{ $order->order_total_price }}
                    </h6> -->

                    <p class="card-text">
                        <b>First name</b>: {{ $order->first_name }} <br>
                        <b>Last name</b>: {{ $order->last_name }} <br>
                        @if($order->company_name!=null && $order->company_name!='')
                            <b>Company name</b>: {{ $order->company_name }} <br>
                        @endif
                        <b>Country name</b>: {{ $order->country_name }} <br>
                        <b>Street address</b>: {{ $order->street_address }} <br>
                        @if($order->apartment_suite_unit!=null && $order->apartment_suite_unit!='')
                            <b>Appartment suite unit</b>: {{ $order->apartment_suite_unit }} <br>
                        @endif
                        <b>Town/City</b>: {{ $order->town_city }} <br>
                        <b>State/Province</b>: {{ $order->state_province }} <br>
                        <b>Zip postal code</b>: {{ $order->zip_postal_code }} <br>
                        <b>Phone number</b>: {{ $order->phone }} <br>
                        <b>Email address</b>: {{ $order->email }} <br>
                        @if($order->additional_information!=null && $order->additional_information!='')
                            <b>Additional information</b>: {{ $order->additional_information }} <br>
                        @endif
                    </p>
                </div>
            </div>
        </div>

        <div class="card mt-1 mb-5">
            <div class="card-body">
                <h5 class="card-title">
                    <b>Order information</b>
                </h5>

                <h6 class="card-subtitle mb-3 text-muted">
                    <b>Receipt number</b>: {{ $order->receipt_number }} <br>
                    <b>Order status</b>: {{ $order->order_status }} <br>
                </h6>

                <!-- Your order section -->
                <div class="card-text">
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
                                    R{{$product->sub_total}}
                                </span>
                            </li>
                        @endforeach
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <h5 class="font-weight-bold">Total</h5>
                            <!-- <span class="font-weight-bold">x2</span> -->
                            <span class="badge badge-success badge-pill">
                                R{{ $order->order_total_price }}
                            </span>
                        </li>
                    </ul>
                </div>

                <!-- order manipulation buttons -->
                <div class="row mt-2 text-center">
                    <div class="col row mt-1">
                        <form action="{{ route('order_manipulation') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_manipulation_type" 
                                name="order_manipulation_type" 
                                value="complete" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_id" 
                                name="order_id" 
                                value="{{ $order->id }}" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_receipt_number" 
                                name="order_receipt_number" 
                                value="{{ $order->receipt_number }}" required>
                            </div>

                            <button class="card-link btn btn-danger btn-round" type="submit">
                                Complete
                            </button>
                        </form>
                    </div>

                    <div class="col row mt-1">
                        <form action="{{ route('order_manipulation') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_manipulation_type" 
                                name="order_manipulation_type" 
                                value="pending" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_id" 
                                name="order_id" 
                                value="{{ $order->id }}" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_receipt_number" 
                                name="order_receipt_number" 
                                value="{{ $order->receipt_number }}" required>
                            </div>

                            <button class="card-link btn btn-danger btn-round" type="submit">
                                Pending
                            </button>
                        </form>
                    </div>

                    <div class="col">
                        <form action="{{ route('order_manipulation') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_manipulation_type" 
                                name="order_manipulation_type" 
                                value="cancel" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_id" 
                                name="order_id" 
                                value="{{ $order->id }}" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_receipt_number" 
                                name="order_receipt_number" 
                                value="{{ $order->receipt_number }}" required>
                            </div>

                            <button class="card-link btn btn-danger btn-round" type="submit">
                                Cancel
                            </button>
                        </form>
                    </div>

                    <div class="col row mt-1">
                        <form action="{{ route('order_manipulation') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_manipulation_type" 
                                name="order_manipulation_type" 
                                value="delete" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_id" 
                                name="order_id" 
                                value="{{ $order->id }}" required>
                            </div>

                            <div class="form-group">
                                <input type="hidden" class="form-control" id="order_receipt_number" 
                                name="order_receipt_number" 
                                value="{{ $order->receipt_number }}" required>
                            </div>

                            <button class="card-link btn btn-danger btn-round" type="submit">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
@endsection