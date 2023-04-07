@php($title = 'all-review-reports')
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-review-reports') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(count($review_reports) > 0)
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-reports') }}</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('review-report.leave-id') }}</th>
                                    <th>{{ __('review-report.national-id') }}</th>
                                    <th>{{ __('review-report.national-type') }}</th>
                                    <th>{{ __('review-report.name-ar') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($review_reports as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <td><a class="btn text-primary" href="">{{ $report->leave_id }}</a></td>
                                    <td>{{ $report->national_id }}</td>
                                    <td>{{ $report->national_type }}</td>
                                    <td>{{ $report->name_ar }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('delete-review-report', $report->id) }}"><i class="fa fa-trash"></i></a>
                                        <a class="btn btn-success" href="{{ route('edit-review-report', $report->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-primary" href="{{ route('show-review-report', $report->id) }}"><i class="fa fa-arrow-circle-o-right"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mr-3 mb-3">
                                {!! $review_reports->links() !!}
                            </div>
                        </div>
                    </div>
                    @else
                        @if ($message = Session::get('success'))
                            <div class="alert alert-primary alert-dismissible fade show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                                {{ $message }}
                            </div>
                        @endif
                        <div class="card-title">
                            <h4>{{ __('review-report.empty') }}</h4>
                            <br>
                            <a href="{{ route('create-review-report') }}" class="btn btn-success"><i class="fa fa-plus"></i> {{ __('sick-leave.add-one') }}</a>
                        </div>
                    @endif
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
