@php($title = 'all-review-scenes')
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper">
    <!-- Bread crumb -->
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">{{ __('sidebar.all-review-scenes') }}</h3>
        </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    @if(count($review_scenes) > 0)
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
                                    <th>{{ __('review-scene.leave-id') }}</th>
                                    <th>{{ __('review-scene.admission') }}</th>
                                    <th>{{ __('review-scene.discharge') }}</th>
                                    <th>{{ __('review-scene.waiting-period') }}</th>
                                    <th>{{ __('review-scene.name-ar') }}</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($review_scenes as $report)
                                <tr>
                                    <td>{{ $report->id }}</td>
                                    <td><a class="btn text-primary" href="">{{ $report->leave_id }}</a></td>
                                    <td>{{ $report->admission }}</td>
                                    <td>{{ $report->discharge }}</td>
                                    <td>{{ $report->waiting_period . ' ' . __('review-scene.hours') }}</td>
                                    <td>{{ $report->name_ar }}</td>
                                    <td>
                                        <a class="btn btn-danger" href="{{ route('delete-review-scene', $report->id) }}"><i class="fa fa-trash"></i></a>
                                        <a class="btn btn-success" href="{{ route('edit-review-scene', $report->id) }}"><i class="fa fa-pencil-square-o"></i></a>
                                        <a class="btn btn-primary" href="{{ route('show-review-scene', $report->id) }}"><i class="fa fa-arrow-circle-o-right"></i></a>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-end mr-3 mb-3">
                                {!! $review_scenes->links() !!}
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
                            <h4>{{ __('review-scene.empty') }}</h4>
                            <br>
                            <a href="{{ route('create-review-scene') }}" class="btn btn-success"><i class="fa fa-plus"></i> {{ __('sick-leave.add-one') }}</a>
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
