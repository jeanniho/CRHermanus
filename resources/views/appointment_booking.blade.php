@extends("index")

@section("title")
    Appointment Booking
@endsection

@section("header_title")
    Book a callback Appointment with us
@endsection
@section("header_description")
    You may need more information, want to request extra explanation, 
    have a question regarding a product - fill in the information below and we will reach out.
@endsection

@section("content")
<div class="container mt-2 mb-5">
    <h3 class="text-center font-weight-bold">Appointment Booking</h3>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{!! \Session::get('success') !!}</p>
        </div>
    @endif
    <div class="row mt-3">
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="jumbotron jumbotron-fluid">
                <div class="form-group pl-5 pr-5">
                    <label for="service_interested_in">Choose service/s</label>
                    <select class="form-control" id="service_interested_in" name="service_interested_in[]" multiple>
                      <option value='Debt Mediation'>Debt Mediation</option>
                      <option value='Debt Consolidation'>Debt Consolidation</option>
                      <option value='Debt Review'>Debt Review</option>
                      <option value='Debt Review Removal'>Debt Review Removal</option>
                      <option value='Garnishee Removal'>Garnishee Removal</option>
                      <option value='Administration Removal'>Administration Removal</option>
                    </select>
                    <small id="services_help" class="form-text text-muted">
                        * Hold ctrl or shift (or drag with the mouse) to select more than one
                    </small>
                </div>
                
                <div class="form-group pl-5 pr-5">
                    <label for="appointment_date">Choose a date:</label>
                    <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
                    <small id="services_help" class="form-text text-muted">
                        * Excluding weekends
                    </small>
                </div>
            </div>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 bg-light">
            <h4 class="text-center font-weight-bold font-size-larger text-danger">Personal Information</h4>
            <div class="form-group">
                <input type="text" class="form-control" id="appointment_name" 
                placeholder="Your full name *" name="appointment_name" required>
            </div>
            <div class="form-group">
                <input type="email" class="form-control" id="appointment_email" 
                placeholder="Your email address *" name="appointment_email" required>
            </div>
            <div class="form-group">
                <input type="tel" class="form-control" id="appointment_phone_number" 
                placeholder="Your phone number *" name="appointment_phone_number" required>
            </div>
            <div class="form-group">
                <textarea class="form-control" 
                placeholder="Appointment Description" 
                rows="3" id="appointment_description"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-danger" id="appointment_submit_button">
                    Submit Form
                </button>
            </div>
        </div>
    </div>
</div>
@endsection