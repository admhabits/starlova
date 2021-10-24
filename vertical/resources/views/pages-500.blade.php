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
                            
                                <div class="text-center">
                                    <a href="index">
                                        <span><img src="assets/images/logo-dark.png" alt="" height="18"></span>
                                    </a>
                                </div>

                                <div class="text-center mt-4">
                                    <h1 class="text-error">500</h1>
                                    <h3 class="mt-3 mb-2">Internal Server Error</h3>
                                    <p class="text-muted mb-3">Why not try refreshing your page? or you can contact <a href="" class="text-dark"><b>Support</b></a></p>

                                    <a href="index" class="btn btn-danger waves-effect waves-light"><i class="mdi mdi-reply mr-1"></i> Back to Home</a>
                                </div>

                            </div> <!-- end card-body -->        
                        </div>
                        <!-- end card -->

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