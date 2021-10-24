@extends('layouts.master')

@section('css')
        <!-- Plugin css -->
        <link href="{{ URL::asset('assets/libs/britecharts/britecharts.min.css')}}" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Charts</a></li>
                                            <li class="breadcrumb-item active">Brite Charts</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Brite Charts</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title mb-4">Bar Chart</h4>
                                        <div class="bar-container" style="width: 100%;height: 300px;"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title mb-4">Horizontal Bar Chart</h4>
                                        <div class="bar-container-horizontal" style="width: 100%;height: 300px;"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->
    
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title">Brush Chart</h4>
                                        <p>Darg on a graph and check the console to see selected data</p>
                                        <div class="brush-container" style="width: 100%;"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title">Step Chart</h4>
                                        <p>&nbsp;</p>
                                        <div class="step-container" style="width: 100%;"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->
    
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title mb-3">Line Chart</h4>
                                        <div class="line-container" style="width: 100%;"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
    
                            <div class="col-xl-6">
                                <div class="card">
                                    <div class="card-body" dir="ltr">
                                        <h4 class="header-title mb-4">Donut Chart</h4>
                                        <div class="donut-container text-center" style="width: 100%;"></div>
                                        <div class="legend-chart-container text-center"></div>
                                    </div>
                                    <!-- end card body-->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col-->
                        </div>
                        <!-- end row-->    
                        
                    </div> <!-- container -->
@endsection

@section('script')

        <!-- third party:js -->
        <script src="{{ URL::asset('assets/libs/d3/d3.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/britecharts/britecharts.min.js')}}"></script>

        <!-- Init js -->
        <script src="{{ URL::asset('assets/js/pages/britechart.init.js')}}"></script>
@endsection