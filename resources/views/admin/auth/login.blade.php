<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from ventic.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 04:03:50 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Ventic : Ticketing Admin Template" />
    <meta property="og:title" content="Ventic : Ticketing Admin Template" />
    <meta property="og:description" content="Ventic : Ticketing Admin Template" />
    <meta property="og:image" content=""/>
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>Ventic : Ticketing Admin Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="{{asset("assets/images/favicon.png")}}" />
    <link href="{{asset("assets/css/style.css")}}" rel="stylesheet">

</head>

<body class="vh-100">
<div class="authincation h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100 align-items-center">
            <div class="col-md-6">
                <div class="authincation-content">
                    <div class="row no-gutters">
                        <div class="col-xl-12">
                            <div class="auth-form">
                                <h4 class="text-center mb-4">Sign in your account</h4>
                                <form action="{{route('login')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" class="form-control @error('username') is invalid @enderror" placeholder="admin" name="username" required >
                                        @error('username')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control @error('password') is invalid @enderror" placeholder="Password" name="password" required>
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{$message}}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="row d-flex justify-content-between mt-4 mb-2">
                                        <div class="mb-3">
                                            <div class="form-check custom-checkbox ms-1">
                                                <input type="checkbox" class="form-check-input" id="basic_checkbox_1">
                                                <label class="form-check-label" for="basic_checkbox_1">Remember my preference</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                                    </div>
                                    <br>
                                    @if(session()->has('error'))
                                        <div class="ml-3 mr-3 w-100  alert alert-danger">
                                            {{session()->get('error')}}
                                        </div>
                                    @endif
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="{{asset("assets/vendor/global/global.min.js")}}"></script>
<script src="{{asset("assets/js/custom.min.js")}}"></script>
<script src="{{asset("assets/js/deznav-init.js")}}"></script>
<script src="{{asset("assets/js/styleSwitcher.js")}}"></script>
</body>

<!-- Mirrored from ventic.dexignzone.com/xhtml/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 17 May 2021 04:03:50 GMT -->
</html>
