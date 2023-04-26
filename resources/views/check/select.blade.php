@extends('check-layouts.app')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="row justify-content-center service-container sick-leave">
            <div class="col-lg-6 my-3 p-3 border border-primary bg-white">
                <h4 class="card-title">{{ __('check.sick-leave') }}</h4>
                <ul class="list-icons d-lg-none">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
                <div class="text-center">
                    <a class="btn btn-dark text-black mt-3" href="{{ route('check-sick-leave') }}">{{ __('check.button') }}</a>
                </div>
            </div>
            <div class="col-lg-6 my-3 p-3 d-lg-block d-none sick-leave-hover">
                <ul class="list-icons">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center sick-leave-fahd">
            <div class="col-lg-6 my-3 p-3 d-lg-block d-none sick-leave-fahd-hover">
                <ul class="list-icons">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
            </div>
            <div class="col-lg-6 my-3 p-3 border border-info bg-white">
                <h4 class="card-title">{{ __('check.sick-leave-fahd') }}</h4>
                <ul class="list-icons d-lg-none">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
                <div class="text-center">
                    <a class="btn btn-dark text-black mt-3" href="{{ route('check-sick-leave-fahad') }}">{{ __('check.button') }}</a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center review-report">
            <div class="col-lg-6 my-3 p-3 border border-primary bg-white">
                <ul class="list-icons d-lg-none">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
                <h4 class="card-title">{{ __('check.review-report') }}</h4>
                <div class="text-center">
                    <a class="btn btn-dark text-black mt-3" href="{{ route('check-review-report') }}">{{ __('check.button') }}</a>
                </div>
            </div>
            <div class="col-lg-6 my-3 p-3 d-lg-block d-none review-report-hover">
                <ul class="list-icons">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
            </div>
        </div>
        <div class="row justify-content-center review-scene">
            <div class="col-lg-6 my-3 p-3 d-lg-block d-none review-scene-hover">
                <ul class="list-icons">
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Consectetur adipiscing eli</li>
                    <li><i class="fa fa-check text-info"></i> Integer molestie lorem at massa</li>
                </ul>
            </div>
            <div class="col-lg-6 my-3 p-3 border border-info bg-white">
                <h4 class="card-title">{{ __('check.review-scene') }}</h4>
                <ul class="list-icons d-lg-none">
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
@endsection
