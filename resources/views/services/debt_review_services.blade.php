@extends("services.services")

@section("title")
    Debt Review Services
@endsection

@section("content")
<div class="container">
    <h1 class="text-center mt-3">
        <span class="bt_bb_headline_content"><span>
            <strong class="text-danger">Debt Review</strong> Services<br>
        </span></span>
    </h1>
    <!-- Debt mediation process and contact form -->
    <div class="row">
        <!-- Debt mediation process -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <img src="{{ asset('static_images/debt_review_process.png') }}" alt="" class="img-fluid">
            <p class="mt-3">
                By utilising our services you would be accessing that particular right as a consumer in distress. It is the responsibility of all Credit Providers who adhere to Section 86 (5)(a) of the act to act in good faith in the Debt Review Process. All negotiations should be designed to result in a responsible debt re-arrangement plan for their client.
            </p>
            <p>
                A simple process aimed at transitioning you out of debt that is straightforward and effortless, we assist our clients in developing a repayment plan that is affordable and easy to maintain for the remaining repayment period without additional financial strain.
            </p>
            <p>
                The plan is intended to relieve the struggle of debt immediately, as we negotiate reduced interest rates of 100% from your Credit Providers, thereby lowering your overall repayment amount.
            </p>
            <ul>
                <li>
                    We protect your assets from repossession by credit providers.
                </li>
                <li>
                    We consolidate all your debt and you pay a lot less every month.
                </li>
            </ul>
        </div>
        <!-- contact form -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <h2 class="mb-3">
                <span class="bt_bb_headline_content"><span>
                    <strong class="text-danger">Debt Review Services</strong> Contact Form<br>
                </span></span>
            </h2>
            <div class="bt_bb_text">
                <p>Why wait? Take the chance to complete the form below. In easy steps, we offer you a debt solution that allows you to consolidate your debt into a single payment. This means that instead of paying multiple credit providers, you only have one payment to maintain.</p>
                <p><b>Get a no-obligation debt assessment today</b></p>
            </div>

            <div class="col bg-light">
                @if (\Session::has('success'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <p>{!! \Session::get('success') !!}</p>
                    </div>
                @endif
                <form action="{{ route('debt_review_services') }}" method="POST">
                    {{ csrf_field() }}
                    <h4 class="text-center font-weight-bold text-danger">Contact Form</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="service_type" placeholder="Your full name *" name="service_type" value="debt_review_services" required>
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

            <p>
                The formal process to protect your assets from creditors that have a debt claim against you. The National Credit Act prescribes how you as a consumer can seek relief in the case of over-indebtedness.
            </p>
            <ul>
                <li>
                    Free no-obligation debt assessments by our experienced consultants.
                </li>
                <li>
                    We can help you even if you are over-indebted, blacklisted or have a bad credit record.
                </li>
                <li>
                    You determine what you can afford & retain sufficient funds for your living expenses.
                </li>
                <li>
                    We'll also reduce all your current interest rates!
                </li>
            </ul>
        </div>
    </div>

</div>
@endsection