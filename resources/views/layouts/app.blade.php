<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'British American Resource Center') }}</title> --}}
    <title>British American Resource Center</title>
    <link rel="icon" type="image/x-icon" href="{{asset('frontend/images/logo.png')}}">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Bootstrap CSS -->
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> --}}
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <!-- Scripts -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="position: relative;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background: rgb(121,38,225);
        background: linear-gradient(110deg, rgba(121,38,225,1) 68%, rgba(199,161,246,1) 100%);">
            <div class="container">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Laravel') }} --}}
                    <span><img src="{{asset('frontend/images/logo.png')}}" alt="" style="width: 3%;"></span>
                    <span>British American Resource Center</span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-light" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-dark fw-bold" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js "></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

    <script>
        $( function() {
          $( "#date_of_birth" ).datepicker({
            dateFormat: "dd-mm-yy"
            });
        } );
        </script>
  <script src="{{asset('admin/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('ck');
    </script>
    <script src="{{asset('frontend/js/question_js.js')}}"></script>

{{-- push notification --}}
  <script src="https://js.pusher.com/8.2.0/pusher.min.js"></script>

<script>
    // Send the Ajax request
    $(document).ready(function (){
            $('#onclickTableShow').click(function(){
                $('#exampleModal').modal('show');
           
            })
            
    })
    
</script>

{{-- <script src="{{asset('js/app.js')}}"></script> --}}
<script>
    window.onload=function(){
    Echo.channel('student_notification')
    .listen('.Student_PushNotification', (e) => {
        // console.log(e.message.length)
        // e.forEach(element => {
        //     console.log(element.length)
        // })

        let notification_count = e.message.length;
        document.getElementById("notification_count").innerHTML = notification_count;
        
    
    });
// }
//     window.onload=function(){
    Echo.channel('FrontDesk_Notification')
    .listen('.FrontDeskNotification', (e) => {
        // console.log(e.message.length)
        // e.forEach(element => {
        //     console.log(element.length)
        // })

        let front_notification_count = e.data.length;
        document.getElementById("front_notification_count").innerHTML = front_notification_count;
        
    
    });
}
</script>
<script src="{{asset('frontend/ckeditor/ckeditor.js')}}"></script>
<script>
    CKEDITOR.replace('ck');
</script>

<script src="{{asset('frontend/js/main.js')}}"></script>
<script  src="{{asset('frontend/js/manager_sidebar.js')}}"></script>
</body>
</html>
