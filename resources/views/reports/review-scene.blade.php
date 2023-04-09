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
    <link href="{{ asset('css/review-scene.css') }}" rel="stylesheet" type="text/css" />

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
                            <object data="{{ asset('images/review-scene/img_09.svg') }}" type="image/svg+xml" class="stl_04" style="position:absolute; width:49.5833em; height:70.1667em;">
                                <embed src="{{ asset('images/review-scene/img_09.svg') }}" type="image/svg+xml" />
                            </object>
                        </div>
                        <div class="stl_view">
                            <div class="stl_05 stl_06">
                                <div class="stl_01 stl_07" style="left:20.5605em;top: 4.9541em; "><span class="stl_08 stl_09 stl_10" style="word-spacing:0.0001em;">Kingdom of Saudi Arabia &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:19.8083em;top: 10.6338em; "><div dir="ltr" class="stl_11 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_11 stl_09 stl_13" style="display:inline;">ﻣﺮاﺟﻌ</div><span class="stl_11 stl_09 stl_12" style="word-spacing:-0.001em;">&nbsp;</span><div dir="ltr" class="stl_11 stl_09 stl_13" style="display:inline;">ﻣﺸﻬﺪ</div><span class="stl_11 stl_09 stl_13"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:18.8053em;top: 13.6008em; "><span class="stl_14 stl_09 stl_13" style="word-spacing:-0.0003em;">Statement of Visit &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:21.8142em;top: 16.9743em; "><span class="stl_15 stl_09 stl_16">{{ $report->leave_id }}</span></div>
                                <div class="stl_01 stl_07" style="left:4.8894em;top: 16.9743em; "><span class="stl_17 stl_09 stl_10" style="word-spacing:0.0001em;">Leave ID &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:3.2805em;top: 19.5348em; "><span class="stl_18 stl_09 stl_19" style="word-spacing:0.0005em;">Admission Date/Time &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:3.3641em;top: 22.084em; "><span class="stl_18 stl_09 stl_19" style="word-spacing:0.0002em;">Discharge Date/Time &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:3.9491em;top: 24.58em; "><span class="stl_20 stl_09 stl_13" style="word-spacing:-0.0008em;">Waiting Period &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:4.576em;top: 27.0874em; "><span class="stl_17 stl_09 stl_13" style="word-spacing:-0.0005em;">Issue Date &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:41.4762em;top: 16.9743em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ة</div><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">اﻹﺟﺎز</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0011em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_16" style="display:inline;">رﻣﺰ</div><span class="stl_17 stl_09 stl_16"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:40.3897em;top: 19.4817em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">ل</div><div dir="ltr" class="stl_20 stl_09 stl_10" style="display:inline;">اﻟﺪﺧﻮ</div><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.0008em;">&nbsp;</span><div dir="ltr" class="stl_20 stl_09 stl_10" style="display:inline;">وﻗﺖ</div><span class="stl_20 stl_09 stl_22">/</span><div dir="ltr" class="stl_20 stl_09 stl_21" style="display:inline;">ﺗﺎرﻳﺦ</div><span class="stl_20 stl_09 stl_21"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:40.4733em;top: 22.0308em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">ج</div><div dir="ltr" class="stl_20 stl_09 stl_23" style="display:inline;">اﻟﺨﺮو</div><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><div dir="ltr" class="stl_20 stl_09 stl_10" style="display:inline;">وﻗﺖ</div><span class="stl_20 stl_09 stl_22">/</span><div dir="ltr" class="stl_20 stl_09 stl_21" style="display:inline;">ﺗﺎرﻳﺦ</div><span class="stl_20 stl_09 stl_21"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:41.2046em;top: 24.58em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">ر</div><div dir="ltr" class="stl_20 stl_09 stl_16" style="display:inline;">اﻻﻧﺘﻈﺎ</div><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.001em;">&nbsp;</span><div dir="ltr" class="stl_20 stl_09 stl_13" style="display:inline;">ﻓﱰة</div><span class="stl_20 stl_09 stl_13"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:13.6861em;top: 19.4817em; "><span class="stl_20 stl_09 stl_16" style="word-spacing:-0.0089em;">{{ date('d-m-Y h:i A', strtotime($report->admission)) }}</span></div>
                                <div class="stl_01 stl_07" style="left:28.7722em;top: 19.4817em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $hijri_start }}</div></div>
                                <div class="stl_01 stl_07" style="left:28.7722em;top: 22.0308em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $hijri_end }}</div></div>
                                <div class="stl_01 stl_07" style="left:29.5662em;top: 24.58em; "><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_20 stl_09 stl_23" style="display:inline; word-spacing:0.0014em;">دﻗﻴﻘ</div><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><span class="stl_20 stl_09 stl_22" style="word-spacing:0.0018em;">--</span><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.0005em;">&nbsp;</span><div dir="ltr" class="stl_20 stl_09 stl_12" style="display:inline;">و</div><span class="stl_20 stl_09 stl_12" style="word-spacing:-0.0012em;">&nbsp;</span><div dir="ltr" class="stl_20 stl_09 stl_10" style="display:inline; word-spacing:0.0011em;">ﺳﺎﻋﺔ</div><span class="stl_20 stl_09 stl_12" style="word-spacing:0.0165em;">&nbsp;</span><span class="stl_20 stl_09 stl_10" style="word-spacing:0.0011em;">{{ $report->waiting_period }}</span></div>
                                <div class="stl_01 stl_07" style="left:13.6861em;top: 22.0308em; "><span class="stl_20 stl_09 stl_16" style="word-spacing:-0.0089em;">{{ date('d-m-Y h:i A', strtotime($report->discharge)) }}</span></div>
                                <div class="stl_01 stl_07" style="left:13.9786em;top: 24.58em; "><span class="stl_20 stl_09 stl_10" style="word-spacing:0em;">{{ $report->waiting_period }} hours and -- mins &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:22.6709em;top: 27.0874em; "><span class="stl_15 stl_09 stl_16" style="font-family: 'Cairo', sans-serif;">{{ $report->issue_date }}</span></div>
                                <div class="stl_01 stl_07" style="left:22.5873em;top: 32.1439em; "><span class="stl_15 stl_09 stl_21" style="font-family: 'Cairo', sans-serif;">{{ $report->national_id }}</span></div>
                                <div class="stl_01 stl_07" style="left:40.3688em;top: 27.0874em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺮ</div><div dir="ltr" class="stl_17 stl_09 stl_24" style="display:inline;">اﻟﺘﻘﺮﻳ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0106em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_25" style="display:inline;">اﺻﺪار</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0006em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">ﺗﺎرﻳﺦ</div><span class="stl_17 stl_09 stl_21"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:42.1657em;top: 29.5948em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻢ</div><div dir="ltr" class="stl_17 stl_09 stl_13" style="display:inline;">اﻻﺳ</div><span class="stl_17 stl_09 stl_13"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:11.1996em;top: 29.6061em; "><span class="stl_26 stl_09 stl_19" style="word-spacing:0.0001em; font-family: 'Cairo', sans-serif;">{{ $report->name_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:5.2446em;top: 29.5948em; "><span class="stl_17 stl_09 stl_19">Name &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:28.2498em;top: 29.6479em; "><div dir="ltr" class="stl_26 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->name_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:3.4059em;top: 32.1439em; "><span class="stl_17 stl_09 stl_10" style="word-spacing:-0.0001em;">National ID/Iqama &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:4.5133em;top: 34.6513em; "><span class="stl_17 stl_09 stl_16">Nationality &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:40.0763em;top: 32.1439em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻹﻗﺎﻣ</div><span class="stl_17 stl_09 stl_22">/</span><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻬﻮﻳﺔ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_21" style="display:inline;">رﻗﻢ</div><span class="stl_17 stl_09 stl_21"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:41.7896em;top: 34.6513em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_17 stl_09 stl_23" style="display:inline;">اﻟﺠﻨﺴﻴ</div><span class="stl_17 stl_09 stl_23"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:15.0652em;top: 34.6513em; "><span class="stl_15 stl_09 stl_16" style="word-spacing:0.0001em; font-family: 'Cairo', sans-serif;">{{ $report->nationality_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:30.9034em;top: 34.6513em; "><div dir="ltr" class="stl_15 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->nationality_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:4.7222em;top: 37.1587em; "><span class="stl_17 stl_09 stl_19">Employer &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:41.3091em;top: 37.1587em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻞ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻌﻤ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_19" style="display:inline;">ﺟﻬﺔ</div><span class="stl_17 stl_09 stl_19"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:10.7817em;top: 39.6774em; "><span class="stl_26 stl_09 stl_10" style="word-spacing:0em; font-family: 'Cairo', sans-serif;">{{ $report->physician_name_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:3.782em;top: 39.6661em; "><span class="stl_17 stl_09 stl_16" style="word-spacing:-0.0005em;">Physician Name &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:4.9312em;top: 42.2152em; "><span class="stl_17 stl_09 stl_27">Position &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:28.1662em;top: 39.7192em; "><div dir="ltr" class="stl_26 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->physician_name_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:30.8407em;top: 42.2152em; "><div dir="ltr" class="stl_15 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->position_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:40.0136em;top: 39.6661em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﺞ</div><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">اﻟﻤﻌﺎﻟ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0009em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_19" style="display:inline;">اﻟﻄﺒﻴﺐ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0008em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_13" style="display:inline;">اﺳﻢ</div><span class="stl_17 stl_09 stl_13"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:40.2225em;top: 42.2152em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ﻲ</div><div dir="ltr" class="stl_17 stl_09 stl_23" style="display:inline;">اﻟﻮﻇﻴﻔ</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_19" style="display:inline;">اﻟﻤﺴﻤﻰ</div><span class="stl_17 stl_09 stl_19"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:41.4971em;top: 44.7226em; "><div dir="ltr" class="stl_17 stl_09 stl_12" style="display:inline;">ة</div><div dir="ltr" class="stl_17 stl_09 stl_16" style="display:inline;">اﻟﺰﻳﺎر</div><span class="stl_17 stl_09 stl_12" style="word-spacing:-0.001em;">&nbsp;</span><div dir="ltr" class="stl_17 stl_09 stl_10" style="display:inline;">ﻧﻮع</div><span class="stl_17 stl_09 stl_10"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:13.6861em;top: 42.2152em; "><span class="stl_15 stl_09 stl_16" style="word-spacing:0em; font-family: 'Cairo', sans-serif;">{{ $report->position_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:15.504em;top: 44.734em; "><span class="stl_26 stl_09 stl_19" style="font-family: 'Cairo', sans-serif;">{{ $report->visit_type_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:4.7222em;top: 44.7226em; "><span class="stl_17 stl_09 stl_16" style="word-spacing:0em;">Visit Type &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:31.1542em;top: 44.7758em; "><div dir="ltr" class="stl_26 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->visit_type_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:3.1283em;top: 54.7749em; "><div dir="ltr" class="stl_28 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_28 stl_09 stl_21" style="display:inline;">ﻣﻄﺎﺑﻘ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0001em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_13" style="display:inline;">ﻣﻦ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0003em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_25" style="display:inline;">ﺗﺄﻛﺪ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0006em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_25" style="display:inline;">إﻟﻜﱰوﻧﻴﺎ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_29" style="display:inline;">اﻟﺘﻘﺮﻳﺮ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0125em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_13" style="display:inline;">ﻣﻦ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0003em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_19" style="display:inline;">ﻟﻠﺘﺤﻘﻖ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0007em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_22" style="display:inline;">اﻟﺒﺎرﻛﻮد</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0003em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_10" style="display:inline;">ﺑﻤﺴﺢ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_12" style="display:inline;">ﻗﻢ</div><span class="stl_28 stl_09 stl_12"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:5.161em;top: 55.8196em; "><div dir="ltr" class="stl_28 stl_09 stl_12" style="display:inline;">ﺔ</div><div dir="ltr" class="stl_28 stl_09 stl_13" style="display:inline;">اﻹﻗﺎﻣ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0004em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_30" style="display:inline;">أو</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_25" style="display:inline;">اﻟﻮﻃﻨﻴﺔ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0002em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_19" style="display:inline;">اﻟﻬﻮﻳﺔ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_10" style="display:inline;">ﺑﺮﻗﻢ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:0.0004em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_29" style="display:inline;">اﻟﺘﻘﺮﻳﺮ</div><span class="stl_28 stl_09 stl_12" style="word-spacing:-0.0125em;">&nbsp;</span><div dir="ltr" class="stl_28 stl_09 stl_10" style="display:inline;">ﺑﻴﺎﻧﺎت</div><span class="stl_28 stl_09 stl_10"> &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:33.369em;top: 56.701em; "><div dir="ltr" class="stl_31 stl_09 stl_12" style="display:inline; font-family: 'Cairo', sans-serif;">{{ $report->medical_complex_ar }}</div></div>
                                <div class="stl_01 stl_07" style="left:34.8734em;top: 57.9965em; "><span class="stl_31 stl_09 stl_21" style="word-spacing:0em; font-family: 'Cairo', sans-serif;">{{ $report->medical_complex_en }}</span></div>
                                <div class="stl_01 stl_07" style="left:4.4506em;top: 57.2823em; "><span class="stl_28 stl_09 stl_10" style="word-spacing:0.0002em;">Scan the QR code to electronically check the report &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:4.179em;top: 58.327em; "><span class="stl_28 stl_09 stl_19" style="word-spacing:0.0001em;">Make sure the information in this report matches the &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:6.4565em;top: 59.3717em; "><span class="stl_28 stl_09 stl_16" style="word-spacing:-0.0003em;">.ones in the National ID or Iqama &nbsp;</span></div>
                                <div class="stl_01 stl_07" style="left:2.2984em;top: 64.5575em; "><span class="stl_31 stl_09 stl_16" style="word-spacing:-0.0002em;">{{ $report->created_at->format('g:i A') }}</span></div>
                                <div class="stl_01 stl_07" style="left:2.2984em;top: 65.853em; "><span class="stl_31 stl_09 stl_16" style="word-spacing:0em;">{{ $report->created_at->format('D') }}, {{ $report->created_at->format('d M Y') }}</span></div>
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
