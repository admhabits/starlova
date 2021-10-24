@extends('layouts.master')
@section('content')

                    <!-- Start Content-->
                    <div class="container-fluid">
                        
                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Xeria</a></li>
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Pages</a></li>
                                            <li class="breadcrumb-item active">404</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Error 404</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row justify-content-center mt-4">
                            <div class="col-md-8 col-lg-6 col-xl-5">
                                <div class="error-ghost text-center">
                                    <img src="assets/images/error.svg" width="200" alt="error-image"/>
                                </div>

                                <div class="text-center">
                                    <h3 class="mt-4 text-uppercase font-weight-bold">Page not found </h3>
                                    <p class="text-muted mb-0 mt-3" style="line-height: 20px;">It's looking like you may have taken a wrong turn. Don't worry...
                                        it happens to the best of us. You might want to check your internet connection.
                                        Here's a little tip that might help you get back on track.</p>

                                    <a class="btn btn-info mt-3" href="index"><i class="mdi mdi-reply mr-1"></i> Return Home</a>
                                </div>      
        
                            </div> <!-- end col -->
                        </div>
                        <!-- end row -->
            
                        
                    </div> <!-- container -->
@endsection