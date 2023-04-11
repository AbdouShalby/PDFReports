@php $title = 'all-sick-leaves-fahd'; $pdf_css = 'sick-leave-fahd.css' @endphp
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-sick-leaves') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
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
                        <div class="text-center my-3 btn-holder">
                            <button class="btn btn-primary" onclick="window.print()">Print</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
    <!-- footer -->
    @include('layouts.footer')
    <!-- End footer -->
</div>
<!-- End Page wrapper  -->
@endsection
