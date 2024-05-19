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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- Scripts -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
     <!-- main css -->
     <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body style="position: relative;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color:#FBFBFB;box-shadow: 0px 4px 4px 0px rgba(147, 145, 145, 0.25);">
            <div class="container">
                <a class="navbar-brand text-dark fw-bold" href="{{ url('/') }}">
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
                                    <a class="nav-link text-dark fs-5" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-dark" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        $( "#ielts_exam_date" ).datepicker({
        dateFormat: "dd-mm-yy"
        });
    });
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    var time =600*1000;
    //make it a named function
    $(function poll(){
        //this makes the setTimeout a self run function it runs the first time always
        setTimeout(function(){
            $.ajax({
                url:'{{url('/')}}/check-time', // Url to which the request is send
                type: "POST",             // Type of request to be send, called as method
                data : "",
                success: function()   // A function to be called if request succeeds
                {
                    console.log("Ajax Processed");
                    location.reload();
                },
                //this is where you call the function again so when ajax complete it will cal itself after the time out you set.
                complete: poll
            });
            //end setTimeout and ajax 
        },time);
        //end poll function
    });
</script>


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
<script>
    $(document).ready(function(){
        $("#contact_number").change(function(){
            $.ajax({
                type:'POST',
                url:"{{route('frontend.get.user.info.by.contact.number')}}",
                data:{"action":"post", contact_number:$("#contact_number").val()},
                dataType: 'json',
                headers: {
                    "Accept": "application/json"
                },
                success: function(data){		
                    console.log(data.find_data.user_info);
                    if(data.find_data != null){
                        $("#full_name").val(data.find_data.full_name);
                        $("#email").val(data.find_data.email);
                        $("#howtoknow").val(data.find_data.user_info.how_you_know);
                        $("#purpose_of_ielts").val(data.find_data.user_info.purpose_of_ielts);
                        $("#occupation").val(data.find_data.user_info.occupation);
                        $("#location").val(data.find_data.user_info.location);
                        $("#address").val(data.find_data.user_info.address);
                        $("#organization").val(data.find_data.user_info.organization);
                        $("#date_of_birth").val(data.find_data.user_info.date_of_birth);
                        $("#education").val(data.find_data.user_info.education);
                        $("#expected_country").val(data.find_data.user_info.expected_country);
                        $("#expected_score").val(data.find_data.user_info.expected_score);
                        $("#expected_score").val(data.find_data.user_info.expected_score);
                        $("#assign_advisor").val(data.find_data.assign_advisor);
                    }
                },
                error: function(data){
                    console.log($data);
                }
            });
            return false;
        });
    });
</script>
<script  src="{{asset('frontend/js/manager_sidebar.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
</body>
</html>
