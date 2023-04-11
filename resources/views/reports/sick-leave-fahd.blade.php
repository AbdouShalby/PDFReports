<!DOCTYPE html><!--[if IE]>  <html class="ie"> <![endif]-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('css/lib/chartist/chartist.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/lib/owl.carousel.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/lib/owl.theme.default.min.css') }}" rel="stylesheet" />
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sick-leave-fahd.css') }}" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <body>
        <div class="container">
            @if(isset($report))
            <div class="row my-3">
                <div class="stl_02">
                    <div class="stl_03">
                        <object data="{{ asset('images/sick-leave-fahd/img_49.svg') }}" type="image/svg+xml" class="stl_04" style="position:absolute; width:49.5833em; height:70.1667em;">
                            <embed src="{{ asset('images/sick-leave-fahd/img_49.svg') }}" type="image/svg+xml" />
                        </object>
                    </div>
                    <div class="stl_view">
                        <div class="stl_05 stl_06">
                            <div class="stl_01" style="left:20.5605em;top: 4.8877em; "><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0033em;">Kingdom of Saudi Arabia &nbsp;</span></div>
                            <div class="stl_01" style="left:18.9516em;top: 16.3482em; "><span class="stl_10 stl_08 stl_11" style="word-spacing:0.0065em;">Sick Leave Report &nbsp;</span></div>
                            <div class="stl_01" style="left:4.8894em;top: 21.5327em; "><span class="stl_12 stl_08 stl_13" style="word-spacing:0.0014em;">Leave ID &nbsp;</span></div>
                            <div class="stl_01" style="left:3.8864em;top: 24.0401em; "><span class="stl_14 stl_08 stl_15" style="word-spacing:0.0001em;">Leave Duration &nbsp;</span></div>
                            <div class="stl_01" style="left:4.576em;top: 26.5474em; "><span class="stl_12 stl_08 stl_16" style="word-spacing:-0.0024em;">Issue Date &nbsp;</span></div>
                            <div class="stl_01" style="left:21.8142em;top: 21.5327em; "><span class="stl_17 stl_08 stl_18">{{ $report->leave_id }}</span></div>
                            <div class="stl_01" style="left:11.4504em;top: 24.0401em; "><span class="stl_14 stl_08 stl_19" style="word-spacing:0.0001em;">{{ $report->leave_duration }} day ( {{ $report->leave_start }} to {{ $report->leave_end }} ) &nbsp;</span></div>
                            <div class="stl_01" style="left:26.3484em;top: 24.0401em; "><span class="stl_14 stl_08 stl_19" style="word-spacing:0.038em;">( {{ $hijri_end }} &nbsp;</span></div>
                            <div class="stl_01" style="left:22.6709em;top: 26.5474em; "><span class="stl_17 stl_08 stl_19">{{ $report->issue_date }}</span></div>
                            <div class="stl_01" style="left:31.8644em;top: 24.0401em; "><span class="stl_14 stl_08 stl_19" style="word-spacing:-0.033em;">{{ $hijri_start }} ) &nbsp;</span></div>
                            <div class="stl_01" style="left:37.9656em;top: 24.0401em; "><span class="stl_14 stl_08 stl_19">{{ $report->leave_duration }}</span></div>
                            <div class="stl_01" style="left:30.9858em;top: 29.0em; "><span class="stl_20 stl_08 stl_19" style="font-family: 'Cairo', sans-serif;">{{ $report->name_ar }} &nbsp;</span></div>
                            <div class="stl_01" style="left:5.2446em;top: 29.0548em; "><span class="stl_12 stl_08 stl_21">Name &nbsp;</span></div>
                            <div class="stl_01" style="left:11.3634em;top: 29.1715em; "><span class="stl_22 stl_08 stl_19" style="word-spacing:0em;">{{ $report->name_en }}</span><span class="stl_22 stl_08 stl_19" style="word-spacing:0.219em;"></span></div>
                            <div class="stl_01" style="left:3.4058em;top: 31.604em; "><span class="stl_12 stl_08 stl_23" style="word-spacing:0.0079em;">National ID/Iqama &nbsp;</span></div>
                            <div class="stl_01" style="left:4.5133em;top: 34.1113em; "><span class="stl_12 stl_08 stl_24">Nationality &nbsp;</span></div>
                            <div class="stl_01" style="left:4.7223em;top: 36.6188em; "><span class="stl_12 stl_08 stl_25">Employer &nbsp;</span></div>
                            <div class="stl_01" style="left:23.0065em;top: 31.604em; "><span class="stl_17 stl_08 stl_19">{{ $report->national_id }}</span></div>
                            <div class="stl_01" style="left:42.22em;top: 31.604em; "><span class="stl_12 stl_08 stl_19">/</span></div>
                            <div class="stl_01" style="left:32.065em;top: 34.1113em; "><span class="stl_17 stl_08 stl_09" style="word-spacing:0.0056em; font-family: 'Cairo', sans-serif;">{{ $report->nationality_ar }}</span></div>
                            <div class="stl_01" style="left:31.565em;top: 36.5em; "><span class="stl_17 stl_08 stl_09" style="word-spacing:0.0056em; font-family: 'Cairo', sans-serif;">{{ $report->employer }}</span></div>
                            <div class="stl_01" style="left:15.0652em;top: 34.1113em; "><span class="stl_17 stl_08 stl_09" style="word-spacing:0.0056em;">{{ $report->nationality_en }}</span></div>
                            <div class="stl_01" style="left:13.0385em;top: 39.1932em; "><span class="stl_22 stl_08 stl_19">{{ $report->physician_name_en }}</span></div>
                            <div class="stl_01" style="left:13.0385em;top: 41.693em; "><span class="stl_22 stl_08 stl_19">{{ $report->position_en }}</span></div>
                            <div class="stl_01" style="left:13.0385em;top: 44.193em; "><span class="stl_22 stl_08 stl_19">{{ $report->diagnosis_en }}</span></div>
                            <div class="stl_01" style="left:3.782em;top: 39.1261em; "><span class="stl_12 stl_08 stl_26" style="word-spacing:0.0022em;">Physician Name &nbsp;</span></div>
                            <div class="stl_01" style="left:4.9312em;top: 41.6752em; "><span class="stl_12 stl_08 stl_27">Position &nbsp;</span></div>
                            <div class="stl_01" style="left:4.9312em;top: 44.175em; "><span class="stl_12 stl_08 stl_27">Diagnosis &nbsp;</span></div>
                            <div class="stl_01" style="left:31.163em;top: 39.235em; "><span class="stl_22 stl_08 stl_28" style="word-spacing:0.0009em; font-family: 'Cairo', sans-serif;">{{ $report->physician_name_ar }}</span></div>
                            <div class="stl_01" style="left:31.163em;top: 41.735em; "><span class="stl_22 stl_08 stl_28" style="word-spacing:0.0009em; font-family: 'Cairo', sans-serif;">{{ $report->position_ar }}</span></div>
                            <div class="stl_01" style="left:31.163em;top: 44.135em; "><span class="stl_22 stl_08 stl_28" style="word-spacing:0.0009em; font-family: 'Cairo', sans-serif;">{{ $report->diagnosis_ar }}</span></div>
                            <div class="stl_01" style="left:4.4507em;top: 56.7702em; "><span class="stl_29 stl_08 stl_30" style="word-spacing:-0.0007em;">Scan the QR code to electronically check the report &nbsp;</span></div>
                            <div class="stl_01" style="left:4.178em;top: 57.8149em; "><span class="stl_29 stl_08 stl_31" style="word-spacing:-0.0007em;">Make sure the information in this report matches the &nbsp;</span></div>
                            <div class="stl_01" style="left:6.4537em;top: 58.8596em; "><span class="stl_29 stl_08 stl_27" style="word-spacing:0.0022em;">.ones in the National ID or Iqama &nbsp;</span></div>
                            <div class="stl_01" style="left:36.6704em;top: 58.6127em; "><span class="stl_32 stl_08 stl_33" style="visibility:hidden; word-spacing:0.0003em;">Almurslat clinic &nbsp;</span></div>
                        </div>
                    </div>
                </div>
            </div>
            @else
            <div class="container-fluid">
                <div class="row" style="padding-top: 20%">
                    <div class="col-8 m-auto" style="box-shadow: 0 5px 20px 0 rgba(0,0,0,0.15); border-radius: 5px; padding: 20px">
                        <div class="alert alert-danger">
                            {{ __('check.sorry') }}
                        </div>
                        <div>
                            <a href="{{ route('check-sick-leave') }}" class="btn btn-info">Back</a>
                        </div>
                    </div>
                </div>
                <!-- End PAge Content -->
            </div>
            @endif
        </div>
    </body>

    <!-- All Jquery -->
    <script src="{{ asset('js/lib/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('js/lib/bootstrap/js/popper.min.js') }}"></script>
    <script src="{{ asset('js/lib/bootstrap/js/bootstrap.min.js') }}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('js/jquery.slimscroll.js') }}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('js/sidebarmenu.js') }}"></script>
    <!--stickey kit -->
    <script src="{{ asset('js/lib/sticky-kit-master/dist/sticky-kit.min.js') }}"></script>


    <script src="{{ asset('js/lib/datamap/d3.min.js') }}"></script>
    <script src="{{ asset('js/lib/datamap/topojson.js') }}"></script>
    <script src="{{ asset('js/lib/datamap/datamaps.world.min.js') }}"></script>
    <script src="{{ asset('js/lib/datamap/datamap-init.js') }}"></script>

    <script src="{{ asset('js/lib/weather/jquery.simpleWeather.min.js') }}"></script>
    <script src="{{ asset('js/lib/weather/weather-init.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/lib/owl-carousel/owl.carousel-init.js') }}"></script>


    <script src="{{ asset('js/lib/chartist/chartist.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartist/chartist-plugin-tooltip.min.js') }}"></script>
    <script src="{{ asset('js/lib/chartist/chartist-init.js') }}"></script>
</html>
