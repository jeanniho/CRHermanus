@extends("lifestyle_products.lifestyle_products")

@section("title")
    Family Assist Plan - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Life products
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Products > Finance > Family Assist Plan
@endsection

@section("content")
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('static_images/family_assist_plan.jpg') }}" class="" alt="Family Assist Plan">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
            <h4 class="font-weight-bold">Family Assist Plan</h4>
            <p class="text-danger">R125.00</p>
            <p>
                To welcome them to the program i.e. A once-off Spur voucher to the value of R50 is sent to the member on the inception of their membership.
            </p>
            <div class="row">
                <div class="col-sm-6 col-md-7 col-lg-6 col-xl-6">
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="text" value="1"/>
                        <span class="plus">+</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-6 col-xl-6">
                    <button class="btn btn-danger">Add to cart</button>
                </div>
            </div>
            <hr />
            
            <div class="d-flex justify-content-between">
                <div>
                    <small><strong>Category: </strong>Finance</small>
                </div>
                <div>
                    <a href="{{route('cart')}}" class="text-secondary lead" data-toggle="tooltip" 
                    data-placement="left" title="View cart">
                        <i class="fa fa-shopping-cart text-danger" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- product description -->
    <div class="mt-3">
        <button type="button" class="btn btn-danger btn-lg disabled mb-2">Description</button>
        <p>
            <strong>
                1 – DIscounted Take away voucher @ Chesa Nyama, Spur, Roman’s Pizza, and Chicken Licken
            </strong>
        </p>
        <p>
            To welcome you to the program, a once-off Spur voucher for the value of R50 is sent to you at the inception of your membership. To be offered to members monthly as long as you pay your membership on time.
        </p>
        <p>
            To reward certain behaviour e.g. 6 Months of debt order success, discounts are available to redeem on the digital coupon platform. A minimum of 35 Coupons are provided monthly and discounts ranged between  R2 to R20 per product.
        </p>
        <p>
            <strong>
                2 – R10,000 cover for R125.00, Old Mutual
            </strong>
        </p>
        <p>
            R10,000 – Principle Member<br>
            R10,000 – Spouse<br>
            R7500 – Childeren 14 – 21 years old<br>
            R5000 – Childeren 06 – 13 years old<br>
            R2500 – Childeren 01 – 05 years old<br>
            1500 – Stillborn (26 weeks)
        </p>
        <p>
            • No medical and 6 months waiting period.<br>
            • in the event of Accidental Death, the cover will be doubled.<br>
            • Grocery &amp; Meat voucher to the value of R2500.<br>
            • Repatriation of Mortal Remains.
        </p>
        <p>
            <strong>
                3 – Discounted Grocery Vouchers – Shoprite &amp; Checkers
            </strong>
        </p>
        <p>
            The benefit brings out savings on the client’s groceries purchased by means of varying discounts on a selection of items on a quarterly basis. A minimum of 30 discounted items is available monthly in various categories.
        </p>
        <p>
            Discounts vary between R2 to R10 off.
        </p>
        <p>
            The process is facilitated via a USSD request from the client’s cell phone, prior to the actual payment transaction. At the till point, display the unique once-off pin.
        </p>
    </div>
    <hr>
    <!-- related products -->
    <div class="mt-3">
        <h2 class="font-weight-bold pb-2">Related products</h2>
        <!-- the products -->
        <div class="row">
            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <!-- <div class="d-flex justify-content-between position-absolute w-100">
                        <div class="label-new">
                            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="ml-1">New</span>
                            </span>
                        </div>

                        <div class="label-sale">
                            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                            <span class="ml-1">Sale</span>
                            </span>
                        </div>
                    </div> -->
                    <a href="{{route('provident_fund')}}">
                        <img src="{{ asset('static_images/provident_fund.jpg') }}" class="card-img-top" alt="Provident Fund">
                    </a>
                    <div class="card-body px-2 pb-2 pt-1">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="h4 text-primary">R60.00</p>
                            </div>
                            <div>
                                <a href="{{route('cart')}}" class="text-secondary lead" data-toggle="tooltip" 
                                data-placement="left" title="View cart">
                                    <i class="fa fa-shopping-cart text-danger" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- <p class="text-warning d-flex align-items-center mb-2">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p> -->

                        <p class="mb-2">
                            <strong>
                                <a href="{{route('provident_fund')}}" class="text-secondary">Provident Fund</a>
                            </strong>
                        </p>
                        <!-- <p class="mb-1">
                            <small>
                            <a href="#" class="text-secondary">Brands</a>
                            </small>
                        </p> -->
                        <!-- <div class="d-flex mb-3 justify-content-between">
                            <div>
                            <p class="mb-0 small"><b>UPC: </b> 2310010</p>
                            <p class="mb-0 small"><b>PART#: </b> 2121</p>
                            <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
                            </div>
                            <div class="text-right">
                            <p class="mb-0 small"><b>Free Shipping</b></p>
                            <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
                            <p class="mb-0 small"><b>REG: </b> $19.99</p>
                            <p class="mb-0 small text-primary">
                                <span class="font-weight-bold">Save</span> $20.00 (16%)
                            </p>
                            </div>
                        </div> -->
                        
                        <div class="d-flex justify-content-between">
                            <div class="col px-0">
                                <button class="btn btn-outline-primary btn-block">
                                    Add To Cart 
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- <div class="ml-2">
                                <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <!-- <div class="d-flex justify-content-between position-absolute w-100">
                        <div class="label-new">
                            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="ml-1">New</span>
                            </span>
                        </div>

                        <div class="label-sale">
                            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                            <span class="ml-1">Sale</span>
                            </span>
                        </div>
                    </div> -->
                    <a href="{{route('income_protector')}}">
                        <img src="{{ asset('static_images/income_protector.jpg') }}" class="card-img-top" alt="Income Protector">
                    </a>
                    <div class="card-body px-2 pb-2 pt-1">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="h4 text-primary">R60.00</p>
                            </div>
                            <div>
                                <a href="{{route('cart')}}" class="text-secondary lead" data-toggle="tooltip" 
                                data-placement="left" title="View cart">
                                    <i class="fa fa-shopping-cart text-danger" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- <p class="text-warning d-flex align-items-center mb-2">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p> -->

                        <p class="mb-2">
                            <strong>
                                <a href="{{route('income_protector')}}" class="text-secondary">Income Protector</a>
                            </strong>
                        </p>
                        <!-- <p class="mb-1">
                            <small>
                            <a href="#" class="text-secondary">Brands</a>
                            </small>
                        </p> -->
                        <!-- <div class="d-flex mb-3 justify-content-between">
                            <div>
                            <p class="mb-0 small"><b>UPC: </b> 2310010</p>
                            <p class="mb-0 small"><b>PART#: </b> 2121</p>
                            <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
                            </div>
                            <div class="text-right">
                            <p class="mb-0 small"><b>Free Shipping</b></p>
                            <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
                            <p class="mb-0 small"><b>REG: </b> $19.99</p>
                            <p class="mb-0 small text-primary">
                                <span class="font-weight-bold">Save</span> $20.00 (16%)
                            </p>
                            </div>
                        </div> -->
                        
                        <div class="d-flex justify-content-between">
                            <div class="col px-0">
                                <button class="btn btn-outline-primary btn-block">
                                    Add To Cart 
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- <div class="ml-2">
                                <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4 mb-3">
                <div class="card h-100">
                    <!-- <div class="d-flex justify-content-between position-absolute w-100">
                        <div class="label-new">
                            <span class="text-white bg-success small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <span class="ml-1">New</span>
                            </span>
                        </div>

                        <div class="label-sale">
                            <span class="text-white bg-primary small d-flex align-items-center px-2 py-1">
                            <i class="fa fa-tag" aria-hidden="true"></i>
                            <span class="ml-1">Sale</span>
                            </span>
                        </div>
                    </div> -->
                    <a href="{{route('medical_assist_plan')}}">
                        <img src="{{ asset('static_images/medical_assist_plan.jpg') }}" class="card-img-top" alt="Medical Assist Plan (M.A.P)">
                    </a>
                    <div class="card-body px-2 pb-2 pt-1">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="h4 text-primary">R145.00</p>
                            </div>
                            <div>
                                <a href="{{route('cart')}}" class="text-secondary lead" data-toggle="tooltip" 
                                data-placement="left" title="View cart">
                                    <i class="fa fa-shopping-cart text-danger" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>

                        <!-- <p class="text-warning d-flex align-items-center mb-2">
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                            <i class="fa fa-star" aria-hidden="true"></i>
                        </p> -->

                        <p class="mb-2">
                            <strong>
                                <a href="{{route('medical_assist_plan')}}" class="text-secondary">Medical Assist Plan (M.A.P)</a>
                            </strong>
                        </p>
                        <!-- <p class="mb-1">
                            <small>
                            <a href="#" class="text-secondary">Brands</a>
                            </small>
                        </p> -->
                        <!-- <div class="d-flex mb-3 justify-content-between">
                            <div>
                            <p class="mb-0 small"><b>UPC: </b> 2310010</p>
                            <p class="mb-0 small"><b>PART#: </b> 2121</p>
                            <p class="mb-0 small"><b>MPN#: </b> mpn22651</p>
                            </div>
                            <div class="text-right">
                            <p class="mb-0 small"><b>Free Shipping</b></p>
                            <p class="mb-0 small"><b>MSRP: </b> $119.99</p>
                            <p class="mb-0 small"><b>REG: </b> $19.99</p>
                            <p class="mb-0 small text-primary">
                                <span class="font-weight-bold">Save</span> $20.00 (16%)
                            </p>
                            </div>
                        </div> -->
                        
                        <div class="d-flex justify-content-between">
                            <div class="col px-0">
                                <button class="btn btn-outline-primary btn-block">
                                    Add To Cart 
                                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                                </button>
                            </div>
                            <!-- <div class="ml-2">
                                <a href="#" class="btn btn-outline-success" data-toggle="tooltip" data-placement="left" title="Add to Wishlist">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                </a>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>
</div>
@endsection