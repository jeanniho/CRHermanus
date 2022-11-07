@extends("services.services")

@section("title")
    Garnishee Removals
@endsection

@section("content")
<div class="container">
    <h1 class="text-center mt-3">
        <span class="bt_bb_headline_content"><span>
            <strong class="text-danger">Garnishee </strong> Removals<br>
        </span></span>
    </h1>
    <!-- Debt review removal process and contact form -->
    <div class="row">
        <!-- Debt review removal process -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <img src="{{ asset('static_images/garnishee.jpg') }}" alt="" class="img-fluid">
            <p class="mt-3">
                In three easy steps we offer you a debt solution that allows you to consolidate your debt into a single payment. This means that instead of paying multiple credit providers, you only have one payment to maintain. This payment forms part of a tailored debt management plan that is designed to help you by freeing up cash which instantly betters your quality of life. All you have to do is take the first step.
            </p>
            <p>
                Why wait? Take the chance to complete the form below. In easy steps, we offer you a debt solution that allows you to have that Garnishee flag removed.
            </p>
            <ul>
                <li>Provide instant debt relief</li>
                <li>Combine all your debts into one</li>
                <li>Offer legal protection for your assets</li>
                <li>Give you access to highly experienced debt consultants</li>
                <li>Reduce your monthly instalments and interest rates</li>
            </ul>
        </div>
        <!-- contact form -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <h2 class="mb-3">
                <span class="bt_bb_headline_content"><span>
                    <strong class="text-danger">Garnishee Removals</strong> Contact Form<br>
                </span></span>
            </h2>
            <div class="bt_bb_text">
                <p><b>Get a no-obligation debt assessment today</b></p>
            </div>

            <div class="col bg-light">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{!! \Session::get('success') !!}</p>
                    </div>
                @endif
                <form action="{{ route('garnishee_removals') }}" method="POST">
                    {{ csrf_field() }}
                    <h4 class="text-center font-weight-bold text-danger">Contact Form</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="service_type" placeholder="Your full name *" name="service_type" value="garnishee_removals" required>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="name" placeholder="Your full name *" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" id="email" placeholder="Your email address *" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" id="phone_number" placeholder="Your phone number *" name="phone_number" required>
                    </div>
                    <div class="form-row">
                        <div class="col">
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="new_client">
                                    New Client, interest in our services
                                </label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group form-check">
                                <label class="form-check-label">
                                    <input class="form-check-input" type="checkbox" name="existing_client">
                                    Existing Client that has a query
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secondary mb-10">
                            APPLY NOW (CTA BUTTON)
                        </button>
                    </div>
                </form>
                <p></p>
                <p></p>
            </div>
        </div>
    </div>

</div>
@endsection