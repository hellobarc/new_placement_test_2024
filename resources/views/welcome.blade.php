@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div>
            <div class="row">
                <div class="col-md-10 mx-auto">
                    <div style="border:none; border-radius: 20px;box-shadow: 0px 3px 14px 0px rgb(84 75 75 / 14%);" class="mt-5">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="{{asset('frontend/images/login-img.svg')}}" alt="" class="" style="width: 100%; border-left-top-radius:5px; border-bottom-left-radius: 20px; border-top-left-radius: 20px;">
                            </div>
                            <div class="col-md-6">
                                <div style="margin-top: 5%; background: var(--GlobalColors-Neutral-0, #FFF);border-bottom-right-radius: 20px; border-top-right-radius: 20px;">
                                    <img src="{{asset('frontend/images/full_logo.png')}}" alt="" style="width: 40%;" class="ms-4">
                                    {{-- <h2 class="fw-bold">Welcome👋</h2> --}}
                                    <h2 class="fw-bold mt-4 ms-5" style="color: #50509C;font-size: 1rem;font-weight: 600;line-height: 150%;">Welcome to the Placement <br> Test Portal</h2>
                                
                                    @include('admin.partials.flash-message')
                                    @isset($route)
                                        <form method="POST" action="{{ $route }}">
                                    @else
                                        <form method="POST" action="{{ route('login') }}">
                                    @endisset
                                
                                    @csrf
                                    <div class="form-group ms-5 mt-3">
                                        <label for="email" class="col-form-label text-md-end text-secondary" style="font-size: 14px; font-weight: 500;">{{ __('Email') }}</label>
                                        <input id="email" type="email" class="form-control w-75 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-2 ms-5">
                                        <label for="password" class="col-form-label text-md-end text-secondary" style="font-size: 14px; font-weight: 500;">{{ __('Password') }}</label>
                                        <input id="password" type="password" class="form-control w-75 @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="******">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mt-5 ms-5">
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
            </div>
        </div>
    </div>
</section>
@endsection