<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>@yield("title")</title>

    <link rel="stylesheet" href="{{ asset('css/admin/admin_index.css') }}">
</head>
<body>
    <!-- Navigation bar -->
    @include('admin.admin_navbar')

    <div class="container">
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('error') !!}</p>
            </div>
        @endif
        @if (\Session::has('status'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('status') !!}</p>
            </div>
        @endif
        @if (\Session::has('success'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('success') !!}</p>
            </div>
        @endif
        @if($user)
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">
                        <b>My user Information</b>
                    </h5>

                    <h6 class="card-subtitle mb-3 text-muted">
                        <b>Created on </b>: {{ date('d M y, h:i a', strtotime($user->created_at)) }} <br>
                        <b>Last updated on </b>: {{ date('d M y, h:i a', strtotime($user->updated_at)) }}
                    </h6>

                    <p class="card-text">
                        <b>First name</b>: {{ $user->name }} <br>
                        <b>last name</b>: {{ $user->surname }} <br>
                        <b>Email address</b>: {{ $user->email }}
                    </p>

                    <div class="row mt-2">
                        <div class="col mt-1">
                            <!-- Button to Open the Modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                Edit account
                            </button>
                        </div>

                        <div class="col mt-1">
                            <form action="{{ route('admin_my_user_profile') }}" method="POST">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="user_manipulation_type" 
                                    name="user_manipulation_type" 
                                    value="delete" required>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="user_id" 
                                    name="user_id" 
                                    value="{{ $user->id }}" required>
                                </div>

                                <button class="card-link btn btn-danger btn-round" type="submit">
                                    Delete account
                                </button>
                            </form>
                        </div>
                    </div>

                    
                </div>

                <!-- The Modal -->
                <div class="modal" id="myModal">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                            <h4 class="modal-title">Editable Information</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>

                        <!-- Modal body -->
                        <div class="modal-body">
                            <form action="{{ route('admin_my_user_profile') }}" method="post">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="user_manipulation_type" 
                                    name="user_manipulation_type" 
                                    value="edit" required>
                                </div>

                                <div class="form-group">
                                    <input type="hidden" class="form-control" id="user_id" 
                                    name="user_id" 
                                    value="{{ $user->id }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="first_name">First Name *</label>
                                    <input type="text" class="form-control" id="first_name" placeholder="Enter your first name" name="first_name" 
                                    value="{{ $user->name }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="last_name">Last Name *</label>
                                    <input type="text" class="form-control" id="last_name" placeholder="Enter your last name" name="last_name" 
                                    value="{{ $user->surname }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email *</label>
                                    <input type="email" class="form-control" id="email" placeholder="Enter your email address" name="email" 
                                    value="{{ $user->email }}" required>
                                </div>

                                <div class="form-group">
                                    <label for="current_password">Current Password *</label>
                                    <input type="password" class="form-control" id="current_password" placeholder="Enter your current password" name="current_password" required>
                                </div>

                                <div class="form-group">
                                    <label for="new_password">New Password</label>
                                    <input type="password" class="form-control" id="new_password" placeholder="Enter a new password" name="new_password">
                                </div>

                                <div class="form-group">
                                    <label for="confirm_new_password">Confirm New Password</label>
                                    <input type="password" class="form-control" id="confirm_new_password" placeholder="Confirm your new password" name="confirm_new_password">
                                </div>

                                <small>
                                    * The field can not be empty
                                </small>

                                <div class="text-center">
                                    <button type="submit" class="btn btn-success mb-10">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>

                        <!-- Modal footer -->
                        <div class="modal-footer text-center">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        @endif
    </div>

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