<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('static_images/icon.png') }}" type="image/gif" sizes="16x16"> 
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
      integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      crossorigin="anonymous"
    />
    <title>Contact Us - Credit Rescue Hermanus</title>

    <link rel="stylesheet" href="{{ asset('css/contact_us.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>
<body>
  <!-- navigation bar -->
  @include('shared.navbar')

    <!--Main Layout-->
    <main class="contact_us_header d-none d-lg-block">
      <img src="{{ asset('static_images/contact_us_bg_image.jpg') }}" alt="" class="img-fluid">
      <div class="centered_text_over_image">
        <h1 class="text-white font-weight-bold font-size-xxlarge">Whenever you need</h1>
          <h2 class="text-danger font-weight-bold font-size-xxlarge">we are here for you</h2>
          <p class="text-white font-size-large">
              We all know how life can be challenging and hard with debt. And there is an answer to all the debt issues you may face. We are here to help you.
          </p>
      </div>
    </main>
    <!--Main Layout-->

    <div class="container mt-5 mb-5">
      <div class="row mt-2 mb-2">
        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 bg-danger pt-3">
          <div class="text-center">        		      		
            <span class="sub-text text-white">
              Let's Talk
            </span>
            <h2 class="text-white">
              Speak With Expert Agents
            </h2>
          </div>
          <div>
            <p>
              <i class="fa fa-paper-plane-o text-blue bg-white"></i>
              <strong class="text-white"><b>Email:</b><br></strong>
              <p class="text-white">hermanus.julian@credit-rescue.co.za</p>
            </p>
            <p>
              <i class="fa fa-phone text-blue bg-white"></i>
              <strong class="text-white">Phone:<br></strong>
              <p class="text-white">+27 (0)79 207 1408</p>
            </p>
            <p>
              <i class="fa fa-map-marker text-blue bg-white"></i>
              <strong class="text-white">Address:<br></strong>
              <a href="https://goo.gl/maps/JZN6cnzDKRHRmyp8A" class="text-white">
                358 Dolphin Cl, Hawston, 7202
              </a>
            </p>
          </div>
        </div>

        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-8 bg-light">
          <h2 class="mb-3">
              <span class="bt_bb_headline_content"><span>
                Get in <strong class="text-danger">touch</strong><br>
              </span></span>
          </h2>
          <p>
            Our methodology differentiates us from other debt management companies and ensures clients receive unsurpassed service at all stages of the debt restructuring process.
          </p>
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
                  <input type="hidden" class="form-control" id="contact_us_from" name="contact_us_from" value="contact_us" required>
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

    </div>

    <!--Google map-->
    <div class="mt-2">
      <div id="map-container-google-3" class="z-depth-1-half map-container-3">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13170.522939561537!2d19.116637985816872!3d-34.385310988260564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1dce7589ca56164b%3A0xfac6786329c20f1c!2s358%20Dolphin%20Cl%2C%20Hawston%2C%207202!5e0!3m2!1sen!2sza!4v1643792973438!5m2!1sen!2sza" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
    </div>

    <!-- Footer -->
    @include('shared.footer')

    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
    
</body>
</html>