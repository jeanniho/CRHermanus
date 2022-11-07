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

    <title>App Form - Confidential and Non-Obligitory Debt Solutions</title>

    <link rel="stylesheet" href="{{ asset('css/app_form.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    
</head>
<body>
  <!-- navigation bar -->
  @include('shared.navbar')

  <!--Main Layout-->
  <main class="contact_us_header d-none d-lg-block">
    <img src="{{ asset('static_images/app_form_header.png') }}" alt="" class="img-fluid">
    <div class="centered_text_over_image">
      <h1 class="text-white font-weight-bold font-size-xxlarge">Whenever you need</h1>
        <h2 class="text-danger font-weight-bold font-size-xxlarge">we are here for you</h2>
        <p class="text-white font-size-large">
            We all know how life can be challenging and hard with debt. And there is an answer to all the debt issues you may face. We are here to help you.
        </p>
    </div>
  </main>
  <!-- END of Main Layout-->

    <div class="jumbotron">
      @if (\Session::has('success'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{!! \Session::get('success') !!}</p>
        </div>
      @endif
      @if (\Session::has('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <p>{!! \Session::get('error') !!}</p>
        </div>
      @endif
      <form id="regForm" action="{{ route('contact_us') }}" method="POST">
        {{ csrf_field() }}
        <!-- 1 Consultant Code -->
        <div class="tab">
            <h3 class="mb-2">1 Consultant Code</h3>
            <div class="form-group">
              <label for="consultant_name">Consultant Name</label>
              <input type="text" class="form-control" placeholder="Consultant Name" 
              id="consultant_name" name="consultant_name">
            </div>
            <div class="form-group">
                <label for="consultant_code">Consultant Code</label>
                <input type="text" class="form-control" placeholder="Consultant Code" 
                id="consultant_code" name="consultant_code">
            </div>
            <div class="form-group">
                <label for="consultant_office">Consultant Office</label>
                <input type="text" class="form-control" placeholder="Consultant Office" 
                id="consultant_office" name="consultant_office">
            </div>
            <div class="form-group">
                <label for="services">Choose a service *</label>
                <select class="form-control" id="services" name="services[]" multiple >
                  <option value='Debt Mediation Application'>Debt Mediation Application</option>
                  <option value='Debt Review Application'>Debt Review Application</option>
                  <option value='Garnishee Removal'>Garnishee Removal</option>
                  <option value='Debt Review Removal'>Debt Review Removal</option>
                  <option value='Administration Removal'>Administration Removal</option>
                  <option value='Family Care Plan Option 1'>Family Care Plan Option 1</option>
                  <option value='Family Care Plan Option 2'>Family Care Plan Option 2</option>
                  <option value='Medical Assist Plan'>Medical Assist Plan</option>
                </select>
                <small id="services_help" class="form-text text-muted">
                  Hold ctrl or shift (or drag with the mouse) to select more than one
                </small>
            </div>

        </div>

        <!-- 2 Personal Details -->
        <div class="tab">
            <h3 class="mb-2">2 Personal Details</h3>
            <div class="form-group">
                <label for="title">Title *</label>
                <select class="form-control form-control-sm" id="title" name="title" required>
                  <option value='Select a ttitle'>Select a ttitle</option>
                  <option value='Mr.'>Mr.</option>
                  <option value='Mrs.'>Mrs.</option>
                  <option value='Miss.'>Miss.</option>
                  <option value='Dr.'>Dr.</option>
                </select>
            </div>
            
            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="identity_number">Identity Number *</label>
                  <input type="tel" class="form-control" placeholder="13 Digit ID Number" 
                  id="identity_number" pattern="[0-9]{13}" name="identity_number" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="id_document">ID Document</label>
                  <input type="file" class="form-control-file" id="id_document" name="id_document">
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="firstname">First name *</label>
                  <input type="text" class="form-control" id="firstname" 
                  placeholder="Enter first name" name="firstname" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="lastname">Last name *</label>
                  <input type="text" class="form-control" id="lastname" 
                  placeholder="Enter last name" name="lastname" required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="phone_number_home">Phone number (H) *</label>
                  <input type="text" class="form-control" id="phone_number_home" 
                  placeholder="Home phone number" name="phone_number_home" 
                  required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="cell_phone">Cell Number *</label>
                  <input type="tel" class="form-control" id="cell_phone" 
                  placeholder="Cellphone number" name="cell_phone" required>
                </div>
            </div>

            <div class="form-group">
              <label for="email">Email *</label>
              <input type="email" class="form-control" id="email" 
              placeholder="Enter email address" name="email" required>
            </div>

            <!-- <div class="form-group">
              <label for="post_address">Postal Address *</label>
              <input type="text" class="form-control" id="post_address" 
              placeholder="Postal Address" name="post_address" required>
            </div> -->

            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="street_address">Postal Address *</label>
                  <input type="text" class="form-control" id="street_address" 
                  placeholder="Street Address" name="street_address" 
                  required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="state_province_region">State / Province / Region</label>
                  <input type="text" class="form-control" id="state_province_region" 
                  placeholder="State / Province / Region" name="state_province_region" 
                  required>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="city">City</label>
                  <input type="text" class="form-control" id="city" 
                  placeholder="City name" name="city" required>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="zip_postal_code">ZIP / Postal Code</label>
                  <input type="tel" class="form-control" id="zip_postal_code" 
                  placeholder="ZIP / Postal Code" name="zip_postal_code" pattern="[0-9]{4}" 
                  required>
                </div>
            </div>

            <div class="form-group">
              <label for="proof_of_address">Proof of Address</label>
              <input type="file" class="form-control-file" id="proof_of_address" 
              name="proof_of_address" required>
            </div>

            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                  <label for="marital_status">Marital Status *</label>
                  <select class="form-control form-control-sm" id="marital_status" name="marital_status" required>
                    <option value='Single' selected>Single</option>
                    <option value='Married'>Married</option>
                    <option value='Divorced'>Divorced</option>
                    <option value='Widowed'>Widowed</option>
                  </select>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                  <label for="dependents">Dependents *</label>
                  <input type="number" id="dependents" placeholder="Please enter a number greater than or equal to 0" 
                  name="dependents" step="1" required>
                </div>
            </div>
        </div>

        <!-- 3 Employment Details -->
        <div class="tab">
          <h3 class="mb-2">3 Employment Details</h3>

          <div class="form-group">
            <label for="employment_company_name">Company Name</label>
            <input type="text" class="form-control" placeholder="Company Name" 
            id="employment_company_name" name="employment_company_name">
          </div>
          
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="employer_street_address">Employer Address*</label>
              <input type="text" class="form-control" id="employer_street_address" 
              placeholder="Street Address" name="employer_street_address">
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label for="employer_state_province_region">State / Province / Region</label>
              <input type="text" class="form-control" id="employer_state_province_region" 
              placeholder="State / Province / Region" name="employer_state_province_region">
            </div>
          </div>

          <div class="row">
              <div class="form-group col-sm-12 col-md-6">
                <label for="employer_city">City</label>
                <input type="text" class="form-control" id="employer_city" 
                placeholder="City name" name="employer_city">
              </div>
              <div class="form-group col-sm-12 col-md-6">
                <label for="employer_zip_postal_code">ZIP / Postal Code</label>
                <input type="tel" class="form-control" id="employer_zip_postal_code" 
                placeholder="ZIP / Postal Code" name="employer_zip_postal_code" pattern="[0-9]{4}">
              </div>
          </div>

          <div class="form-group">
            <label for="employment_occupation">Occupation</label>
            <input type="text" class="form-control" placeholder="Occupation title" 
            id="employment_occupation" name="employment_occupation">
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="employer_tel_number">Employer Tel Number</label>
              <input type="tel" class="form-control" id="employer_tel_number" 
              placeholder="Employer Telephone Number" name="employer_tel_number" 
              pattern="([0-9]{4})- [0-9]{3}-[0-9]{4}">
            </div>
            <div class="form-group col-sm-12 col-md-6">
              <label for="employment_employee_number">Employee Number</label>
              <input type="number" id="employment_employee_number" 
              placeholder="Please enter a number greater than or equal to 0" 
              name="employment_employee_number" step="1" min="0">
            </div>
          </div>

        </div>

        <!-- 4 Home Owner? -->
        <div class="tab">
          <h3 class="mb-2">4 Home Owner?</h3>

          <h5>Home Owner*</h5>

          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" 
              name="home_owner_yes">Yes
            </label>
          </div>

          <div class="form-check-inline">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" 
              name="home_owner_no">No
            </label>
          </div>

          <!-- if yes -->
          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="home_owner_market_value">Market Value *</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="home_owner_market_value" name="home_owner_market_value">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="home_owner_bond_balance">Bond Balance*</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="home_owner_bond_balance" name="home_owner_bond_balance">
            </div>
          </div>



          <div class="form-group">
            <label for="home_owner_institution">Institution</label>
            <input type="text" class="form-control" placeholder="Institution" 
            id="home_owner_institution" name="home_owner_institution">
          </div>
          
        </div>

        <!-- 5 Income (As Per Payslip) -->
        <div class="tab">
          <h3 class="mb-2">5 Income (As Per Payslip)</h3>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="income_gross_salary">Gross Salary</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="income_gross_salary" name="income_gross_salary">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="income_deductions">Deductions</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="income_deductions" name="income_deductions">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="income_net_income">Net Income</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="income_net_income" name="income_net_income">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="income_payslip">Payslip</label>
              <input type="file" class="form-control-file" id="income_payslip" name="income_payslip">
            </div>
          </div>

        </div>

        <!-- 6 Expenses -->
        <div class="tab">
          <h3 class="mb-2">6 Expenses</h3>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_rent_bond">Rent/Bond</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="expenses_rent_bond" name="expenses_rent_bond">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_rates">Rates</label>
              <input type="number" class="form-control" placeholder="Please enter a number greater than or equal to 0." 
              id="expenses_rates" name="expenses_rates">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_groceries">Groceries</label>
              <input type="text" class="form-control" 
              id="expenses_groceries" name="expenses_groceries">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_electricity">Electricity</label>
              <input type="text" class="form-control" 
              id="expenses_electricity" name="expenses_electricity">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_water">Water</label>
              <input type="text" class="form-control" 
              id="expenses_water" name="expenses_water">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_telephone">Telephone</label>
              <input type="text" class="form-control" 
              id="expenses_telephone" name="expenses_telephone">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_transport">Transport</label>
              <input type="text" class="form-control" 
              id="expenses_transport" name="expenses_transport">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_medical_aid_insurance">Medical Aid / Insurance</label>
              <input type="text" class="form-control" 
              id="expenses_medical_aid_insurance" name="expenses_medical_aid_insurance">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_clothing">Clothing</label>
              <input type="text" class="form-control" 
              id="expenses_clothing" name="expenses_clothing">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_school_fees">School Fees</label>
              <input type="text" class="form-control" 
              id="expenses_school_fees" name="expenses_school_fees">
            </div>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_maintenance">Maintenance</label>
              <input type="text" class="form-control" 
              id="expenses_maintenance" name="expenses_maintenance">
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="expenses_other">Other</label>
              <input type="text" class="form-control" 
              id="expenses_other" name="expenses_other">
            </div>
          </div>

        </div>

        <!-- 7 Credit Providers -->
        <div class="tab">
          <h3 class="mb-2">7 Credit Providers</h3>

          <h5>Proposal for payment arrangement to all credit providers</h5>

          <div class="row">
            <div class="form-group col-sm-6 col-md-3">
              <label for="credit_provider_creditor">Creditor</label>
              <input type="text" class="form-control" 
              id="credit_provider_creditor" name="credit_provider_creditor">
            </div>

            <div class="form-group col-sm-6 col-md-3">
              <label for="credit_provider_reference_number">Reference Number</label>
              <input type="text" class="form-control" 
              id="credit_provider_reference_number" name="credit_provider_reference_number">
            </div>

            <div class="form-group col-sm-6 col-md-3">
              <label for="credit_provider_outstanding_balance">Outstanding Balance</label>
              <input type="text" class="form-control" 
              id="credit_provider_outstanding_balance" name="credit_provider_outstanding_balance">
            </div>

            <div class="form-group col-sm-6 col-md-3">
              <label for="credit_provider_list_current_installment">Current installment</label>
              <input type="text" class="form-control" 
              id="credit_provider_current_installment" name="credit_provider_current_installment">
            </div>
          </div>

          <div class="form-group">
            <label for="credit_provider_creditor_statements">Creditor Statements</label>
            <input type="file" class="form-control-file" id="credit_provider_creditor_statements" 
            name="credit_provider_creditor_statements" multiple>
          </div>

          <div class="row">
            <div class="form-group col-sm-12 col-md-6">
              <label for="credit_provider_current_instalment">Current Instalment *</label>
              <input type="number" class="form-control" 
              placeholder="Please enter a number greater than or equal to 0." 
              id="credit_provider_current_instalment" name="credit_provider_current_instalment" 
              step="1" min="0" required>
            </div>

            <div class="form-group col-sm-12 col-md-6">
              <label for="credit_provider_proposed_instalment">Proposed Instalment *</label>
              <input type="number" class="form-control" 
              placeholder="Please enter a number greater than or equal to 0." 
              id="credit_provider_proposed_instalment" name="credit_provider_proposed_instalment" 
              step="1" min="0" required>
            </div>
          </div>

        </div>

        <!-- 8 Decleration -->
        <div class="tab">
          <h3 class="mb-2">8 Decleration</h3>

          <h5>Declaration *</h5>

          <div class="form-check">
            <label class="form-check-label">
              <input type="checkbox" class="form-check-input" value="" 
              name="declaration" required>
              I confirm that the information given in this form is true, complete and accurate. 
            </label>
          </div>

        </div>

        <!-- Previous and Next buttons -->
        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" 
                onclick="nextPrev(-1)" class="btn btn-secondary">
                  Previous
                </button>
                <button type="button" id="nextBtn" 
                onclick="nextPrev(1)" class="btn btn-dark">
                  Next
                </button>

                <button type="submit" id="submit_button" class="btn btn-success">
                  Submit
                </button>
            </div>
        </div>

        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:10px;">
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
          <span class="step"></span>
        </div>
      </form>
    </div>

    <!-- Footer -->
    @include('shared.footer')

    <script>
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
        // This function will display the specified tab of the form ...
        var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            // ... and fix the Previous/Next buttons:
            if (n == 0) {
              document.getElementById("prevBtn").style.display = "none";
              document.getElementById("nextBtn").style.display = "inline";
              document.getElementById("submit_button").style.display = "none";
            } else {
              document.getElementById("prevBtn").style.display = "inline";
              document.getElementById("nextBtn").style.display = "inline";
              document.getElementById("submit_button").style.display = "none";
            }
            if (n == (x.length - 1)) {
              // document.getElementById("nextBtn").innerHTML = "Submit";
              // document.getElementById("nextBtn").classList.remove("btn-dark");
              // document.getElementById("nextBtn").classList.add("btn-success");

              document.getElementById("nextBtn").style.display = "none";
              document.getElementById("submit_button").style.display = "inline";
            } else {
              document.getElementById("nextBtn").innerHTML = "Next";
            }
            // ... and run a function that displays the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form... :
            // if (currentTab >= x.length) {
            //     //...the form gets submitted:
            //     document.getElementById("regForm").submit();
            //     return false;
            // }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            var x, y, i, valid = true;
            x = document.getElementsByClassName("tab");
            y = x[currentTab].getElementsByTagName("input");
            // A loop that checks every input field in the current tab:
            for (i = 0; i < y.length; i++) {
                // If a field is empty...
                if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false:
                valid = false;
                }
            }
            // If the valid status is true, mark the step as finished and valid:
            if (valid) {
                document.getElementsByClassName("step")[currentTab].className += " finish";
            }
            return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            // This function removes the "active" class of all steps...
            var i, x = document.getElementsByClassName("step");
            for (i = 0; i < x.length; i++) {
                x[i].className = x[i].className.replace(" active", "");
            }
            //... and adds the "active" class to the current step:
            x[n].className += " active";
        }
    </script>

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