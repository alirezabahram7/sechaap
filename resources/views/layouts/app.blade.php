<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>
<body>
@include('layouts.navbar')
<div class="mt-3">
    {{--@include('layouts.sidebar')--}}
    <div class="">
        {{--@include('layouts.message')--}}
        @yield('content')
    </div>
</div>
@include('layouts.footer')
</body>
</html>
