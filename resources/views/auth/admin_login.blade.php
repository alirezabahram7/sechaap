<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ورود به پنل</title>
    <link rel="stylesheet" href="/css/slogin.css">
    <style>
        @font-face {
            font-family: 'IRANSansWeb';
            src: url("font/IRANSansWeb.woff") format("woff");
        }
    </style>
</head>

<body class="">

<div class="wrapper fadeInDown">
    <div class="login-box" id="formContent">

        <!-- Icon -->
        <div class="fadeIn first pt-5" style="padding-top:20px;">
                <img class="img-responsive login-icon" src="/mainImg/admin-login.ico" id="icon" alt="User Icon"/>
        </div>

        <!-- Login Form -->
            <form method="POST" action='{{ url("$url/login") }}' aria-label="{{ __('Login') }}">

                {{ csrf_field() }}
                <input type="text" id="login" class="fadeIn second" name="phone" placeholder="شماره موبایل">
                <input type="password" id="password" class="fadeIn third" name="password"
                       placeholder="رمز عبور">
                <button type="submit" class="fadeIn fourth " style="font-family: 'IRANSansWeb';"> ورود</button>
            </form>

                        {{--<a type="submit" class="underlineHover text-danger" href="{{ url("$url/register") }}"--}}
                           {{--style="font-family: 'IRANSansWeb';color: tomato">ثبت نام</a>--}}

            <!-- Remind Passowrd -->
            <div id="formFooter">
                <a class="underlineHover text-secondary" href="{{ route('password.request') }}"
                   style="font-family: 'IRANSansWeb';">رمز عبور را فراموش کرده ام</a>
            </div>

    </div>
</div>

</body>
</html>
