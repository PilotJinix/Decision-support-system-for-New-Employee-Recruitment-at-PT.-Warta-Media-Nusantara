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
                                <h4 class="text-center mb-4">Sign up your account</h4>
                                <form action="{{route('create-register')}}" method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Username</strong></label>
                                        <input type="text" class="form-control" placeholder="username" name="username">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Nama Lengkap</strong></label>
                                        <input type="text" class="form-control" placeholder="Nama Lengkap" name="nama">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Nomer Induk Mahasiswa</strong></label>
                                        <input type="text" class="form-control" placeholder="Nomer Induk Mahasiswa" name="nim">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Email</strong></label>
                                        <input type="email" class="form-control" placeholder="hello@example.com" name="email">
                                    </div>
                                    <div class="mb-3">
                                        <label class="mb-1"><strong>Password</strong></label>
                                        <input type="password" class="form-control" placeholder="Password" name="password">
                                    </div>
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary btn-block">Sign me up</button>
                                    </div>
                                </form>
                                <div class="new-account mt-3">
                                    <p>Already have an account? <a class="text-primary" href="{{route("index")}}">Sign in</a></p>
                                </div>
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
