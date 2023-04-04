@php($title = 'sick-leave')
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
                        <h4>{{ __('sick-leave.title') }}</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-elements">
                            <form action="{{ route('store-sick-leave') }}" method="post">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.leave-start') }}</label>
                                            <input name="leave_start" class="form-control @error('leave_start') is-invalid @enderror" value="{{ old('leave_start') }}" type="date"  placeholder="{{ __('sick-leave.leave-start') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.leave-end') }}</label>
                                            <input name="leave_end" class="form-control @error('leave_end') is-invalid @enderror" value="{{ old('leave_end') }}" type="date"  placeholder="{{ __('sick-leave.leave-end') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.issue-date') }}</label>
                                            <input name="issue_date" class="form-control @error('issue_date') is-invalid @enderror" value="{{ old('issue_date') }}" type="date"  placeholder="{{ __('sick-leave.issue-date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.name') }}</label>
                                            <input name="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" type="text"  placeholder="{{ __('sick-leave.name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.national-id') }}</label>
                                            <input name="national_id" class="form-control @error('national_id') is-invalid @enderror" value="{{ old('national_id') }}" type="number"  placeholder="{{ __('sick-leave.national-id') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.nationality') }}</label>
                                            <input name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ old('nationality') }}" type="text"  placeholder="{{ __('sick-leave.nationality') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.employer') }}</label>
                                            <input name="employer" class="form-control @error('employer') is-invalid @enderror" value="{{ old('employer') }}" type="text"  placeholder="{{ __('sick-leave.employer') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.physician-name') }}</label>
                                            <input name="physician_name" class="form-control @error('physician_name') is-invalid @enderror" value="{{ old('physician_name') }}" type="text"  placeholder="{{ __('sick-leave.physician-name') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.position') }}</label>
                                            <input name="position" class="form-control @error('position') is-invalid @enderror" value="{{ old('position') }}" type="text"  placeholder="{{ __('sick-leave.position') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('sick-leave.medical-complex') }}</label>
                                            <input name="medical_complex" class="form-control @error('medical_complex') is-invalid @enderror" value="{{ old('medical_complex') }}" type="text"  placeholder="{{ __('sick-leave.medical-complex') }}">
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 w-15"><i class="ti-plus"></i> {{ __('sick-leave.create') }}</button>
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
