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
    <link href="{{ asset('css/review-report.css') }}" rel="stylesheet" type="text/css" />

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
                            <object data="{{ asset('images/review-report/img_47.svg') }}" type="image/svg+xml" class="stl_04" style="position:absolute; width:48.3333em; height:68.5em;">
                                <embed src="{{ asset('images/review-report/img_47.svg') }}" type="image/svg+xml" />
                            </object>
                        </div>
                        <div class="stl_view">
                            <div class="stl_05 stl_06">
                                <div class="stl_01" style="left:35.7638em;top: 7.2544em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﺳﻌودﯾ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﻌرﺑﯾﺔ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﻣﻣﻠﻛﺔ</div><span class="stl_07 stl_08 stl_10"> &nbsp;</span></div>
                                <div class="stl_01" style="left:37.7198em;top: 8.4544em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_11" style="display:inline;">اﻟﺻﺣ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0007em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_12" style="display:inline;">وزارة</div><span class="stl_07 stl_08 stl_12"> &nbsp;</span></div>
                                <div class="stl_01" style="left:36.2658em;top: 9.6544em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_13" style="display:inline;">اﻟطﺑﯾ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0007em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﻓﮭد</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0005em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﻣﻠك</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">ﻣدﯾﻧﺔ</div><span class="stl_07 stl_08 stl_10"> &nbsp;</span></div>
                                <div class="stl_01" style="left:12.1258em;top: 9.8176em; "><span class="stl_14 stl_15 stl_09">Hospital &nbsp;</span></div>
                                <div class="stl_01" style="left:21.2743em;top: 12.8663em; "><div dir="ltr" class="stl_16 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_16 stl_08 stl_09" style="display:inline;">ﻣراﺟﻌ</div><span class="stl_16 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_16 stl_08 stl_09" style="display:inline;">ﺗﻘرﯾر</div><span class="stl_16 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:12.6956em;top: 15.5449em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﮭوﯾ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_17" style="display:inline;">ﻧوع</div><span class="stl_07 stl_08 stl_17"> &nbsp;</span></div>
                                <div class="stl_01" style="left:27.5816em;top: 15.5849em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﮭوﯾ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">رﻗم</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:41.9216em;top: 15.7249em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﻲ</div><div dir="ltr" class="stl_07 stl_08 stl_13" style="display:inline;">اﻟﺗﺳﻠﺳﻠ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0007em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">اﻟرﻗم</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:7.0126em;top: 16.8599em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline; font-family: 'Roboto', sans-serif; font-weight: bold;">{{ $report->national_type }}</div><span class="stl_07 stl_08 stl_10"> &nbsp;</span></div>
                                <div class="stl_01" style="left:21.7546em;top: 16.8526em; "><span class="stl_18 stl_08 stl_10">{{ $report->national_id }}</span></div>
                                <div class="stl_01" style="left:36.7546em;top: 16.8526em; "><span class="stl_19 stl_08 stl_10" style="font-family: 'Roboto', sans-serif; font-weight: bold;">{{ $report->leave_id }}</span></div>
                                <div class="stl_01" style="left:11.8746em;top: 18.9849em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_11" style="display:inline;">اﻟطﺑﺎﻋ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0007em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺗﺎرﯾﺦ</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:13.0526em;top: 22.1739em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ل</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﻌﻣ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_17" style="display:inline;">ﺟﮭﺔ</div><span class="stl_07 stl_08 stl_17"> &nbsp;</span></div>
                                <div class="stl_01" style="left:42.6576em;top: 19.0419em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ض</div><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">اﻟﻣرﯾ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_13" style="display:inline;">اﺳم</div><span class="stl_07 stl_08 stl_13"> &nbsp;</span></div>
                                <div class="stl_01" style="left:44.2626em;top: 22.0309em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_13" style="display:inline;">اﻟﺟﻧﺳﯾ</div><span class="stl_07 stl_08 stl_13"> &nbsp;</span></div>
                                <div class="stl_01" style="left:27.3936em;top: 20.0756em; "><div dir="ltr" class="stl_20 stl_08 stl_09" style="display:inline; font-family: 'Roboto', sans-serif; font-weight: bold;">{{ $report->name_ar }}</div><span class="stl_20 stl_08 stl_21"> &nbsp;</span></div>
                                <div class="stl_01" style="left:6.5546em;top: 20.2346em; "><span class="stl_19 stl_08 stl_09">{{ $report->print_date }}</span></div>
                                <div class="stl_01" style="left:26.9516em;top: 22.2999em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">د</div><div dir="ltr" class="stl_07 stl_08 stl_17" style="display:inline;">اﻟﻣﯾﻼ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0005em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺗﺎرﯾﺦ</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:21.6106em;top: 24.4866em; "><span class="stl_19 stl_08 stl_09">{{ $report->birth_date }}</span></div>
                                <div class="stl_01" style="left:21.4756em;top: 28.2066em; "><span class="stl_19 stl_08 stl_09">{{ $report->admission }} &nbsp;</span></div>
                                <div class="stl_01" style="left:37.8356em;top: 24.4856em; "><div dir="ltr" class="stl_20 stl_08 stl_09" style="display:inline; font-family: 'Roboto', sans-serif; font-weight: bold;">{{ $report->nationality }}</div><span class="stl_20 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:7.7386em;top: 24.5546em; "><div dir="ltr" class="stl_20 stl_08 stl_09" style="display:inline; font-family: 'Roboto', sans-serif; font-weight: bold;">{{ $report->work }}</div><span class="stl_20 stl_08 stl_12"> &nbsp;</span></div>
                                <div class="stl_01" style="left:41.7846em;top: 26.4939em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_07 stl_08 stl_17" style="display:inline;">اﻟﻣراﺟﻌ</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0005em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺗﺎرﯾﺦ</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:11.5546em;top: 26.5519em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ج</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟﺧرو</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0005em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺗﺎرﯾﺦ</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:26.7366em;top: 26.6999em; "><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ل</div><div dir="ltr" class="stl_07 stl_08 stl_10" style="display:inline;">اﻟدﺧو</div><span class="stl_07 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_07 stl_08 stl_09" style="display:inline;">ﺗﺎرﯾﺦ</div><span class="stl_07 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:7.0356em;top: 28.2066em; "><span class="stl_19 stl_08 stl_09">{{ $report->discharge }}</span></div>
                                <div class="stl_01" style="left:34.9556em;top: 28.2066em; "><span class="stl_19 stl_08 stl_09">{{ $report->review_date }}</span></div>
                                <div class="stl_01" style="right:2em;top: 30.3026em;"><div class="stl_20 stl_08 stl_09" dir="rtl" style="display:inline; font-family: 'Roboto', sans-serif; font-weight: bold;direction: rtl;text-align:right">{!! wordwrap($report->details, 210, "<br>") !!}</div></div>
                                <div class="stl_01" style="left:7.9323em;top: 37.5588em; "><span class="stl_24 stl_08 stl_25" style="word-spacing:0.0077em;">Treating Physician &nbsp;</span></div>
                                <div class="stl_01" style="left:35.8976em;top: 37.7988em; "><div dir="ltr" class="stl_24 stl_08 stl_09" style="display:inline;">ﺞ</div><div dir="ltr" class="stl_24 stl_08 stl_10" style="display:inline;">اﻟﻣﻌﺎﻟ</div><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_13" style="display:inline;">اﻟطﺑﯾب</div><span class="stl_24 stl_08 stl_13"> &nbsp;</span></div>
                                <div class="stl_01" style="left:2.099em;top: 39.7988em; "><span class="stl_24 stl_08 stl_10" style="word-spacing:0.0003em;">Name : &nbsp;</span></div>
                                <div class="stl_01" style="left:2.099em;top: 40.5988em; "><span class="stl_26 stl_08 stl_09">Signature: &nbsp;</span></div>
                                <div class="stl_01" style="left:34.7536em;top: 40.4309em; "><span class="stl_27 stl_08 stl_09" style="word-spacing:-0.0367em;">{{ $report->physician_name }}</span></div>
                                <div class="stl_01" style="left:35.1493em;top: 41.1823em; "><span class="stl_27 stl_08 stl_09" style="word-spacing:0.0001em;">{{ $report->physician_position }}</span></div>
                                <div class="stl_01" style="left:43.8076em;top: 40.3988em; "><span class="stl_24 stl_08 stl_09">:</span><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_13" style="display:inline;">اﻻﺳم</div><span class="stl_24 stl_08 stl_13"> &nbsp;</span></div>
                                <div class="stl_01" style="left:43.6256em;top: 41.1988em; "><span class="stl_24 stl_08 stl_09">:</span><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_10" style="display:inline;">اﻟﺗوﻗﯾﻊ</div><span class="stl_24 stl_08 stl_10"> &nbsp;</span></div>
                                <div class="stl_01" style="left:14.0076em;top: 44.7235em; "><span class="stl_24 stl_08 stl_09">:</span><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_11" style="display:inline;">اﻟﻣﻌﻠوﻣﺎت</div><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_21" style="display:inline;">اﺻدار</div><span class="stl_24 stl_08 stl_09" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_24 stl_08 stl_09" style="display:inline;">وﺣدة</div><span class="stl_24 stl_08 stl_09"> &nbsp;</span></div>
                                <div class="stl_01" style="left:8.5178em;top: 44.6301em; "><span class="stl_28 stl_29 stl_30">@php if ($report->status == 0) { echo '<span style="color: green;">Conformed<span>'; } elseif ($report->status == 1) { echo '<span style="color: red; font-size: 130px;">Not Conformed<span>'; } @endphp</span></div>
                                <div class="stl_01" style="left:6.4963em;top: 50.5422em; "><span class="stl_31 stl_08 stl_09">(</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟطﺑﯾﺔ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_10" style="display:inline;">ﻓﮭد</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0008em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟﻣﻠك</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">ﻟﻣدﯾﻧﺔ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟرﺳﻣﻲ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">ﺑﺎﻟﺧﺗم</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">وﯾﻛﺗﻔﻲ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">ﺑري</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">ﺗوﻗﯾﻊ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_10" style="display:inline;">اﻟﻰ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">ﺗﺣﺗﺎج</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_21" style="display:inline; word-spacing:-0.0001em;">وﻻ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0em;">&nbsp;</span><span class="stl_31 stl_08 stl_22">،</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">اﻹﻟﻛﺗروﻧﻲ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">ﺑﺗوﻗﯾﻊ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_10" style="display:inline;">ﻣﻌﺗﻣدة</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">اﻷﻟﻲ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_17" style="display:inline;">اﻟﺣﺎﺳب</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_22" style="display:inline;">طرﯾﻖ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_21" style="display:inline;">ﻋن</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟطﺑﯾﺔ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟﺗﻘﺎرﯾر</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_22" style="display:inline;">ﻗﺳم</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_21" style="display:inline;">ﻣن</div><span class="stl_31 stl_08 stl_09">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_10" style="display:inline;">ﺻﺎدرة</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_09" style="display:inline;">اﻟوﺛﯾﻘﺔ</div><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_31 stl_08 stl_11" style="display:inline;">ھذه</div><span class="stl_31 stl_08 stl_11">) &nbsp;</span></div>
                                <div class="stl_01" style="left:1.6596em;top: 52.2855em; "><span class="stl_32 stl_08 stl_17" style="word-spacing:0.0003em;">(This computer generated report is signed through e signature released by the Medical Reports Dept. This report is invalid without the King Fahd Medical &nbsp;</span></div>
                                <div class="stl_01" style="left:21.487em;top: 53.0855em; "><span class="stl_31 stl_08 stl_09" style="word-spacing:0.0001em;">City oﬃcial ﬆamp</span><span class="stl_32 stl_08 stl_09" style="word-spacing:0.0001em;">) &nbsp;</span></div>
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
