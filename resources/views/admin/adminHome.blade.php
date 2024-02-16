@extends('layouts.app')
  
@section('content')
<div class="container-fluid">
    <div class="row flex-nowrap">
        @include('admin.partials.left-sidebar')
        <div class="col py-3">
            @yield('main-admin-content')
        </div>
    </div>
</div>
@endsection