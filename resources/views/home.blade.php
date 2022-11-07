@extends("index")

@section("title")
    Home
@endsection

@section("header_title")
    Leading you to financial freedom!
@endsection
@section("header_description")
    We can help you meet your financial commitments and remain creditworthy. 
    We have assisted 150 000 consumers who are over-indebted for nearly 15 years. 
    with credit-Rescue, your journey with us is confidential and non-obligatory. 
    Our products include Debt Mediation, Debt Review, Debt Review Removal, 
    Administration Removal, Garnishee Removal.
@endsection

@section("home_page_buttons")
<div class="row mt-2">
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <a href="{{route('appointment_booking')}}" class="btn btn-danger">
            Book a Callback Appointment
        </a>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
        <a href="{{route('about_us')}}" class="btn btn-danger">
            About us
        </a>
    </div>
</div>
@endsection

@section("content")
<div class="container">
    <!-- who are we -->
    <div class="card home_description">
        <div class="card-body">
            <h4 class="card-title text-center font-weight-bold">Who We Are & Our Debt Solutions</h4>
            <p class="card-text">
            Credit Rescue is one of South Africa's favourite debt solution companies. 
            We've helped more than 15, 000 people become debt-free since 1996. 
            If you've been living with bad debt hanging over your head, it's time to talk to Credit Rescue. 
            Credit Rescue will be there to take care of you every step of the way.
            Credit Rescue has been in business providing debt solutions for more than 14 years running.
            </p>
        </div>
    </div>
    <!-- motos -->
    <div class="row">
        <div class="col">
            <h4 class="font-weight-bold text-muted"><i class="fa fa-thumbs-up home_description_fa" style="font-size:48px;color:red"></i> &ensp; Integrity</h4>
            <p>We always act with integrity through honesty, fairness and accountability.</p>
        </div>
        <div class="col">
            <h4 class="font-weight-bold text-muted"><i class="fa fa-eye home_description_fa" style="font-size:48px;color:red"></i> &ensp; Client Focus </h4>
            <p>As trusted advisors, everything we do is valued by our clients</p>
        </div>
        <div class="col">
            <h4 class="font-weight-bold text-muted"><i class="fa fa-creative-commons home_description_fa" style="font-size:48px;color:red"></i> &ensp; Innovation</h4>
            <p>We create leading-edge solutions – have a look at our services page</p>
        </div>
        <div class="col">
            <h4 class="font-weight-bold text-muted"><i class="fa fa-users home_description_fa" style="font-size:48px;color:red"></i> &ensp; Community </h4>
            <p>We are active in the communities we serve to generate economic, social and environmental value.</p>
        </div>
    </div>
    <!-- services offered -->
    <div class="card-columns">
        <div class="card">
            <img class="card-img-top" src="{{ asset('static_images/mediation.jpg') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Debt Mediation </h4>
                <h6 class="card-subtitle mb-2 text-muted">RESTRUCTURE PROGRAM</h6>
                <p class="card-text">
                    An alternative to Debt Review is a voluntary payment arrangement to pay your accounts
                </p>
                <a href="{{route('debt_mediation')}}" class="btn btn-info">Read more</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{ asset('static_images/debt_review_removal.jpg') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Debt Review Removal</h4>
                <h6 class="card-subtitle mb-2 text-muted">FORMAL RESTRUCTURE PROCESS</h6>
                <p class="card-text">
                    A process whereby a debt counsellor assists a client with their outstanding debt.
                </p>
                <a href="{{route('debt_review_removal')}}" class="btn btn-info">Read more</a>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top" src="{{ asset('static_images/garnishee.jpg') }}" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">Garnishee Removals</h4>
                <h6 class="card-subtitle mb-2 text-muted">EMOLUMENT ATTACHMENT ORDER</h6>
                <p class="card-text">
                    We provide a service to remove these deductions as well as recouping monies paid.
                </p>
                <a href="{{route('garnishee_removals')}}" class="btn btn-info">Read more</a>
            </div>
        </div>
        
    </div>

    <!-- Book appointment -->
    <div class="row">
        <div class="col-sm-12 col-md-6">
            <div class="jumbotron jumbotron-fluid">
                <div class="container">
                    <h3>Debt Solutions</h3>
                    <h4>With Debt Restructure</h4>
                    <a href="{{route('appointment_booking')}}" type="button" class="btn btn-danger mt-5">
                        Book A Callback Appointment
                    </a>
                </div>
            </div>
        </div>

        <!-- contact us form -->
        <div class="col-sm-12 col-md-6 bg-light">
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>{!! \Session::get('success') !!}</p>
                </div>
            @endif
            <form action="{{ route('contact_us') }}" method="POST">
                {{ csrf_field() }}
                <h4 class="text-center font-weight-bold text-danger">Contact Form</h4>
                <div class="form-group">
                  <label for="service_interested_in">Select a service you are interested in</label>
                    <select class="form-control" id="service_interested_in" name="service_interested_in[]" multiple>
                      <option value='Debt Mediation'>Debt Mediation</option>
                      <option value='Debt Consolidation'>Debt Consolidation</option>
                      <option value='Debt Review'>Debt Review</option>
                      <option value='Debt Review Removal'>Debt Review Removal</option>
                      <option value='Garnishee Removal'>Garnishee Removal</option>
                      <option value='Administration Removal'>Administration Removal</option>
                    </select>
                    <small id="services_help" class="form-text text-muted">
                      Hold ctrl or shift (or drag with the mouse) to select more than one
                    </small>
                </div>
                <div class="form-group">
                    <input type="hidden" class="form-control" id="contact_us_from" name="contact_us_from" value="home" required>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="full_name" placeholder="Your full name *" name="full_name" required>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="Your email address *" name="email" required>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" id="phone_number" placeholder="Your phone number *" name="phone_number" required>
                </div>
                <div class="form-group">
                    <textarea class="form-control" 
                    placeholder="Additional Information" 
                    rows="3" id="additional_information" name="additional_information"></textarea>
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
                <div class="text-center mb-3">
                    <button type="submit" class="btn btn-danger mb-10">
                        Submit Form
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- Working hours and location -->
    <div class="row mt-2">
        <div class="col-sm-12 col-md-6 bg-light">
            <p></p>
            <h4 class="text-center font-weight-bold">Credit Rescue Hours</h4>
            <p></p>
            <p></p>
            <p>Monday &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; 8:30AM - 5PM</p>
            <hr>
            <p>Tuesday &emsp; &emsp; &emsp; &emsp; &emsp; &nbsp; 8:30AM - 5PM</p>
            <hr>
            <p>Wednesday &emsp; &emsp; &emsp; &emsp; 8:30AM - 5PM</p>
            <hr>
            <p>Thursday &emsp; &emsp; &emsp; &emsp; &ensp; 8:30AM - 5PM</p>
            <hr>
            <p>Friday &emsp; &emsp; &emsp; &emsp; &emsp; &ensp; 8:30AM - 4PM</p>
            <hr>
            <p>Saturday &emsp; &emsp; &emsp; &emsp; &ensp; 9AM - 12AM</p>
            <hr>
            <p>Sunday &emsp; &emsp; &emsp; &emsp; &emsp; Closed</p>
        </div>
        <div class="col-sm-12 col-md-6">
            <div id="map-container-google-2" class="z-depth-1-half map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13170.522939561537!2d19.116637985816872!3d-34.385310988260564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dce7589ca56164b%3A0xfac6786329c20f1c!2s358%20Dolphin%20Cl%2C%20Hawston%2C%207202!5e0!3m2!1sen!2sza!4v1643792973438!5m2!1sen!2sza" 
                style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>

</div>
@endsection