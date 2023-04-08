<!DOCTYPE html>
<html lang="en">

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
    <link href="{{ asset('css/customs.css') }}" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="fix-header fix-sidebar">
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
                        <h4>{{ __('check.fill-sick-leave-fahad') }}</h4>
                    </div>
                    <div class="row justify-content-center ">
                        <div class="col-8 my-3 mx-3 p-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="basic-form">
                                        <form action="{{ route('show-out-sick-leave-fahad') }}" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>{{ __('check.leave-id') }}</label>
                                                <input name="leave_id" type="text" class="form-control input-flat" placeholder="{{ __('check.id-example') }}">
                                            </div>
                                            <div class="form-group">
                                                <label>{{ __('check.national-id') }}</label>
                                                <input name="national_id" type="text" class="form-control input-flat" placeholder="1234567890">
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-info">{{ __('check.button') }}</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
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
