@php($title = 'all-sick-leaves')
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
                    @if(count($sick_leaves) > 0)
                    <div class="card-title">
                        <h4>{{ __('dashboard.latest-reports') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover ">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>{{ __('sick-leave.leave-id') }}</th>
                                    <th>{{ __('sick-leave.leave-duration') }}</th>
                                    <th>{{ __('sick-leave.issue-date') }}</th>
                                    <th>{{ __('sick-leave.name-ar') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sick_leaves as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <td><a class="btn text-primary" href="">{{ $report->leave_id }}</a></td>
                                    <td>{{ $report->leave_duration . __('sick-leave.days') .' - '. __('sick-leave.from') . '(' . $report->leave_start . ') - ' . __('sick-leave.to') . '(' . $report->leave_end . ')' }}</td>
                                    <td>{{ $report->issue_date }}</td>
                                    <td>{{ $report->name_ar }}</td>
                                    <td><a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a> <a class="btn btn-primary" href=""><i class="fa fa-arrow-circle-o-right"></i></a></td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mr-3 mb-3">
                                {!! $sick_leaves->links() !!}
                            </div>
                        </div>
                    </div>
                    @else
                        <div class="card-title">
                            <h4>{{ __('sick-leave.empty') }}</h4>
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
