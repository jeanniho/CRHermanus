@extends("lifestyle_products.lifestyle_products")

@section("title")
    Income Protector - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Life products
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Products > Finance > Income Protector
@endsection

@section("content")
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4">
            <img src="{{ asset('static_images/income_protector.jpg') }}" class="" alt="Income Protector">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-8 col-xl-8">
            <h4 class="font-weight-bold">Income Protector</h4>
            <p class="text-danger">R60.00</p>
            <p>
                <strong>Assistant Income Protector</strong>
                 acts as a safety net during times like these, when you may not be able to <strong>work</strong> for a period of time. due to illness, disability, or the inability to earn an income due to unemployment.
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
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p>
                    <strong>
                        • What is an Income Protector?
                    </strong>
                </p>
                <p>
                    <b>Assistant </b>
                    <b>Income Protector </b>
                    <b>Policy</b> differs from lump-sum policies in that it pays you a set amount on a monthly basis, which you can use to cover your cost of living and day-to-day expenses. …&nbsp; It ensures that you can take care of your Financial Commitments.
                </p>
                <p>
                    <b>Assistant </b>
                    <b>Income Protector </b>acts as a safety net during times like these, when you may not be able to&nbsp;
                    <b>work</b> for a period of time. due to illness, disability, or the inability to earn an income due to unemployment.
                </p>
                <p>
                    <strong>• How it Works</strong>
                </p>
                <p>
                    An&nbsp;
                    <b>Income Protector</b>&nbsp;benefit ensures a steady, tax-free monthly&nbsp;
                    <b>income</b> to meet your financial obligations if you lose part or all of your&nbsp;
                    <b>income</b> due to being temporarily or permanently unable to work. If you own a business, an 
                    <b>Income Protector</b> benefit can enable you to employ someone to run the business in your absence.
                </p>
                <p>
                    – Pays out a Monthly Income Directly to the Client.<br>– Support your Lifestyle and your Families Financial Security.<br>– Provides peace of mind that your Financial Expenses will be taken care of.
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p>
                    <strong>• Policy Rules</strong>
                </p>
                <p>
                    – The cover is provided on a Monthly Basis. No reserves are built up and therefore,No surrender.
                </p>
                <p>
                    – This is a Voluntary Group Scheme.
                </p>
                <p>
                    – A General Waiting Period of 3 Calendar Months and, if a potential member is pregnant, 6 months from the Date of Birth of the Child.
                </p>
                <p>
                    – The minimum entry age is 18 Years and Older and the Maximum Entry age for&nbsp;The main Member is 65 Years Old.
                </p>
                <p>
                    – Maximum Cover per Policy under this Scheme: R90 000.00
                </p>
                <p>
                    – Membership can only Commence on the 1st day of the Month.
                </p>
                <p>
                    <strong>• Premiums</strong>
                </p>
                <p>
                    R5 000 for 6 months, max R30 000.00 @R60.00 P/M<br>R10 000 for 6 months, max R60 000.00 @R90.00 P/M<br>R15 000 for 6 months, max R90 000.00 @ R120.00 P/M
                </p>
            </div>
        </div>
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