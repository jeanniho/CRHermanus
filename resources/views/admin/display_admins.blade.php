@extends("admin.admin_users")

@section("title")
    Admin users
@endsection

@section("content")
<div class="container">
    @if(!empty($users) && count($users) > 0)
        <div class="jumbotron p-3">
            <form action="{{route('admin_search')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="search_option">Search by</label>
                    <div>
                        <small>
                            *If no option is chosen the option name displayed below will be used
                        </small>
                    </div>
                    <select class="form-control form-control-sm" id="search_option" name="search_option" required>
                        <option value="first_name" selected>First name</option>
                        <option value="last_name">Last name</option>
                        <option value="email_address">Email address</option>
                    </select>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-outline form-white mb-2">
                            <input type="text" id="search_text" name="search_text" class="form-control form-control-lg" required/>
                        </div>
                    </div>
                    <div class="col">
                        <input type="submit" value="Search" class="btn btn-outline-dark btn-lg px-5">
                    </div>
                </div>
            </form>
        </div>
        @if (\Session::has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('message') !!}</p>
            </div>
        @endif
        @if (\Session::has('error'))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <p>{!! \Session::get('error') !!}</p>
            </div>
        @endif
        @foreach($users as $user)
            <div class="card mt-1">
                <div class="card-body">
                    <h5 class="card-title">
                        <b>User Information</b>
                    </h5>

                    <h6 class="card-subtitle mb-3 text-muted">
                        <b>Created on </b>: {{ date('d M y, h:i a', strtotime($user->created_at)) }}
                    </h6>

                    <p class="card-text">
                        <b>First name</b>: {{ $user->name }} <br>
                        <b>last name</b>: {{ $user->surname }} <br>
                        <b>Email address</b>: {{ $user->email }}
                    </p>

                    <div>
                        <form action="{{ route('admin_users_manipulation') }}" method="POST">
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
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="jumbotron">
            <h3 class="font-weight-600 text-center">
                No other admins found in this category
            </h3>
        </div>
    @endif
   </div>
</div>
@endsection