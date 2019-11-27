<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/">
            <img class="logo-img" src="{{ asset('/mainImg/logo.jpg') }}" alt="سه چاپ">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown">
                    {{--<span class="text-danger">--}}
                        {{--صفحه مدیریت سه چاپ--}}
                    {{--</span>--}}
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">--}}
                        {{--<span class="text-danger">--}}
                            {{--درباره ما--}}
                        {{--</span>--}}
                    {{--</a>--}}
                {{--</li>--}}
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" href="#">--}}
                        {{--<span class="text-danger">--}}
                            {{--تماس با ما--}}
                        {{--</span>--}}
                    {{--</a>--}}
                {{--</li>--}}

            </ul>
            <form class="form-inline my-2 my-lg-0 d-md-flex justify-content-center">
                <input class="form-control mr-sm-2" type="search" placeholder="جستجو" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0 " type="submit">جستجو</button>
            </form>
        </div>
    </div>
</nav>
