<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
    <title>{{ env('APP_NAME') }}</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('css/lib/bootstrap/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('css/helper.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @if(app()->getLocale() == 'en')
        <link rel="stylesheet" href="{{ asset('css/customs.css') }}" />
    @else
        <link rel="stylesheet" href="{{ asset('css/customs_ar.css') }}">
    @endif
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar" {{( Session::get('locale') === 'en' ? 'ltr' : 'rtl' )}}>
<!-- Preloader - style you can find in spinners.css -->
<div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
        <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
</div>
<!-- Main wrapper  -->
<div id="main-wrapper" class="container">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-12">
                <div class="card check">
                    <div class="card-title">
                        <h4>{{ __('check.title') }}</h4>
                    </div>
                    <div class="card-body mb-3">{{ __('check.select') }}</div>
                    <div class="row justify-content-center ">
                        <div class="col-5 my-3 mx-3 p-3 border border-dark bg-white">
                            <h4 class="card-title">{{ __('check.sick-leave') }}</h4>
                            <ul class="list-icons">
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-dark text-black mt-3" href="{{ route('check-sick-leave') }}">{{ __('check.button') }}</a>
                            </div>
                        </div>
                        <div class="col-5 my-3 mx-3 p-3 border border-dark bg-white">
                            <h4 class="card-title">{{ __('check.sick-leave-fahd') }}</h4>
                            <ul class="list-icons">
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-dark text-black mt-3" href="{{ route('check-sick-leave-fahad') }}">{{ __('check.button') }}</a>
                            </div>
                        </div>
                        <div class="col-5 my-3 mx-3 p-3 border border-dark bg-white">
                            <h4 class="card-title">{{ __('check.review-report') }}</h4>
                            <ul class="list-icons">
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-dark text-black mt-3" href="{{ route('check-review-report') }}">{{ __('check.button') }}</a>
                            </div>
                        </div>
                        <div class="col-5 my-3 mx-3 p-3 border border-dark bg-white">
                            <h4 class="card-title">{{ __('check.review-scene') }}</h4>
                            <ul class="list-icons">
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                                <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                            </ul>
                            <div class="text-center">
                                <a class="btn btn-dark text-black mt-3" href="{{ route('check-review-scene') }}">{{ __('check.button') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End PAge Content -->
    </div>
    <!-- End Container fluid  -->
</div>
<!-- End Wrapper -->
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
<!--Custom JavaScript -->
<script src="{{ asset('js/custom.min.js') }}"></script>

</body>

</html>
