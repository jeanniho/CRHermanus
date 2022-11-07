<nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">

  <img src="{{ asset('static_images/logo.png') }}" alt="logo" class="navbar-brand w-50">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="/">
          Home <span class="sr-only">(current)</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="about_us" href="#">
        About Us <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark">
          <li><a href="{{route('about_us')}}">Company Info</a></li>
          <li><a href="{{route('faq')}}">Frequently Asked Questions</a></li>
          <li><a href="{{route('terms_and_conditions')}}">Terms and Conditions</a></li>
          <li><a href="{{route('customer_privacy_notice')}}">Customer Privacy Notice</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="services" href="#">
        Services <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
          <li><a href="{{route('debt_mediation')}}">Debt Mediation</a></li>
          <li><a href="{{route('debt_counselling')}}">Debt Counselling</a></li>
          <li><a href="{{route('debt_consolidation')}}">Debt Consolidation</a></li>
          <li><a href="{{route('debt_review_services')}}">Debt Review Services</a></li>
          <li><a href="{{route('debt_review_removal')}}">Debt Review Removal</a></li>
          <li><a href="{{route('garnishee_removals')}}">Garnishee Removals</a></li>
          <li><a href="{{route('administration_removals')}}">Administration Removals</a></li>
          <li><a href="{{route('our_products')}}">Lifestyle Products</a></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="about_us" href="#">
        Lifestyle Products <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark">
          <li><a href="{{route('our_products')}}">Our products</a></li>
          <li><a href="{{route('scheme_rules')}}">Scheme rules</a></li>
          <li><a href="{{route('cart')}}">cart</a></li>
          <li><a href="{{route('checkout')}}">Checkout</a></li>
        </ul>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="news" href="#">
          News
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="app_form" href="{{route('app_form')}}">
          App Form
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" id="contact" href="{{route('contact_us')}}">
          Contact
        </a>
      </li>
    </ul>

  </div>
</nav>

<!-- <header>
  <nav class="navbar navbar-expand-md sticky-top navbar-dark bg-dark">
    <div class="navbar-header">
      <img src="{{ asset('static_images/logo.png') }}" alt="logo" class="navbar-brand w-50">
    </div>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav  ml-auto">
        <li class="nav-item active">
          <a class="nav-link" id="home" href="/">
            Home <span class="sr-only">(current)</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="about_us" href="#">
          About Us <span class="caret"></span></a>
          <ul class="dropdown-menu bg-dark">
            <li><a href="{{route('about_us')}}">Company Info</a></li>
            <li><a href="{{route('faq')}}">Frequently Asked Questions</a></li>
            <li><a href="{{route('terms_and_conditions')}}">Terms and Conditions</a></li>
            <li><a href="{{route('customer_privacy_notice')}}">Customer Privacy Notice</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="services" href="#">
          Services <span class="caret"></span></a>
          <ul class="dropdown-menu bg-dark" aria-labelledby="dropdownMenuLink">
            <li><a href="{{route('debt_mediation')}}">Debt Mediation</a></li>
            <li><a href="{{route('debt_counselling')}}">Debt Counselling</a></li>
            <li><a href="{{route('debt_consolidation')}}">Debt Consolidation</a></li>
            <li><a href="{{route('debt_review_services')}}">Debt Review Services</a></li>
            <li><a href="{{route('debt_review_removal')}}">Debt Review Removal</a></li>
            <li><a href="{{route('garnishee_removals')}}">Garnishee Removals</a></li>
            <li><a href="{{route('administration_removals')}}">Administration Removals</a></li>
            <li><a href="{{route('our_products')}}">Lifestyle Products</a></li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="about_us" href="#">
          Lifestyle Products <span class="caret"></span></a>
          <ul class="dropdown-menu bg-dark">
            <li><a href="{{route('our_products')}}">Our products</a></li>
            <li><a href="{{route('scheme_rules')}}">Scheme rules</a></li>
            <li><a href="{{route('cart')}}">cart</a></li>
            <li><a href="{{route('checkout')}}">Checkout</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="news" href="#">
            News
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="app_form" href="{{route('app_form')}}">
            App Form
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="contact" href="{{route('contact_us')}}">
            Contact
          </a>
        </li>
      </ul>

    </div>
  </nav>
</header> -->