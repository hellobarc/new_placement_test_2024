<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Placement Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
  </head>
  <body>
    <section class="login-full-div">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <p class="login-quote">
                        Welcome to the first step of your dream journey! <br> You’ve made the perfect choice to be here!
                    </p>
                    <img src="{{asset('frontend/images/login-img.png')}}" alt="" class="main-img">
                </div>
                <div class="col-md-4">
                    <div class="form-div">
                        <img src="{{asset('frontend/images/full_logo.png')}}" alt="" style="width: 50%;" class="">
                        {{-- <h2 class="fw-bold">Welcome👋</h2> --}}
                        <h2 class="fw-bold mt-4" style="color: #50509C;font-size: 1rem;font-weight: 600;">Welcome to the Placement <br> Test Portal</h2>
                    
                        @include('admin.partials.flash-message')
                        @isset($route)
                            <form method="POST" action="{{ $route }}">
                        @else
                            <form method="POST" action="{{ route('login') }}">
                        @endisset
                    
                        @csrf
                        <div class="form-group mt-3">
                            <label for="email" class="pb-0 col-form-label text-md-end text-secondary fw-bold" style="font-size: 14px; font-weight: 500;">{{ __('Email') }}</label><br>
                            <input id="email" type="email" class="w-75 @error('email') is-invalid @enderror" name="email" style="border: 1px solid rgba(70, 70, 119, 0.50);padding: 8px 10px; font-size: 14px;" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter your email address">
    
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
    
                        <div class="form-group mt-2">
                            <label for="password" class="pb-0 col-form-label text-md-end text-secondary fw-bold" style="font-size: 14px; font-weight: 500;">{{ __('Password') }}</label><br>
                            <input id="password" type="password" class="w-75 @error('password') is-invalid @enderror" name="password" style="border: 1px solid rgba(70, 70, 119, 0.50);padding: 8px 10px; font-size: 14px;" required autocomplete="current-password" placeholder="******">
    
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="mt-4">
                            <button type="submit" class="w-75 text-light py-2" style="background: #32327B; border:none; font-size:1.125rem; font-weight:600;">
                                {{ __('Login') }}
                            </button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>