<nav class="navbar navbar-expand-lg navbar-light bg-light text-danger">
    <div class="container-fluid d-flex justify-content-between">
        <div class="">
            <ul class="navbar-nav mr-auto list-group list-group-horizontal">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="fa fa-shopping-basket"></i>
                        <span class="text-danger">سبد خرید</span>
                    </a>
                </li>
                <li class="nav-item dropdown d-none d-lg-block">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="text-danger">
                        ورود یا ثبت نام</span>
                    </a>
                    <div class="dropdown-menu login-dropdown" aria-labelledby="navbarDropdown">
                        <form action="/login" method="post">
                            <div class="form-group">
                                <p>

                                    <input type="text" class="form-control" name="mobile" id="mobile" value=""
                                           placeholder="موبایل">
                                </p>
                                <p>
                                    <input type="password" class="form-control" name="password" id="password" value=""
                                           placeholder="رمزعبور">
                                </p>
                                <p class="fusion-remember-checkbox"><label for="fusion-menu-login-box-rememberme"><input
                                                name="rememberme" type="checkbox" id="fusion-menu-login-box-rememberme"
                                                value="forever"> مرا به خاطر بسپار</label></p><input type="hidden"
                                                                                                     name="fusion_woo_login_box"
                                                                                                     value="true">
                                <p class="fusion-login-box-submit"><input type="submit" name="wp-submit" id="wp-submit"
                                                                          class="button button-small default comment-submit"
                                                                          value="ورود"><input type="hidden"
                                                                                              name="redirect"
                                                                                              value="https://www.chapmatin.com/my-account/">
                                </p>
                            </div>
                        </form>
                        <a class="fusion-menu-login-box-register" href="/register"
                           title="ثبت نام">ثبت نام</a>
                    </div>
                </li>
                <li class="nav-item dropdown d-block d-lg-none col-sm-1"> </li>
                <li class="nav-item dropdown d-block d-lg-none">
                    <a class="nav-link" href="/login" role="button">
                         <span class="text-danger">
                        ورود یا ثبت نام</span>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <p class="p-5 align-middle d-none d-lg-block ">
                تماس باما: ۴۲۰۲ ۷۷۶۲-۰۲۱ (۴خط ویژه)|info@ChapMatin.com
            </p>
        </div>

    </div>
</nav>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="/">
        <img class="logo-img" src="{{ asset('/mainImg/logo.jpg') }}" alt="سه چاپ">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                         <span class="text-danger">
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
                    <a class="nav-link" href="#">
                        <span class="text-danger">
                            درباره ما
                        </span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="text-danger">
                            تماس با ما
                        </span>
                    </a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0 d-md-flex justify-content-center">
                <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">جستجو</button>
            </form>
        </div>
    </div>
</nav>





