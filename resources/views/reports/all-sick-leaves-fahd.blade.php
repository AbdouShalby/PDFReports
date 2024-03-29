@php($title = 'all-sick-leaves-fahd')
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-sick-leaves-fahd') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(count($sick_leaves_fahd) > 0)
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
                                    <th>{{ __('sick-leave-fahd.leave-id') }}</th>
                                    <th>{{ __('sick-leave-fahd.leave-duration') }}</th>
                                    <th>{{ __('sick-leave-fahd.issue-date') }}</th>
                                    <th>{{ __('sick-leave-fahd.name-ar') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($sick_leaves_fahd as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <td><a class="btn text-primary" href="{{ route('show-sick-leave-fahd', $report->id) }}">{{ $report->leave_id }}</a></td>
                                    <td>{{ $report->leave_duration . __('sick-leave-fahd.days') .' - '. __('sick-leave-fahd.from') . '(' . $report->leave_start . ') - ' . __('sick-leave-fahd.to') . '(' . $report->leave_end . ')' }}</td>
                                    <td>{{ $report->issue_date }}</td>
                                    <td>{{ $report->name_ar }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('delete-sick-leave-fahd', $report->id) }}"><i class="fa fa-trash"></i></a>
                                        <a class="btn btn-success" href="{{ route('edit-sick-leave-fahd', $report->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-primary" href="{{ route('show-sick-leave-fahd', $report->id) }}"><i class="fa fa-arrow-circle-o-right"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mr-3 mb-3">
                                {!! $sick_leaves_fahd->links() !!}
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
                            <h4>{{ __('sick-leave-fahd.empty') }}</h4>
                            <br>
                            <a href="{{ route('create-sick-leave-fahd') }}" class="btn btn-success"><i class="fa fa-plus"></i> {{ __('sick-leave-fahd.add-one') }}</a>
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
