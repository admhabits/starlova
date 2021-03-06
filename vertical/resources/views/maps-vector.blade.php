@extends('layouts.master')

@section('css')
        <!-- plugin css -->
        <link href="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Maps</a></li>
                                            <li class="breadcrumb-item active">Vector Maps</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Vector Maps</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">World Vector Map</h4>
                                        <div id="world-map-markers" style="height: 420px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">USA Vector Map</h4>
                                        <div id="usa-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">India Vector Map</h4>
                                        <div id="india-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Australia Vector Map</h4>
                                        <div id="australia-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Chicago Vector Map</h4>
                                        <div id="chicago-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">UK Vector Map</h4>
                                        <div id="uk-vectormap" style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                            
                            <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-3">Canada Vector Map</h4>
                                        <div id="canada-vectormap"  style="height: 350px"></div>
                                    </div> <!-- end card-body-->
                                </div> <!-- end card-->
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->
@endsection

@section('script')
        <!-- Plugins js-->
        <script src="{{ URL::asset('assets/libs/jquery-vectormap/jquery-vectormap.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/vector-maps.init.js')}}"></script>
@endsection