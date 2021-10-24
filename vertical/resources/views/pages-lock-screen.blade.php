@extends('layouts.master-without-nav')

@section('body')
    <body class="authentication-bg authentication-bg-pattern">
@endsection

@section('content')

        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6 col-xl-5">
                        <div class="card">

                            <div class="card-body p-4">

                                <div class="text-center mb-4">
                                    <a href="index">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="22"></span>
                                    </a>
                                </div>

                                <div class="text-center w-75 m-auto">
                                    <img src="assets/images/users/user-1.jpg" width="88" alt="user-image" class="rounded-circle img-thumbnail">
                                    <h4 class="text-dark-50 text-center mt-3">Hi ! Marcia </h4>
                                    <p class="text-muted mb-4">Enter your password to access the admin.</p>
                                </div>

                                <h5 class="auth-title">Lock Screen</h5>

                                <form action="/">

                                    <div class="form-group mb-3">
                                        <label for="password">Password</label>
                                        <input class="form-control" type="password" required="" id="password" placeholder="Enter your password">
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-danger btn-block" type="submit"> Log In </button>
                                    </div>

                                </form>

                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <p class="text-muted">Not you? return <a href="pages-login" class="text-muted ml-1"><b class="font-weight-semibold">Sign In</b></a></p>
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt">
            {{date('Y')}} &copy; Xeria theme by <a href="" class="text-muted">Coderthemes</a> 
        </footer>
@endsection