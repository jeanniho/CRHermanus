@extends("lifestyle_products.lifestyle_products")

@section("title")
    Products - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Life products
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Products
@endsection

@section("content")
    <!-- products navigation-like section e.g. sortby -->
    <div class="container pt-5">
        @if (\Session::has('product_add'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('product_add') !!}</p>
            </div>
        @endif
        <div class="row align-items-center justify-content-between">
            <div class="col-lg-2 col-md-3 col-sm-4 col-7">
                <div class="input-group input-group-sm">
                    <div class="input-group-prepend">
                        <span class="input-group-text" id="basic-addon1">4 Items</span>
                    </div>
                    <select name="" class="form-control form-control-sm">
                        <option value="">1</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select> 
                </div>
            </div>
    
            <div class="col-md-3 col-5 text-right order-md-1 d-none d-lg-block">
                <a href="#" class="btn btn-primary grid-view btn-sm">
                <i class="fa fa-th-large"></i>
                </a>
                <a href="#" class="btn btn-primary list-view btn-sm">
                <i class="fa fa-bars"></i>
                </a>
            </div>

            <div class="col-md-3 order-md-0 mt-2 mt-md-0">
                <label for="our_product_sort_by">Sort By</label>
                <select class="form-control form-control-sm" id="our_product_sort_by" name="our_product_sort_by">
                    <option value="">Popularity</option>
                    <option value="">Average rating</option>
                    <option value="">Latest</option>
                    <option value="">Price: low to high</option>
                    <option value="">Price: high to low</option>
                </select>  
            </div>
    
        </div>
    </div>

    <div class="container">
        <hr />
    </div>

    <!-- the products -->
    <div class="container">
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
                        
                        <form action="{{ route('cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="image_name" name="image_name" 
                                value="static_images/family_assist_plan.jpg" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_name" name="product_name" 
                                value="Family Assist Plan" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_price" name="product_price" 
                                value="125.00" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_id" name="product_id" 
                                value=1 required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="col px-0">
                                    <button class="btn btn-outline-primary btn-block" type="submit">
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
                        </form>
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
                        
                        <form action="{{ route('cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="image_name" name="image_name" 
                                value="static_images/income_protector.jpg" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_name" name="product_name" 
                                value="Income Protector" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_price" name="product_price" 
                                value="60.00" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_id" name="product_id" 
                                value=2 required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="col px-0">
                                    <button class="btn btn-outline-primary btn-block" type="submit">
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
                        </form>
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
                        
                        <form action="{{ route('cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="image_name" name="image_name" 
                                value="static_images/medical_assist_plan.jpg" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_name" name="product_name" 
                                value="Medical Assist Plan (M.A.P)" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_price" name="product_price" 
                                value="145.00" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_id" name="product_id" 
                                value=3 required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="col px-0">
                                    <button class="btn btn-outline-primary btn-block" type="submit">
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
                        </form>
                    </div>
                </div>
            </div>

        </div>

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
                        
                        <form action="{{ route('cart') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="image_name" name="image_name" 
                                value="static_images/provident_fund.jpg" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_name" name="product_name" 
                                value="Provident Fund" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_price" name="product_price" 
                                value="60.00" required>
                            </div>
                            <div class="form-group">
                                <input type="hidden" class="form-control" id="product_id" name="product_id" 
                                value=4 required>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="col px-0">
                                    <button class="btn btn-outline-primary btn-block" type="submit">
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
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>


    <div class="container">
        <hr />
    </div>

    <div class="container pb-5">
        <div class="row align-items-center justify-content-between">

            <div class="col-lg-2 col-md-3 col-sm-4 col-7">
            <div class="input-group input-group-sm">
                <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">4 Items</span>
                </div>
                <select name="" class="form-control form-control-sm">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select> 
            </div>
            </div>
            
            <div class="col-5 text-right d-none d-lg-block">
                <a href="#" class="btn btn-primary grid-view btn-sm">
                <i class="fa fa-th-large"></i>
                </a>
                <a href="#" class="btn btn-primary list-view btn-sm">
                <i class="fa fa-bars"></i>
                </a>
            </div>
            
        </div>
    </div>

@endsection