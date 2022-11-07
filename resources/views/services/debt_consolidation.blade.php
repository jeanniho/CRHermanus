@extends("services.services")

@section("title")
    Debt Consolidation
@endsection

@section("content")
<div class="container">
    <h1 class="text-center mt-3">
        <span class="bt_bb_headline_content"><span>
            <strong class="text-danger">Debt</strong> Consolidation<br>
        </span></span>
    </h1>
    <!-- Debt mediation process -->
    <div class="mt-5">
        <h3 class="text-center font-weight-bold">
            Debt Consolidation Process
        </h3>
    </div>
    <div class="row mb-5">
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Complete Application</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Step 1</h6>
                    <p class="card-text">
                        Complete our sign up an application form.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Accounts Management</h4>
                    <h6 class="card-subtitle mb-2 text-muted">step 2</h6>
                    <p class="card-text">
                        We taking over of all debt. We handle repayments on your behalf.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Single Consolidated Account</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Step 3</h6>
                    <p class="card-text">
                        One single payment from Client for distribution to all.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Power of Attorney</h4>
                    <h6 class="card-subtitle mb-2 text-muted">step 4</h6>
                    <p class="card-text">
                        A signed Power of Attorney is sent to you. Signifying you are under the program.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Stop direct Order deduction</h4>
                    <h6 class="card-subtitle mb-2 text-muted">Step 5</h6>
                    <p class="card-text">
                        Stop direct Order deduction with the client and his place of employment.
                    </p>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-4 col-xl-4 mt-2">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Regular Debt counselling</h4>
                    <h6 class="card-subtitle mb-2 text-muted">step 6</h6>
                    <p class="card-text">
                        Regular Debt counselling by our experienced team of Debt and Legal practitioners.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form -->
    <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <img src="{{ asset('static_images/mediation.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-2">
            <h2 class="mb-3">
                <span class="bt_bb_headline_content"><span>
                    <strong class="text-danger">Debt Consolidation</strong> Contact Form<br>
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
                <form action="{{ route('debt_consolidation') }}" method="POST">
                    {{ csrf_field() }}
                    <h4 class="text-center font-weight-bold text-danger">Contact Form</h4>
                    <div class="form-group">
                        <input type="hidden" class="form-control" id="service_type" placeholder="Your full name *" name="service_type" value="debt_consolidation" required>
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
    <!-- CTA description -->
    <div class="mt-3 mb-5">
        <p>
            In three easy steps, we offer you a debt solution that allows you to consolidate your debt into a single payment. This means that instead of paying multiple credit providers, you only have one payment to maintain. This payment forms part of a tailored debt management plan that is designed to help you by freeing up cash which instantly betters your quality of life. All you have to do is take the first step.
        </p>
        <ul>
            <li>
                Get instant debt relief
            </li>
            <li>
                Combine all your debts into one
            </li>
            <li>
                Get legal protection for your assets
            </li>
            <li>
                Access to highly experienced debt consultants
            </li>
            <li>
                Reduce your monthly instalments and interest rates
            </li>
        </ul>
        <p>
            The act (NCA 34 of 2005) provides a legislated remedy for over-indebted consumers (viz Debt Review). An alternative to Debt Review is a voluntary payment arrangement to pay their accounts.
        </p>
        <p>
            The effectiveness of Debt Mediation is when it is managed on a controlled basis. It is the responsibility of all Credit Providers who adhere to Section 86 (5)(a) of the act to act in good faith in the Debt Review Process all negotiations should be designed to result in a responsible debt re-arrangement plan for their client.
        </p>
        <p>
            The current management of Credit Rescue has been involved with Debt Re-Restructuring for over 14 years, 11 years with Bill Tolken Hendrickse & Ass (t/a Power Rescue) and the past 3 years using Debt Counselors viz, S. Olkers, A Carstens and R. Sedick. Credit Rescue has consistently built up a reservoir of practical and theoretical knowledge of the (Debt Management) industry.
        </p>
    </div>

</div>
@endsection