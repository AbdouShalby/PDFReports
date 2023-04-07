@php($title = 'all-review-scenes')
@extends('layouts.app')
@section('content')
<!-- Page wrapper  -->
<div class="page-wrapper" style="min-height: 838px;">
    <!-- Container fluid  -->
    <div class="container-fluid">
        <!-- Start Page Content -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-title">
                        <h4>{{ __('review-scene.title') }}</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="basic-elements">
                            <form action="{{ route('store-review-scene') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('review-scene.admission') }}</label>
                                            <input name="admission" class="form-control @error('admission') is-invalid @enderror" value="{{ $report->admission }}" type="datetime-local" required placeholder="{{ __('review-scene.admission') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.discharge') }}</label>
                                            <input name="discharge" class="form-control @error('discharge') is-invalid @enderror" value="{{ $report->discharge }}" type="datetime-local" required placeholder="{{ __('review-scene.discharge') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.waiting-period') }}</label>
                                            <input name="waiting_period" class="form-control @error('waiting_period') is-invalid @enderror" value="{{ $report->waiting_period }}" type="number" required placeholder="{{ __('review-scene.waiting-period') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.issue-date') }}</label>
                                            <input name="issue_date" class="form-control @error('issue_date') is-invalid @enderror" value="{{ $report->issue_date }}" type="date" required placeholder="{{ __('review-scene.issue-date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.name-en') }}</label>
                                            <input name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ $report->name_en }}" type="text"  placeholder="{{ __('review-scene.name-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.name-ar') }}</label>
                                            <input name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ $report->name_ar }}" type="text"  placeholder="{{ __('review-scene.name-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.national-id') }}</label>
                                            <input name="national_id" class="form-control @error('national_id') is-invalid @enderror" value="{{ $report->national_id }}" type="number" required placeholder="{{ __('review-scene.national-id') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('review-scene.nationality') }}</label>
                                            <input name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ $report->nationality }}" type="text" required placeholder="{{ __('review-scene.nationality') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.employer') }}</label>
                                            <input name="employer" class="form-control @error('employer') is-invalid @enderror" value="{{ $report->employer }}" type="text" required placeholder="{{ __('review-scene.employer') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.physician-name') }}</label>
                                            <input name="physician_name" class="form-control @error('physician_name') is-invalid @enderror" value="{{ $report->physician_name }}" type="text" required placeholder="{{ __('review-scene.physician-name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.position') }}</label>
                                            <input name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $report->position }}" type="text" required placeholder="{{ __('review-scene.position') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.visit-type') }}</label>
                                            <input name="visit_type" class="form-control @error('visit_type') is-invalid @enderror" value="{{ $report->visit_type }}" type="text" required placeholder="{{ __('review-scene.visit-type') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-scene.medical-complex') }}</label>
                                            <input name="medical_complex" class="form-control @error('medical_complex') is-invalid @enderror" value="{{ $report->medical_complex }}" type="text" required placeholder="{{ __('review-scene.medical-complex') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 w-15"><i class="ti-save"></i> {{ __('review-scene.update') }}</button>
                                    </div>
                                </div>
                            </form>
                        </div>
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
