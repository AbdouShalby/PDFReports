@php $title = 'all-sick-leaves'; $pdf_css = 'sick-leave.css' @endphp
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
                                <object data="{{ asset('images/sick-leave/img_07.svg') }}" type="image/svg+xml" class="stl_04" style="position:absolute; width:49.5833em; height:70.1667em;">
                                    <embed src="{{ asset('images/sick-leave/img_07.svg') }}" type="image/svg+xml" />
                                </object>
                            </div>
                            <div class="stl_view">
                                <div class="stl_05 stl_06">
                                    <div class="stl_01 stl_07" style="left:20.5605em;top: 4.9541em; "><span class="stl_08 stl_09 stl_10" style="word-spacing:0.0001em;">Kingdom of Saudi Arabia &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:18.7427em;top: 12.3054em; "><div dir="ltr" class="stl_11 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_11 stl_09 stl_13" style="display:inline;">ﻣﺮﺿﻴ</div><span class="stl_11 stl_09 stl_12" style="word-spacing:-0.001em;">&nbsp;</span><div dir="ltr" class="stl_11 stl_09 stl_12" style="display:inline;">إﺟﺎزة</div><span class="stl_11 stl_09 stl_12" style="word-spacing:-0.0011em;">&nbsp;</span><div dir="ltr" class="stl_11 stl_09 stl_14" style="display:inline;">ﺗﻘﺮﻳﺮ</div><span class="stl_11 stl_09 stl_14"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:18.9516em;top: 15.2724em; "><span class="stl_15 stl_09 stl_16" style="word-spacing:-0.0004em;">Sick Leave Report &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.8894em;top: 19.8996em; "><span class="stl_17 stl_09 stl_10" style="word-spacing:0.0001em;">Leave ID &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:3.8864em;top: 22.4069em; "><span class="stl_18 stl_09 stl_19" style="word-spacing:-0.0002em;">Leave Duration &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.576em;top: 24.9143em; "><span class="stl_17 stl_09 stl_16" style="word-spacing:-0.0005em;">Issue Date &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:21.8142em;top: 19.8996em; "><span class="stl_20 stl_09 stl_19">{{ $report->leave_id }} &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:41.4762em;top: 19.8996em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ة</div><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">اﻹﺟﺎز</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0011em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_19" style="display:inline;">رﻣﺰ</div><span class="stl_17 stl_09 stl_19"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:41.3717em;top: 22.4069em; "><div dir="ltr" class="stl_18 stl_09 stl_12" style="display:inline;">ة</div><div dir="ltr" class="stl_18 stl_09 stl_21" style="display:inline;">اﻹﺟﺎز</div><span class="stl_18 stl_09 stl_12" style="word-spacing:-0.0011em;">&nbsp;</span><div dir="ltr" class="stl_18 stl_09 stl_10" style="display:inline;">ﻣﺪة</div><span class="stl_18 stl_09 stl_10"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:11.4504em;top: 22.4069em; "><span class="stl_18 stl_09 stl_19" style="word-spacing:-0.0025em;">{{ $report->leave_duration }} day ( {{ $report->leave_start }} to {{ $report->leave_end }} ) &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:26.3484em;top: 22.4069em; "><span class="stl_18 stl_09 stl_22" style="word-spacing:0.0404em;">( {{ $hijri_end }}</span><span class="stl_18 stl_09 stl_12" style="word-spacing:0em;">&nbsp;</span><div dir="ltr" class="stl_18 stl_09 stl_23" style="display:inline; word-spacing:0.0018em;">اﻟﻰ</div><span class="stl_18 stl_09 stl_12" style="word-spacing:-0.0032em;">&nbsp;</span><span class="stl_18 stl_09 stl_22" style="word-spacing:0.0045em;">{{ $hijri_start }} )</span><span class="stl_18 stl_09 stl_12" style="word-spacing:0.3888em;">&nbsp;</span><div dir="ltr" class="stl_18 stl_09 stl_10" style="display:inline; word-spacing:0.0009em;">ﻳﻮم</div><span class="stl_18 stl_09 stl_12" style="word-spacing:0.4489em;">&nbsp;</span><span class="stl_18 stl_09 stl_10" style="word-spacing:0.0009em;">{{ $report->leave_duration }} &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:22.6709em;top: 24.9143em; "><span class="stl_20 stl_09 stl_19">{{ date('d-m-Y', strtotime($report->issue_date)) }} &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:22.5873em;top: 29.9709em; "><span class="stl_20 stl_09 stl_21">{{ $report->national_id }} &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:40.3688em;top: 24.9143em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺮ</div><div dir="ltr" class="stl_17 stl_09 stl_24" style="display:inline;">اﻟﺘﻘﺮﻳ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0106em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_25" style="display:inline;">اﺻﺪار</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0006em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">ﺗﺎرﻳﺦ</div><span class="stl_17 stl_09 stl_21"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:42.1657em;top: 27.4217em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻢ</div><div dir="ltr" class="stl_17 stl_09 stl_16" style="display:inline;">اﻻﺳ</div><span class="stl_17 stl_09 stl_16"> &nbsp;</span></div>
                                    <div class="stl_01" style="left:31.9858em;top: 27.5em; "><div dir="ltr" class="stl_20 stl_08 stl_19" style="display:inline;">{{ $report->name_ar }}</div><span class="stl_20 stl_08 stl_19"> &nbsp;</span></div>
                                    <div class="stl_01" style="left:5.2446em;top: 27.5em;"><span class="stl_12 stl_08 stl_21" style="color: #4278b9;">Name &nbsp;</span></div>
                                    <div class="stl_01" style="left:11.3634em;top: 27.5em; "><span class="stl_22 stl_08 stl_19" style="word-spacing:0em; color: #2C3E77;">{{ $report->name_en }}</span><span class="stl_22 stl_08 stl_19" style="word-spacing:0.219em;">&nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:3.4059em;top: 29.9709em; "><span class="stl_17 stl_09 stl_10" style="word-spacing:-0.0001em;">National ID/Iqama &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.5133em;top: 32.4782em; "><span class="stl_17 stl_09 stl_19">Nationality &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.7222em;top: 34.9856em; "><span class="stl_17 stl_09 stl_27">Employer &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:40.0763em;top: 29.9709em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻹﻗﺎﻣ</div><span class="stl_17 stl_09 stl_23">/</span><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻬﻮﻳﺔ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">رﻗﻢ</div><span class="stl_17 stl_09 stl_21"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:41.7896em;top: 32.4782em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_17 stl_09 stl_28" style="display:inline;">اﻟﺠﻨﺴﻴ</div><span class="stl_17 stl_09 stl_28"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:15.0652em;top: 32.4782em; "><span class="stl_20 stl_09 stl_19" style="word-spacing:0.0001em;">{{ $report->nationality_en }} &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:30.9034em;top: 32.4782em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">{{ $report->nationality_ar }}</div><span class="stl_20 stl_09 stl_19"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:30.486em;top: 34.9856em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">{{ $report->employer }}</div><span class="stl_20 stl_09 stl_10"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:41.3091em;top: 34.9856em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻞ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻌﻤ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_27" style="display:inline;">ﺟﻬﺔ</div><span class="stl_17 stl_09 stl_27"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:11.325em;top: 37.5044em; "><span class="stl_26 stl_09 stl_19" style="word-spacing:-0.0003em;">{{ $report->physician_name_en }}</span></div>
                                    <div class="stl_01 stl_07" style="left:15.5666em;top: 40.0422em; "><span class="stl_20 stl_09 stl_21">{{ $report->position_en }}</span></div>
                                    <div class="stl_01 stl_07" style="left:3.782em;top: 37.493em; "><span class="stl_17 stl_09 stl_19" style="word-spacing:-0.0005em;">Physician Name &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.9312em;top: 40.0422em; "><span class="stl_17 stl_09 stl_13">Position &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:28.0617em;top: 37.5462em; "><div dir="ltr" class="stl_26 stl_09 stl_12" style="display:inline;">{{ $report->physician_name_ar }}</div><span class="stl_26 stl_09 stl_25"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:31.7392em;top: 40.0422em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">{{ $report->position_ar }}</div><span class="stl_20 stl_09 stl_16"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:40.0136em;top: 37.493em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺞ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻤﻌﺎﻟ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_27" style="display:inline;">اﻟﻄﺒﻴﺐ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0008em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_16" style="display:inline;">اﺳﻢ</div><span class="stl_17 stl_09 stl_16"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:40.2225em;top: 40.0422em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻲ</div><div dir="ltr" class="stl_17 stl_09 stl_28" style="display:inline;">اﻟﻮﻇﻴﻔ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_27" style="display:inline;">اﻟﻤﺴﻤﻰ</div><span class="stl_17 stl_09 stl_27"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:3.1283em;top: 52.5182em; "><div dir="ltr" class="stl_29 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_29 stl_09 stl_21" style="display:inline;">ﻣﻄﺎﺑﻘ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0001em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_16" style="display:inline;">ﻣﻦ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0003em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_25" style="display:inline;">ﺗﺄﻛﺪ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_25" style="display:inline;">إﻟﻜﱰوﻧﻴﺎ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_30" style="display:inline;">اﻟﺘﻘﺮﻳﺮ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0125em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_16" style="display:inline;">ﻣﻦ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0003em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_27" style="display:inline;">ﻟﻠﺘﺤﻘﻖ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_23" style="display:inline;">اﻟﺒﺎرﻛﻮد</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_10" style="display:inline;">ﺑﻤﺴﺢ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_12" style="display:inline;">ﻗﻢ</div><span class="stl_29 stl_09 stl_12"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:5.161em;top: 53.563em; "><div dir="ltr" class="stl_29 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_29 stl_09 stl_16" style="display:inline;">اﻹﻗﺎﻣ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0004em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_31" style="display:inline;">أو</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_25" style="display:inline;">اﻟﻮﻃﻨﻴﺔ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_27" style="display:inline;">اﻟﻬﻮﻳﺔ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_10" style="display:inline;">ﺑﺮﻗﻢ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_30" style="display:inline;">اﻟﺘﻘﺮﻳﺮ</div><span class="stl_29 stl_09 stl_12" style="word-spacing:-0.0125em;">&nbsp;</span><div dir="ltr" class="stl_29 stl_09 stl_10" style="display:inline;">ﺑﻴﺎﻧﺎت</div><span class="stl_29 stl_09 stl_10"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.4506em;top: 55.0256em; "><span class="stl_29 stl_09 stl_10" style="word-spacing:0.0002em;">Scan the QR code to electronically check the report &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:4.179em;top: 56.0704em; "><span class="stl_29 stl_09 stl_27" style="word-spacing:0.0001em;">Make sure the information in this report matches the &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:6.4565em;top: 57.1151em; "><span class="stl_29 stl_09 stl_19" style="word-spacing:-0.0003em;">.ones in the National ID or Iqama &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:36.2734em;top: 55.6563em; "><div dir="ltr" class="stl_32 stl_09 stl_12" style="display:inline;">{{ $report->medical_complex_ar }}</div><span class="stl_32 stl_09 stl_28"> &nbsp;</span></div>
                                    <div class="stl_01 stl_07" style="left:35.5212em;top: 56.9518em; "><span class="stl_32 stl_09 stl_19" style="word-spacing:-0.0002em;">{{ $report->medical_complex_en }}</span></div>
                                    <div class="stl_01 stl_07" style="left:2.2984em;top: 63.5127em; "><span class="stl_32 stl_09 stl_10" style="word-spacing:0em;">{{ $report->created_at->format('g:i A') }}</span></div>
                                    <div class="stl_01 stl_07" style="left:2.2984em;top: 64.8082em; "><span class="stl_32 stl_09 stl_19" style="word-spacing:0em;">{{ $report->created_at->format('D') }}, {{ $report->created_at->format('d M Y') }}</span></div>
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
