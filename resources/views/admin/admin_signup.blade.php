<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign up</title>

        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <!------ Include the above in your HEAD tag ---------->

        <link rel="stylesheet" href="{{ asset('css/admin/signup.css') }}">
    </head>
    <body>
        <!-- Navigation bar -->
        @include('admin.admin_navbar')

        <form action="{{ route('admin_sign_up') }}" method="post" class="form">
            @csrf
            @if (\Session::has('status'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <p>{!! \Session::get('status') !!}</p>
                </div>
            @endif
            <h3 class="font-weight-bolder">ADD ADMIN</h3>
            <label class="label">
                <p class="label-txt">ADMIN FIRST NAME</p>
                <input type="text" class="input" name="first_name">
                <div class="line-box">
                    <div class="line"></div>
                </div>
                @error('first_name')
                    <div style="color:red;font-size:12px;">
                        {{ $message }}
                    </div>
                @enderror
            </label>

            <label class="label">
                <p class="label-txt">ADMIN lAST NAME</p>
                <input type="text" class="input" name="last_name">
                <div class="line-box">
                    <div class="line"></div>
                </div>
                @error('last_name')
                    <div style="color:red;font-size:12px;">
                        {{ $message }}
                    </div>
                @enderror
            </label>

            <label class="label">
                <p class="label-txt">ADMIN EMAIL ADDRESS</p>
                <input type="text" class="input" name="email">
                <div class="line-box">
                    <div class="line"></div>
                </div>
                @error('email')
                    <div style="color:red;font-size:12px;">
                        {{ $message }}
                    </div>
                @enderror
            </label>
            
            <label class="label">
                <p class="label-txt">ADMIN TEMPORARY PASSWORD</p>
                <input type="password" class="input" name="password">
                <div class="line-box">
                    <div class="line"></div>
                </div>
                @error('password')
                    <div style="color:red;font-size:12px;">
                        {{ $message }}
                    </div>
                @enderror
            </label>

            <button type="submit" class="button">
                ADD ADMIN
            </button>
        </form>
    </body>
</html>