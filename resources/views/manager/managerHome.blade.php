@extends('layouts.app')
  
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        @include('manager.sidebar')
        <div class="col py-3">
            @yield('manager-content')
        </div>
    </div>
</div>
@endsection