<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>
<body>
@include('layouts.admin.navbar')
<div class="d-flex justify-content-between mt-3">
    @include('layouts.admin.sidebar')
    <div class="container col-9">
        @include('layouts.message')
        @yield('content')
    </div>
</div>
</body>
</html>