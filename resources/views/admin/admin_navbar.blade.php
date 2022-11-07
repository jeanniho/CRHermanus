<nav class="navbar navbar-expand-md navbar-dark bg-dark">
  <img src="{{ asset('static_images/logo.png') }}" alt="logo" class="navbar-brand w-50">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  ml-auto">
      <li class="nav-item active">
        <a class="nav-link" id="home" href="{{ route('dashboard') }}">
          Dashboard <span class="sr-only">(current)</span>
        </a>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="orders" href="#">
        Orders <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark">
          <li class="nav-item">
            <a class="nav-link" id="open_orders" href="{{ route('open_orders') }}">
              Open Orders
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="complete_orders" href="{{ route('complete_orders') }}">
              Complete Orders
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="pending_orders" href="{{ route('pending_orders') }}">
              Pending Orders
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="cancelled_orders" href="{{ route('cancelled_orders') }}">
              Cancelled Orders
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" id="admins" href="#">
        Admins <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark">
          <li class="nav-item">
            <a class="nav-link" id="list_admins" href="{{ route('list_admins') }}">
              List admins
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" id="add_admin" href="{{ route('admin_sign_up') }}">
              Add admin
            </a>
          </li>
        </ul>
      </li>

      <li class="nav-item">
        <a class="nav-link" id="admin_my_user_profile" href="{{ route('admin_my_user_profile') }}">
          <!-- <i class="fa fa-user"></i> -->
          Profile
        </a>
      </li>

      <li>
        <form action="{{ route('admin_logout') }}" method="post">
          @csrf
          <button type="submit" class="btn btn-outline-danger">
            Logout
          </button>
        </form>
      </li>
    </ul>
  </div>
</nav>