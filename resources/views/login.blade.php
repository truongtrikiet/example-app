<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>SB Admin 2 - Login</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset("vendor/fontawesome-free/css/all.min.css")}}" rel="stylesheet" type="text/css">
    <link
        href="{{asset("https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i")}}"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset("bootstrap-admin/css/sb-admin-2.min.css")}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
<!--                            bg-login-image-->
                            <div class="col-lg-6 d-none d-lg-block"><img src="{{asset("layout")}}"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    @if(Session::has('Invalid'))
                                        <div class="alert alert-danger" role="alert">
                                             {{Session::get('Invalid')}}
                                        </div>
                                    @endif
                                    <form class="user" action="{{url("account-check")}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Username..." name="usn">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" placeholder="Password" name="psw">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <a href="{{asset("register")}}" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Create an Account
                                        </a>
                                        <a href="{{asset("page1")}}" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Return to Shopping
                                        </a>
                                    </form>
                                    <hr>
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="{{asset("bootstrap-admin/forgot-password.html")}}">Forgot Password?</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="{{asset("register")}}">Create an Account!</a>--}}
{{--                                    </div>--}}
{{--                                    <div class="text-center">--}}
{{--                                        <a class="small" href="{{asset("page1")}}">Return to Shopping</a>--}}
{{--                                    </div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset("bootstrap-admin/vendor/jquery/jquery.min.js")}}"></script>
    <script src="{{asset("bootstrap-admin/vendor/bootstrap/js/bootstrap.bundle.min.js")}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset("bootstrap-admin/vendor/jquery-easing/jquery.easing.min.js")}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset("bootstrap-admin/js/sb-admin-2.min.js")}}"></script>

</body>

</html>
