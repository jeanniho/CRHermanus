@extends("lifestyle_products.lifestyle_products")

@section("title")
    Medical Assist Plan (M.A.P) - Confidential and Non-Obligitory Debt Solutions 
@endsection

@section("header_title")
    Life products
@endsection
@section("header_description")
    Confidential and Non-Obligitory Debt Solutions > Products > Finance > Medical Assist Plan (M.A.P)
@endsection

@section("content")
<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-3">
            <img src="{{ asset('static_images/medical_assist_plan.jpg') }}" class="w-100" alt="Medical Assist Plan (M.A.P)">
        </div>
        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-9">
            <h4 class="font-weight-bold">Medical Assist Plan (M.A.P)</h4>
            <p class="text-danger">R145.00</p>
            <p>
                EMERGENCY MEDICAL TRANSPORT – Ambulance, Road and Air, provided to assist with appropriate medical supervision to the nearest lifesaving support Hospital i.e. blood or stabilization of victim.
            </p>
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
                    <div class="number">
                        <span class="minus">-</span>
                        <input type="text" value="1"/>
                        <span class="plus">+</span>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6">
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
                    <strong>Doctor Network Benefits</strong>
                </p>
                <p>
                    • 2000 Independent doctor practices nationwide.<br>• 20% off Consultations.<br>• Should you wish to visit the doctor, not on the nationwide panel the doctor could be added.
                </p>
                <p>
                    <strong>Pharmacy Benefits</strong>
                </p>
                <p>
                    • 1200 Independent Pharmacies nationwide.<br>• 20% off blood pressure, glucose, and cholesterol tests.<br>• One free test (of the above), once per annum.<br>• Special offers change every 3 months, e.g. Buy 1 get 1 free.<br>• 20% Discounts on Clinic consultations in-pharmacy or at PCDT Clinics.
                </p>
                <p>
                    <strong>Trauma Counseling</strong>
                </p>
                <p>
                    • Confidential and Professional telephonic counselling Service.
                    <br>• Domestic Violence<br>• School Bullying<br>• Teen Suicide<br>• Pregnancy
                    <br>• Moto Accident<br>• Hijacking<br>• Burglary<br>• Loss of Loved one
                    <br>• Disability<br>• Victimisation<br>• Rape/Assult
                    <br>• Family Chronic or Life-Threatening Medical Condition etc.
                    <br>• Telephonic Debriefing and counselling for a person.
                    <br>• Face-to-Face Counselling is conducted by qualified counsellors and will determine the need for additional face-to-face counselling.
                </p>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
                <p>
                    <strong>Emergency Medical</strong>
                </p>
                <p>
                    • Emergency Medical Transportation<br>
                    • Nearest and most appropriate medical facility for emergency stabilization.<br>
                    • Transfer of life-saving oxygen and emergency blood in the event of a life-threatening medical situation.
                </p>
                <p>
                    Telephonic counselling in the event of crises, trauma accident or rape case, suicide, pregnancy, and domestic violence.
                </p>
                <p>
                    • Emergency and non-emergency Medical Advice, guidance, and information.<br>
                    • Escorted return of Minors and Compassionate visits via public and private transport.<br>
                    • Repatriation of the patient’s home provided initial transportation was facilitated by the helpline.
                </p>
                <p>
                    <strong>Panic Assist</strong>
                </p>
                <p>
                    • The panic assist is activated via dedicated UUSD or the panic button on the cell phone application.<br>
                    • A call back is made immediately, provided that the client’s cell phone is active on the database.<br>
                    • Should location services not be activated on the client’s phone, the coordinates will not be recorded in the panic trigger.<br>
                    • Panic Alert – sent to contacts listed on the client’s app.<br>
                    • The panic service operates across all SA.<br>
                    • Provides accurate location information.
                </p>
                <p>
                    <strong>Medical Database</strong>
                </p>
                <p>
                    • The Database ensures that the most relevant information is given to the emergency personnel.<br>
                    • The database stores client’s medical information in high security encrypted medical database.<br>
                    • Any Highlighted information will be alerted.
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

        </div>

    </div>
</div>
@endsection