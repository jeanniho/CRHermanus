@extends("lifestyle_products.lifestyle_products")

@section("title")
    Provident Fund - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Life products
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Products > Finance > Provident Fund
@endsection

@section("content")
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('static_images/provident_fund.jpg') }}" class="w100" alt="Provident Fund">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
            <h4 class="font-weight-bold">Provident Fund</h4>
            <p class="text-danger">R60.00</p>
            <p>
                We find out how much of the Provident Fund you have access to and help you claim.
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
            <b>According to a Report</b>
        </p>
        <p>
            There are in excess 3 Trillion Rands worth of unclaimed Provident Fund Fee Payouts
        </p>
        <p>
            <strong>• What is a Provident fund?</strong>
        </p>
        <p>
            A Provident Fund is a retirement fund run by the government. They are generally compulsory, often through taxes, and are funded by both employer and employee contributions. Governments set the rules regarding withdrawals, including minimum age and withdrawal amount.
        </p>
        <p>
            <strong>• How do we help?</strong>
        </p>
        <p>
            We find out how much of the Provident Fund you have access to and help you claim and take a small percentage as payment and thereafter you can enjoy your retirement.
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
                    <a href="{{route('family_assist_plan')}}">
                        <img src="{{ asset('static_images/family_assist_plan.jpg') }}" class="card-img-top" alt="Family Assist Plan">
                    </a>
                    <div class="card-body px-2 pb-2 pt-1">
                        <div class="d-flex justify-content-between">
                            <div>
                                <p class="h4 text-primary">R125.00</p>
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
                                <a href="{{route('family_assist_plan')}}" class="text-secondary">Family Assist Plan</a>
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