@extends("lifestyle_products.lifestyle_products")

@section("title")
    Cart - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Cart
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Cart
@endsection

@section("content")
<div class="container">
  <h2 class="mt-5 font-weight-bolder mt-4 text-center">Selected products details</h2>
  @if(!empty($products) && count($products) > 0)
    <div class="mt-3">
        @foreach($products as $product)
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">
                        {{ $product->product_name }}
                    </h5>

                    <p class="card-text">
                        <b>Price</b>: R{{ $product->product_price }}
                    </p>

                    <form action="{{ route('cart_quantity_update') }}" method="POST" class="mt-3">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="product_id" 
                            name="product_id" value="{{ $product->product_id }}" required>
                        </div>
                        <div class="form-group">
                            <input type="hidden" class="form-control" id="product_price" 
                            name="product_price" value="{{ $product->product_price }}" required>
                        </div>
                        <p class="card-text h4 text-primary">
                            <div class="number">
                                <b>Quantity</b>:
                                <span class="minus">-</span>
                                <input type="text" name="quantity" value="{{ $product->quantity }}" 
                                min="1" class="cart_quantity_increase"/>
                                <span class="plus">+</span>

                                <button class="card-link btn btn-success ml-1 mt-1" type="submit">
                                    Update
                                </button>
                            </div>
                        </p>
                    </form>
                    
                    <h6 class="card-subtitle mb-3 text-muted">
                        <b class="text-danger">Subtotal</b>: R{{$product->sub_total}}.00
                    </h6>

                    <a class="card-link btn btn-danger btn-round cart_remove_product" 
                    id="{{ $product->product_id }}">
                        Remove
                    </a>
                        
                </div>
            </div>
        @endforeach
    </div>

    <div class="mt-5 jumbotron">
        @if($total_price)
            <div class="card mt-1">
                <div class="card-body">
                    <h2 class="card-title font-weight-bolder">
                        Cart totals
                    </h2>

                    <p class="card-text">
                        <b>Subtotal</b>: R{{ $total_price }}.00
                    </p>
                    
                    <h6 class="card-subtitle mb-2 text-muted">
                        <b class="text-danger">Total</b>: R{{ $total_price }}.00
                    </h6>

                    <a href="{{ route('checkout') }}" class="card-link btn btn-danger mt-3">
                        Proceed to checkout
                    </a>
                </div>
            </div>
        @endif
    </div>
  @else
    <div class="jumbotron">
        <h3 class="font-weight-600 text-center">Your cart is empty</h3>
    </div>
  @endif
</div>

@endsection