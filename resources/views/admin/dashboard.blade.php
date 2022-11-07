@extends("admin.admin_index")

@section("title")
    Dashboard
@endsection

@section("content")
   <div class="container">
    @if(!empty($orders) && count($orders) > 0)
        <div class="jumbotron p-3">
            <form action="{{route('order_search')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="search_option">Search by</label>
                    <div>
                        <small>
                            *If no option is chosen the option name displayed below will be used
                        </small>
                    </div>
                    <select class="form-control form-control-sm" id="search_option" name="search_option" required>
                        <option value="receipt_number" selected>Receipt number</option>
                        <option value="first_name">First name</option>
                        <option value="last_name">Last name</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-outline form-white mb-2">
                            <input type="text" id="search_text" name="search_text" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                    <div class="col">
                        <input type="submit" value="Search" class="btn btn-outline-dark btn-lg px-5">
                    </div>
                </div>
            </form>
        </div>
        @if (\Session::has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('message') !!}</p>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('error') !!}</p>
            </div>
        @endif
        @foreach($orders as $order)
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">
                        <b>Receipt number</b>: {{ $order->receipt_number }}
                    </h5>

                    <h6 class="card-subtitle mb-3 text-muted">
                    <b>Order status</b>: {{ $order->order_status }} <br>
                        <b>By</b>: {{ $order->first_name }} {{ $order->last_name }}
                    </h6>

                    <p class="card-text">
                        <b>Produc count</b>: {{ $order->product_count }}
                    </p>

                    <p class="card-text">
                        <b>Quantity count</b>: {{ $order->quantity_count }}
                    </p>

                    <p class="card-text">
                        <b>Order price</b>: R{{ $order->order_total_price }}
                    </p>

                    <div class="row row mt-2">
                        <div class="col">
                            <form action="{{ route('order_manipulation') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="order_manipulation_type" 
                                    name="order_manipulation_type" 
                                    value="view" required>
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
                                    View
                                </button>
                            </form>
                        </div>

                        <div class="col">
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

                        <div class="col row">
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

                        <div class="col">
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
        @endforeach
    @else
        <div class="jumbotron">
            <h3 class="font-weight-600 text-center">
                No orders currently available in this category.
            </h3>
        </div>
    @endif
   </div>
@endsection