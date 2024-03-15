@extends('layouts.app')

@section('content')
<section style="background: #eae9e6; height:100vh">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card" style="position: absolute;top: 50%;left: 50%;transform: translate(-50%, -50%); width: 25%">
                    <div class="card-body p-5">
                       
                        {{-- <p><i class="bi bi-house-lock"></i></p> --}}
                        <h2>Welcome</h2>
                        <p>British American Resource Center</p>
                        @include('admin.partials.flash-message')
                        @isset($route)
                            <form method="POST" action="{{ $route }}">
                        @else
                            <form method="POST" action="{{ route('login') }}">
                        @endisset
                        
                            @csrf

                            <div class="form-group">
                                <label for="email" class="col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password" class="col-form-label text-md-end">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="******">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <div class="form-check mt-3">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                            </div> --}}
                            <div class="text-center mt-3">
                                <button type="submit" class="col-md-6 text-light fw-bold fs-4 rounded" style="background: rgb(121,38,225); border:none;">
                                    {{ __('Login') }}
                                </button>
                            </div>
                            {{-- <div class="mt-3">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div> --}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection