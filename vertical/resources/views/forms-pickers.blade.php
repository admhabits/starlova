@extends('layouts.master')

@section('css')
        <!-- Plugins css-->
        <link href="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/libs/clockpicker/clockpicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ URL::asset('assets/libs/daterangepicker/daterangepicker.min.css')}}" rel="stylesheet" type="text/css" />
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
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                                            <li class="breadcrumb-item active">Form Pickers</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Form Pickers</h4>
                                </div>
                            </div>
                        </div>     
                        <!-- end page title --> 

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Colorpicker</h4>
                                    <p class="sub-header">Bootstrap Colorpicker is a modular color picker plugin for Bootstrap 4</p>

                                    <div class="form-group mb-3">
                                        <label>Default</label>
                                        <input type="text" id="basic-colorpicker" class="form-control" placeholder="Basic colorpicker">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Hexa Color</label>
                                        <input type="text" id="hexa-colorpicker" class="form-control" value="#4a81d4">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>As Component</label>
                                        <div id="component-colorpicker" class="input-group" title="Using format option">
                                            <input type="text" class="form-control input-lg" value="#305AA2"/>
                                            <span class="input-group-append">
                                                <span class="input-group-text colorpicker-input-addon"><i></i></span>
                                            </span>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Horizontal</label>
                                        <input type="text" id="horizontal-colorpicker" class="form-control" value="#8fff00">
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Inline</label>
                                        <div id="inline-colorpicker"></div>
                                    </div>

                                </div> <!-- end card-box-->

                                <div class="card-box">
                                    <h4 class="header-title">Date Range Picker</h4>
                                    <p class="sub-header">A JavaScript component for choosing date ranges, dates and times.</p>

                                    <div class="form-group mb-3">
                                        <label>Date Range</label>
                                        <input type="text" class="form-control date" id="singledaterange" data-toggle="date-picker" data-cancel-class="btn-warning">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Date Range Picker With Times</label>
                                        <input type="text" class="form-control date" id="daterangetime" data-toggle="date-picker" data-time-picker="true" data-locale="{'format': 'DD/MM hh:mm A'}">
                                    </div>

                                    <div class="form-group">
                                        <label>Single Date Picker</label>
                                        <input type="text" class="form-control date" id="birthdatepicker" data-toggle="date-picker" data-single-date-picker="true">
                                    </div>

                                    <div class="form-group">
                                        <label>Predefined Date Ranges</label>
                                        <div id="reportrange" class="form-control" data-toggle="date-picker-range" data-target-display="#selectedValue"  data-cancel-class="btn-light">
                                            <i class="mdi mdi-calendar"></i>&nbsp;
                                            <span id="selectedValue"></span> <i class="mdi mdi-menu-down"></i>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->
        
                            </div> <!-- end col-->

                            <div class="col-lg-6">
                                <div class="card-box">
                                    <h4 class="header-title">Clock Picker</h4>
                                    <p class="sub-header">A clock-style timepicker for Bootstrap.</p>

                                    <div class="form-group mb-3">
                                        <label>Default Clock Picker</label>
                                        <div class="input-group clockpicker">
                                            <input type="text" class="form-control" value="09:30">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Auto close</label>
                                        <div class="input-group clockpicker" data-placement="top" data-align="top" data-autoclose="true">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Now time</label>
                                        <div class="input-group m-b-20">
                                            <input class="form-control" id="single-input" type="text" value="" placeholder="Now">
                                            <div class="input-group-append">
                                                <button type="button" id="check-minutes" class="btn waves-effect waves-light btn-primary">Check the minutes</button>
                                            </div>
                                        </div>                
                                    </div>

                                    <div class="form-group mb-0">
                                        <label>Place at left, align the arrow to top </label>
                                        <div class="input-group clockpicker" data-placement="top" data-align="top">
                                            <input type="text" class="form-control" value="13:14">
                                            <div class="input-group-append">
                                                <span class="input-group-text"><i class="mdi mdi-clock-outline"></i></span>
                                            </div>
                                        </div>
                                    </div>

                                </div> <!-- end card-box-->

                                <div class="card-box">
                                    <h4 class="header-title">Bootstrap Datepicker</h4>
                                    <p class="sub-header">Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.</p>

                                    <div class="form-group mb-3">
                                        <label>Date Picker</label>
                                        <input type="text" class="form-control" data-provide="datepicker">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Date View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-format="d-M-yyyy">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Multi Datepicker</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-multidate="true">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Autoclose</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-autoclose="true">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Month View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-format="MM yyyy" data-date-min-view-mode="1">
                                    </div>

                                    <div class="form-group mb-3">
                                        <label>Year View</label>
                                        <input type="text" class="form-control" data-provide="datepicker" data-date-min-view-mode="2">
                                    </div>

                                    <div class="form-group">
                                        <label>Inline Datepicker</label>
                                        <div data-provide="datepicker-inline"></div>
                                    </div>

                                </div> <!-- end card-box-->
        
                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->
                        
                    </div> <!-- container -->
@endsection

@section('script')
        <!-- Plugins js-->
        <script src="{{ URL::asset('assets/libs/moment/moment.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-colorpicker/bootstrap-colorpicker.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/clockpicker/clockpicker.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ URL::asset('assets/libs/daterangepicker/daterangepicker.min.js')}}"></script>

        <!-- Init js-->
        <script src="{{ URL::asset('assets/js/pages/form-pickers.init.js')}}"></script>
@endsection