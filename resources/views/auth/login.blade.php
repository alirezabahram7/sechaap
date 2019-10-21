<!DOCTYPE html>
<html lang="en" >
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
    <div id="formContent">

        <!-- Icon -->
        <div class="fadeIn first pt-5" style="padding-top:20px;">
            <img class="img-responsive login-icon" src="/mainImg/login.svg" id="icon" alt="User Icon"/>
        </div>

        <!-- Login Form -->
        <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
            {{ csrf_field() }}
            <input type="text" id="login" class="fadeIn second" name="email" placeholder="نام کاربری">
            <input type="password" id="password" class="fadeIn third" name="password" placeholder="رمز عبور">
            <button type="submit" class="fadeIn fourth " style="font-family: 'IRANSansWeb';">ورود</button>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
            <a class="underlineHover text-secondary" href="{{ route('password.request') }}" style="font-family: 'IRANSansWeb';">رمز عبور را فراموش کرده ام</a>
        </div>

    </div>
</div>

</body>
</html>