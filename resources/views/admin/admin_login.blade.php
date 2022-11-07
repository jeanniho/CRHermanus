<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <title>Admin</title>
</head>
<body style="background: #C5E1A5;">
    <section class="vh-100 gradient-custom">
        <div class="container py-2 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card bg-light text-black" style="border-radius: 1rem;">
                        <div class="card-body p-3 text-center">
                            <div class="mb-md-2 mt-md-2 pb-2">
                                <form action="{{ route('admin') }}" method="post">
                                    @csrf
                                    <h2 class="fw-bold mb-2 text-uppercase">Login</h2>
                                    <p class="text-black-50 mb-3">Please enter your login and password!</p>

                                    @if (\Session::has('status'))
                                        <div class="alert alert-danger">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            <p>{!! \Session::get('status') !!}</p>
                                        </div>
                                    @endif

                                    <div class="form-outline form-white mb-2">
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="email">Email</label>
                                    </div>

                                    <div class="form-outline form-white mb-3">
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                                        <label class="form-label" for="password">Password</label>
                                    </div>

                                    @error('status')
                                        <div style="color:red;font-size:12px;">
                                            {{ $message }}
                                        </div>
                                    @enderror

                                    <input type="submit" value="Login" class="btn btn-outline-dark btn-lg px-5">

                                    
                                    <div class="row mt-4">
                                        <div class="col">
                                            <input type="checkbox" name="remember" id="remember">
                                            <label for="remember">Remember me</label>
                                        </div>
                                        <div class="col">
                                            <p class="small mb-3 pb-lg-2">
                                                <a class="text-black" href="{{ route('forget.password.get') }}">
                                                    Forgot password?
                                                </a>
                                            </p>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
</body>
</html>