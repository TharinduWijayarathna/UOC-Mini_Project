<!doctype html>
<html class="no-js " lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <title>Resturant App</title>
    <!-- Favicon-->
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body class="theme-blush">
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="authentication">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12">
                    <form class="card auth_form" method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="header">
                            <img class="logo" src="assets/images/logo.svg" alt="">
                            <h5>Log in</h5>
                        </div>
                        <div class="body">
                            <div class="input-group mb-3">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="zmdi zmdi-account-circle"></i></span>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="password" placeholder="Password">
                                <div class="input-group-append">
                                    <span class="input-group-text"><a href="forgot-password.html" class="forgot"
                                            title="Forgot Password"><i class="zmdi zmdi-lock"></i></a></span>
                                </div>
                            </div>
                            <div class="checkbox">
                                <input id="remember_me" name="remember" type="checkbox">
                                <label for="remember_me">Remember Me</label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block waves-effect waves-light">SIGN
                                IN</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-8 col-sm-12">
                    <div class="card">
                        <img src="assets/images/signin.svg" alt="Sign In" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery Core Js -->
    <script src="{{ asset('assets/bundles/libscripts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js -->
</body>


</html>
