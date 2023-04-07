@php($title = 'all-review-reports')
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
                        <h4>{{ __('review-report.title') }}</h4>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-primary alert-dismissible fade show">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                            {{ $message }}
                        </div>
                    @endif
                    <div class="card-body">
                        <div class="basic-elements">
                            <form action="{{ route('update-review-report', $report->id) }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('review-report.national-id') }}</label>
                                            <input name="national_id" class="form-control @error('national_id') is-invalid @enderror" value="{{ $report->national_id }}" type="number" required placeholder="{{ __('review-report.national-id') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.national-type') }}</label>
                                            <input name="national_type" class="form-control @error('national_type') is-invalid @enderror" value="{{ $report->national_type }}" type="text" required placeholder="{{ __('review-report.national-type') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.name-en') }}</label>
                                            <input name="name_en" class="form-control @error('name_en') is-invalid @enderror" value="{{ $report->name_en }}" type="text"  placeholder="{{ __('review-report.name-en') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.name-ar') }}</label>
                                            <input name="name_ar" class="form-control @error('name_ar') is-invalid @enderror" value="{{ $report->name_ar }}" type="text"  placeholder="{{ __('review-report.name-ar') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.print-date') }}</label>
                                            <input name="print_date" class="form-control @error('print_date') is-invalid @enderror" value="{{ $report->print_date }}" type="date" required placeholder="{{ __('review-report.print-date') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.nationality') }}</label>
                                            <input name="nationality" class="form-control @error('nationality') is-invalid @enderror" value="{{ $report->nationality }}" type="text" required placeholder="{{ __('review-report.nationality') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.birth-date') }}</label>
                                            <input name="birth_date" class="form-control @error('birth_date') is-invalid @enderror" value="{{ $report->birth_date }}" type="date" required placeholder="{{ __('review-report.birth-date') }}">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label>{{ __('review-report.work') }}</label>
                                            <input name="work" class="form-control @error('work') is-invalid @enderror" value="{{ $report->work }}" type="text" required placeholder="{{ __('review-report.work') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.admission') }}</label>
                                            <input name="admission" class="form-control @error('admission') is-invalid @enderror" value="{{ $report->admission }}" type="date" required placeholder="{{ __('review-report.admission') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.discharge') }}</label>
                                            <input name="discharge" class="form-control @error('discharge') is-invalid @enderror" value="{{ $report->discharge }}" type="date" required placeholder="{{ __('review-report.discharge') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.details') }}</label>
                                            <textarea name="details" class="form-control @error('details') is-invalid @enderror" required placeholder="{{ __('review-report.details') }}">{{ $report->details }}</textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.signature') }}</label>
                                            <input name="signature" class="form-control @error('signature') is-invalid @enderror" type="file" placeholder="{{ __('review-report.signature') }}">
                                        </div>
                                        <div class="form-group">
                                            <label>{{ __('review-report.status') }}</label>
                                            <select class="form-control @error('status') is-invalid @enderror" name="status" required>
                                                <option {{ $report->status == 0 ? 'selected' : '' }}>Test 1</option>
                                                <option {{ $report->status == 1 ? 'selected' : '' }}>Test 2</option>
                                                <option {{ $report->status == 2 ? 'selected' : '' }}>Test 3</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-success btn-flat btn-addon m-b-10 m-l-5 w-15"><i class="ti-save"></i> {{ __('review-report.create') }}</button>
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
