@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="" style="border:none; box-shadow: 0px 3px 14px 0px rgba(130, 125, 125, 0.08);">
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset('frontend/images/ceo.jpg')}}" alt="" class="" style="width: 100%;">
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">
                    <div class="px-3" style="margin-top: 25%">
                        <h2 class="fw-bold">Welcome👋</h2>
                        <p class="fs-5 mb-5">British American Resource Center</p>
                        @include('admin.partials.flash-message')
                        @isset($route)
                            <form method="POST" action="{{ $route }}">
                        @else
                            <form method="POST" action="{{ route('login') }}">
                        @endisset
                    
                        @csrf
                        <div class="form-group">
                            <label for="email" class="col-form-label text-md-end" style="font-size: 16px; font-weight: 600;">{{ __('Email') }}</label>
                            <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group mt-2">
                            <label for="password" class="col-form-label text-md-end" style="font-size: 16px; font-weight: 600;">{{ __('Password') }}</label>
                            <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="******">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-5">
                            <button type="submit" class="w-75 text-light fw-bold py-2 fs-5 rounded" style="background: #035388; border:none;">
                                {{ __('Login') }}
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection