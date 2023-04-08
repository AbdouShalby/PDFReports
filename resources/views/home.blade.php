@php($title = 'latest-reports')
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.title') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->

        <div class="row">
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <a href="{{ route('all-sick-leaves') }}">
                                <span><i class="fa fa-stethoscope f-s-40 color-primary"></i></span>
                            </a>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><a class="color-primary" href="{{ route('all-sick-leaves') }}">{{ $count_sick_leaves }}</a></h2>
                            <p class="m-b-0">{{ __('dashboard.total-sick-leaves') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <a href="{{ route('all-sick-leaves-fahd') }}">
                                <span><i class="fa fa-hospital-o f-s-40 color-success"></i></span>
                            </a>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><a class="color-primary" href="{{ route('all-sick-leaves-fahd') }}">{{ $count_sick_leaves_fahd }}</a></h2>
                            <p class="m-b-0">{{ __('dashboard.total-sick-leaves-fahd') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <a href="{{ route('all-review-reports') }}">
                                <span><i class="fa fa-eye f-s-40 color-warning"></i></span>
                            </a>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><a class="color-primary" href="{{ route('all-review-reports') }}">{{ $count_review_reports }}</a></h2>
                            <p class="m-b-0">{{ __('dashboard.total-review-reports') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card p-30">
                    <div class="media">
                        <div class="media-left meida media-middle">
                            <a href="{{ route('all-review-scenes') }}">
                                <span><i class="fa fa-search f-s-40 color-danger"></i></span>
                            </a>
                        </div>
                        <div class="media-body media-text-right">
                            <h2><a class="color-primary" href="{{ route('all-review-scenes') }}">{{ $count_review_scenes }}</a></h2>
                            <p class="m-b-0">{{ __('dashboard.total-review-scenes') }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-sick-leaves') }}</h4>
                    </div>
                    <div class="card-body">
                        @if(count($latest_sick_leaves) > 0)
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('sick-leave.leave-id') }}</th>
                                    <th>{{ __('sick-leave.leave-duration') }}</th>
                                    <th>{{ __('sick-leave.name-ar') }}</th>
                                    <th>{{ __('sick-leave.issue-date') }}</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($latest_sick_leaves as $report)
                                <tr>
                                    <th scope="row">{{ $report->id }}</th>
                                    <td><a class="color-primary" href="{{ route('show-sick-leave', $report->id) }}">{{ $report->leave_id }}</a></td>
                                    <td>{{ $report->leave_duration . ' ' . __('sick-leave.days') }}</td>
                                    <td>{{ $report->name_ar }}</td>
                                    <td>{{ $report->issue_date }}</td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        @else
                            <div class="alert alert-info">
                                {{ __('dashboard.empty') }}
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('create-sick-leave') }}"><i class="fa fa-plus"></i> {{ __('dashboard.add-one') }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-sick-leaves-fahd') }}</h4>
                    </div>
                    <div class="card-body">
                        @if(count($latest_sick_leaves_fahd) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('sick-leave-fahd.leave-id') }}</th>
                                        <th>{{ __('sick-leave-fahd.leave-duration') }}</th>
                                        <th>{{ __('sick-leave-fahd.name-ar') }}</th>
                                        <th>{{ __('sick-leave-fahd.issue-date') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($latest_sick_leaves_fahd as $report)
                                        <tr>
                                            <th scope="row">{{ $report->id }}</th>
                                            <td><a class="color-primary" href="{{ route('show-sick-leave-fahd', $report->id) }}">{{ $report->leave_id }}</a></td>
                                            <td>{{ $report->leave_duration . ' ' . __('sick-leave-fahd.days') }}</td>
                                            <td>{{ $report->name_ar }}</td>
                                            <td>{{ $report->issue_date }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info">
                                {{ __('dashboard.empty') }}
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('create-sick-leave-fahd') }}"><i class="fa fa-plus"></i> {{ __('dashboard.add-one') }}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-review-reports') }}</h4>
                    </div>
                    <div class="card-body">
                        @if(count($latest_review_reports) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('review-report.leave-id') }}</th>
                                        <th>{{ __('review-report.national-id') }}</th>
                                        <th>{{ __('review-report.name-ar') }}</th>
                                        <th>{{ __('review-report.print-date') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($latest_review_reports as $report)
                                        <tr>
                                            <th scope="row">{{ $report->id }}</th>
                                            <td><a class="color-primary" href="{{ route('show-review-report', $report->id) }}">{{ $report->leave_id }}</a></td>
                                            <td>{{ $report->national_id }}</td>
                                            <td>{{ $report->name_ar }}</td>
                                            <td>{{ $report->print_date }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info">
                                {{ __('dashboard.empty') }}
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('create-review-report') }}"><i class="fa fa-plus"></i> {{ __('dashboard.add-one') }}</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-review-scenes') }}</h4>
                    </div>
                    <div class="card-body">
                        @if(count($latest_review_scenes) > 0)
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>{{ __('review-scene.leave-id') }}</th>
                                        <th>{{ __('review-scene.waiting_period') }}</th>
                                        <th>{{ __('review-scene.name_ar') }}</th>
                                        <th>{{ __('review-scene.issue-date') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($latest_review_scenes as $report)
                                        <tr>
                                            <th scope="row">{{ $report->id }}</th>
                                            <td><a class="color-primary" href="{{ route('show-review-scene', $report->id) }}">{{ $report->leave_id }}</a></td>
                                            <td>{{ $report->waiting_period . ' ' . __('review-scene.hours') }}</td>
                                            <td>{{ $report->name_ar }}</td>
                                            <td>{{ $report->issue_date }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="alert alert-info">
                                {{ __('dashboard.empty') }}
                            </div>
                            <a class="btn btn-success float-right" href="{{ route('create-review-scene') }}"><i class="fa fa-plus"></i> {{ __('dashboard.add-one') }}</a>
                        @endif
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
