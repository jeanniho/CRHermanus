@extends("about_us.about_us")

@section("title")
    Company information
@endsection

@section("content")
<div class="container mt-5">
    <div>
        <h3 class="text-center font-weight-bold">
            <span class="text-danger">Our approach</span>
        </h3>
        <h4 class="text-center font-weight-bold">Debt Restructure</h4>
        <p class="text-center">
            Many consumers are now seeking negotiable terms for debt repayments. <br>
            Reduced monthly instalments are what we help our customer attain.
        </p>
    </div>

    <div class="row mt-5 mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <img src="{{ asset('static_images/about_us_management_program.jpg') }}" alt="" class="img-fluid">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h4 class="text-center font-weight-bold">
                <span class="text-danger">Rigid Debt</span>
            </h4>
            <h5 class="text-center font-weight-bold">Management Program</h5>
            <p>
                Our experience has indicated that distressed clients use our facilities for 
                approximately 1 year and once rehabilitated, are in a position to negotiate with 
                their creditors in their personal capacity.
            </p>
            <ul>
                <li>
                    <p>
                        The restructuring and payment of total Debt
                    </p>
                </li>
                <li>
                    <p>
                        One convenient payment from Client towards total Debt amount
                    </p>
                </li>
                <li>
                    <p>
                        Signed Power of Attorney
                    </p>
                </li>
                <li>
                    <p>
                        Stop Order deduction direct with the client
                    </p>
                </li>
                <li>
                    <p>
                        Regular Debt facilitation and training by our team of Debt and Legal practitioner
                    </p>
                </li>
            </ul>
        </div>
    </div>

    <div class="row mb-5">
        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <h4 class="text-center font-weight-bold">
                <span class="text-danger">Our</span> Mission</h4>
            <p>
                Our missions are set to strive for the best and produce higher quality work.
            </p>
            <ul>
                <li>
                    <p>
                        Credit Rescue wishes to be the preferred service provider for Debt Rehabilitation solutions.
                    </p>
                </li>
                <li>
                    <p>
                        Our plan is to extend our services to the entire population of South Africa.
                    </p>
                </li>
                <li>
                    <p>
                        We wish to extend our helping hand in times of financial stress to our clients.
                    </p>
                </li>
                <li>
                    <p>
                        Our client's financial wellness is of utmost importance.
                    </p>
                </li>
            </ul>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-6 col-xl-6">
            <img src="{{ asset('static_images/about_us_our_mission.jpg') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection