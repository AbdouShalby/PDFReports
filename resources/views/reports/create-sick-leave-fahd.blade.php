@php($title = 'sick-leave-fahd')
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
                            <form action="{{ route('store-sick-leave-fahd') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.leave-start') }}</label>
                                            <input name="leave_start" class="form-control @error('leave_start') is-invalid @enderror" value="{{ old('leave_start') }}" type="date" required placeholder="{{ __('sick-leave-fahd.leave-start') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.leave-end') }}</label>
                                            <input name="leave_end" class="form-control @error('leave_end') is-invalid @enderror" value="{{ old('leave_end') }}" type="date" required placeholder="{{ __('sick-leave-fahd.leave-end') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.issue-date') }}</label>
                                            <input name="issue_date" class="form-control @error('issue_date') is-invalid @enderror" value="{{ old('issue_date') }}" type="date" required placeholder="{{ __('sick-leave-fahd.issue-date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.name-en') }}</label>
                                            <input name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ old('name_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.name-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.name-ar') }}</label>
                                            <input name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ old('name_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.name-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.national-id') }}</label>
                                            <input name="national_id" class="form-control @error('national_id') is-invalid @enderror" value="{{ old('national_id') }}" type="number" required placeholder="{{ __('sick-leave-fahd.national-id') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.nationality-en') }}</label>
                                            <input name="nationality_en" class="form-control @error('nationality_en') is-invalid @enderror" value="{{ old('nationality_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.nationality-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.nationality-ar') }}</label>
                                            <input name="nationality_ar" class="form-control @error('nationality_ar') is-invalid @enderror" value="{{ old('nationality_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.nationality-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.employer') }}</label>
                                            <input name="employer" class="form-control @error('employer') is-invalid @enderror" value="{{ old('employer') }}" type="text" required placeholder="{{ __('sick-leave-fahd.employer') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.physician-name-en') }}</label>
                                            <input name="physician_name_en" class="form-control @error('physician_name_en') is-invalid @enderror" value="{{ old('physician_name_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.physician-name-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.physician-name-ar') }}</label>
                                            <input name="physician_name_ar" class="form-control @error('physician_name_ar') is-invalid @enderror" value="{{ old('physician_name_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.physician-name-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.position-en') }}</label>
                                            <input name="position_en" class="form-control @error('position_en') is-invalid @enderror" value="{{ old('position_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.position-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.position-ar') }}</label>
                                            <input name="position_ar" class="form-control @error('position_ar') is-invalid @enderror" value="{{ old('position_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.position-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.diagnosis-en') }}</label>
                                            <input name="diagnosis_en" class="form-control @error('diagnosis_en') is-invalid @enderror" value="{{ old('diagnosis_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.diagnosis-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.diagnosis-ar') }}</label>
                                            <input name="diagnosis_ar" class="form-control @error('diagnosis_ar') is-invalid @enderror" value="{{ old('diagnosis_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.diagnosis-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.medical-complex-en') }}</label>
                                            <input name="medical_complex_en" class="form-control @error('medical_complex_en') is-invalid @enderror" value="{{ old('medical_complex_en') }}" type="text" required placeholder="{{ __('sick-leave-fahd.medical-complex-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave-fahd.medical-complex-ar') }}</label>
                                            <input name="medical_complex_ar" class="form-control @error('medical_complex_ar') is-invalid @enderror" value="{{ old('medical_complex_ar') }}" type="text" required placeholder="{{ __('sick-leave-fahd.medical-complex-ar') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 w-15"><i class="ti-plus"></i> {{ __('sick-leave-fahd.create') }}</button>
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
