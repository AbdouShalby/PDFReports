@php($title = 'all-sick-leaves-fahd')
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
                        <h4>{{ __('sick-leave-fahd.title') }}</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="basic-elements">
                            <form action="{{ route('update-sick-leave-fahd', $report->id) }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.leave-start') }}</label>
                                            <input name="leave_start" class="form-control @error('leave_start') is-invalid @enderror" value="{{ $report->leave_start }}" type="date" required placeholder="{{ __('sick-leave-fahd.leave-start') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.leave-end') }}</label>
                                            <input name="leave_end" class="form-control @error('leave_end') is-invalid @enderror" value="{{ $report->leave_end }}" type="date" required placeholder="{{ __('sick-leave-fahd.leave-end') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.issue-date') }}</label>
                                            <input name="issue_date" class="form-control @error('issue_date') is-invalid @enderror" value="{{ $report->issue_date }}" type="date" required placeholder="{{ __('sick-leave-fahd.issue-date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.name-en') }}</label>
                                            <input name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ $report->name_en }}" type="text" required placeholder="{{ __('sick-leave-fahd.name-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.name-ar') }}</label>
                                            <input name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ $report->name_ar }}" type="text" required placeholder="{{ __('sick-leave-fahd.name-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.national-id') }}</label>
                                            <input name="national_id" class="form-control @error('national_id') is-invalid @enderror" value="{{ $report->national_id }}" type="number" required placeholder="{{ __('sick-leave-fahd.national-id') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.nationality') }}</label>
                                            <input name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ $report->nationality }}" type="text" required placeholder="{{ __('sick-leave-fahd.nationality') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.employer') }}</label>
                                            <input name="employer" class="form-control @error('employer') is-invalid @enderror" value="{{ $report->employer }}" type="text" required placeholder="{{ __('sick-leave-fahd.employer') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.physician-name') }}</label>
                                            <input name="physician_name" class="form-control @error('physician_name') is-invalid @enderror" value="{{ $report->physician_name }}" type="text" required placeholder="{{ __('sick-leave-fahd.physician-name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.position') }}</label>
                                            <input name="position" class="form-control @error('position') is-invalid @enderror" value="{{ $report->position }}" type="text" required placeholder="{{ __('sick-leave-fahd.position') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.diagnosis') }}</label>
                                            <input name="diagnosis" class="form-control @error('diagnosis') is-invalid @enderror" value="{{ $report->diagnosis }}" type="text" required placeholder="{{ __('sick-leave-fahd.diagnosis') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.medical-complex') }}</label>
                                            <input name="medical_complex" class="form-control @error('medical_complex') is-invalid @enderror" value="{{ $report->medical_complex }}" type="text" required placeholder="{{ __('sick-leave-fahd.medical-complex') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 w-15"><i class="ti-save"></i> {{ __('sick-leave-fahd.update') }}</button>
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