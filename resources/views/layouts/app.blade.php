<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('layouts.header')
</head>
<body>
@include('layouts.navbar')
<div class="mt-3 d-flex flex-column justify-content-between h-100">
    <div class="">
        {{--@include('layouts.sidebar')--}}
        <div class="">
            {{--@include('layouts.message')--}}
            @yield('content')
        </div>
    </div>
    <div></div>
    <div class="">
        @include('layouts.footer')
    </div>
</div>
</body>
</html>
<script type="text/javascript" src="/js/jquery.min.js"></script>
@yield('script')
