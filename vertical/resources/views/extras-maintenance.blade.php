@extends('layouts.master-without-nav')

@section('body')
    <body class="authentication-bg">
@endsection

@section('content')
        <div class="mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">

                        <div class="text-center">
                            <img src="assets/images/maintenance.svg" width="200" alt="error-image"/>
                            <h3 class="mt-4">We are currently performing maintenance</h3>
                            <p class="text-muted">We're making the system more awesome. We'll be back shortly.</p>

                            <div class="row mt-5">
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-anchor font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">Why is the Site Down?</h5>
                                        <p class="text-muted">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.</p>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-clock font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">What is the Downtime?</h5>
                                        <p class="text-muted">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical but the majority.</p>
                                    </div>
                                </div> <!-- end col-->
                                <div class="col-md-4">
                                    <div class="text-center mt-3 pl-1 pr-1">
                                        <div class="avatar-md rounded-circle bg-soft-info mx-auto">
                                            <i class="fe-help-circle font-22 avatar-title text-info"></i>
                                        </div>
                                        <h5 class="text-uppercase mt-3">Do you need Support?</h5>
                                        <p class="text-muted">If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embar.. <a href="mailto:#" class="text-muted font-weight-bold">no-reply@domain.com</a></p>
                                    </div>
                                </div> <!-- end col-->
                            </div> <!-- end row-->
                        </div> <!-- end /.text-center-->

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