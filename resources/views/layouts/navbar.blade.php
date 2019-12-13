<nav class="navbar navbar-expand-lg navbar-light bg-light text-danger">
    <div class="container-fluid d-flex justify-content-between">
        <div class="">
            <ul class="navbar-nav mr-auto list-group list-group-horizontal">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-basket"></i>
                        <span class="">سبد خرید</span>
                    </a>
                </li>
                @if(!auth()->check())
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="">
                        ورود یا ثبت نام</span>
                        </a>
                        <div class="dropdown-menu login-dropdown bg-secondary-color" aria-labelledby="navbarDropdown">
                            <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                                {{ csrf_field() }}
                                <div class="form-group mt-3 ">
                                    <p>
                                        <input type="text" class="form-control col-8 center form-control {{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" id="phone" value=""
                                               placeholder="موبایل" required autofocus>
                                    </p>
                                    <p>
                                        <input type="password" class="form-control col-8 center {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" id="password"
                                               value=""
                                               placeholder="رمزعبور" required>
                                    </p>
                                    <p class="fusion-remember-checkbox text-center">
                                        <label
                                                for="fusion-menu-login-box-rememberme"><input
                                                    name="rememberme" type="checkbox"
                                                    id="fusion-menu-login-box-rememberme"
                                                    value="forever"> مرا به خاطر بسپار</label></p><input type="hidden"
                                                                                                         name="fusion_woo_login_box"
                                                                                                         value="true">
                                    <div class="center col-4">
                                        <input type="submit" name="wp-submit"
                                                                              id="wp-submit"
                                                                              class="button btn-outline-danger form-control"
                                                                              value="ورود">
                                    </div>
                                </div>
                            </form>
                            <div class="text-center mt-3">
                            <a class="text-light" href="/register"
                               title="ثبت نام">ثبت نام</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-block d-lg-none col-sm-1"></li>
                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link" href="/login" role="button">
                         <span class="">
                        ورود یا ثبت نام</span>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown d-none d-lg-block">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="">
                        {{ auth()->user()->name }}
                         </span>
                        </a>
                        <div class="dropdown-menu w-100 bg-whitesmoke text-md-center" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('profile') }}">پیگیری سفارشات</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('edit.pass') }}">تغییر رمز عبور</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/logout">خروج</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown d-block d-lg-none col-sm-1"></li>
                    <li class="nav-item dropdown d-block d-lg-none">
                        <a class="nav-link" href="{{ route('profile') }}" role="button">
                         <span class="">
                        {{ auth()->user()->name }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </div>
        <div>
            <p class="p-5 align-middle d-none d-lg-block ">
                {{ $texts[4]->text }}
            </p>
        </div>

    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="logo-img" src="{{ asset('/files/'.$images[4]->image) }}" alt="سه چاپ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="">
                            لیست قیمت ها
                        </span>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="">
                        محاسبه آنلاین چاپ کتاب و جزوه
                         </span>
                    </a>
                    <div class="dropdown-menu w-100 bg-whitesmoke text-md-center" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#">سیاه سفید</a>
                        <a class="dropdown-item" href="#">رنگی</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="">
                        محصولات
                         </span>
                    </a>
                    <div class="dropdown-menu w-100 bg-whitesmoke text-md-center" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'book'])}}">چاپ کتاب</a>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'thesis'])}}">چاپ پایان نامه</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'visit_card'])}}">چاپ کارت
                            ویزیت</a>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'envelope'])}}">چاپ پاکت نامه</a>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'factor'])}}">چاپ فاکتور</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'color'])}}">چاپ رنگی</a>
                        <a class="dropdown-item" href="{{route('order.create',['type'=>'plot'])}}">چاپ پلات - نقشه</a>
                        <a class="dropdown-item" href="{{ route('products',['type_id'=>2]) }}">چاپ اعلامیه</a>
                        <a class="dropdown-item" href="{{ route('products',['type_id'=>1]) }}">چاپ بنر</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{ route('products',['type_id'=>3]) }}">هدایای تبلیغاتی</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about.us') }}">
                        <span class="">
                            درباره ما
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('contact.us') }}">
                        <span class="">
                            تماس با ما
                        </span>
                    </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 d-md-flex justify-content-center" method="get" action="{{ route('code.search') }}">
                @csrf
                <input class="form-control mr-sm-2" name="tracking_code" type="search" placeholder="کدرهگیری را وارد کنید" aria-label="Search" >
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">جستجو</button>
            </form>
        </div>
    </div>
</nav>
@if ($errors->has('phone'))
<div class="alert alert-danger alert-dismissible fade show text-center" role="alert">
    {{ $errors->first('phone') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
@endif
@if ($errors->has('password'))
        {{ $errors->first('password') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif



