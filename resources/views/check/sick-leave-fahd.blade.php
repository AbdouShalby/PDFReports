@extends('check-layouts.app')
@section('content')
    <div class="row">
        <div class="col-12">
            @if(empty($data))
                <div class="row justify-content-center check-container sick-leave">
                    <div class="col-lg-6 my-3 p-3 border border-primary bg-transparent">
                        <h4 class="card-title text-dark">{{ __('check.sick-leave-fahd') }}</h4>
                        <span class="small">{{ __('check.fill-sick-leave') }}</span>
                        <form class="form mt-5" action="{{ route('get-sick-leave-fahd-data') }}" method="POST">
                            @if($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="small text-danger d-block">{{ $error }}</span>
                                @endforeach
                            @endif
                            @csrf
                            <input name="leave_id" type="text" class="form-control input-default my-3" placeholder="{{ __('check.leave-id') }}" required>
                            @error('leave_id')
                            <div class="alert alert-danger col-12 mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <input name="national_id" type="text" class="form-control input-default my-3" placeholder="{{ __('check.national-id') }}" required>
                            @error('national_id')
                            <div class="alert alert-danger col-12 mt-1" role="alert">
                                {{ $message }}
                            </div>
                            @enderror
                            <button class="btn btn-info" type="submit">{{ __('check.button') }}</button>
                        </form>
                    </div>
                </div>
            @endif
            @if(!empty($data))
                <div class="row justify-content-center check-container sick-leave">
                    <div class="col-lg-12 my-3 p-3 border border-info bg-white">
                        <div class="row mb-5">
                            <div class="col-lg-6">
                                <span class="d-block mb-2 mt-5 text-dark">{{ __('check.name') }}</span>
                                <span class="d-block text-primary">@if(app()->getLocale() == 'en') {{ $data->name_en }} @else {{ $data->name_ar }} @endif</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="d-block mb-2 mt-5 text-dark">{{ __('check.leave-id') }}:</span>
                                <span class="d-block text-primary">{{ $data->leave_id }}</span>
                            </div>
                        </div>
                        <div class="row my-5">
                            <div class="col-lg-6">
                                <span class="d-block mb-2 mt-5 text-dark">{{ __('check.status') }}</span>
                                <span class="d-block text-primary">{{ __('check.completed') }}</span>
                            </div>
                            <div class="col-lg-6">
                                <span class="d-block mb-2 mt-5 text-dark">{{ __('check.date') }}</span>
                                <span class="d-block text-primary">{{ \Carbon\Carbon::parse($data->created_at)->format('Y-m-d') }}</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <a href="{{ route('check-sick-leave-fahad') }}" class="btn btn-info">{{ __('check.back') }}</a>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
