<div class="sidebar">
    <table class="table table-striped table-hover sidebar-table">
        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is('admin')) ? 'active' : ''}}">
                <a href="{{ route('dashboard') }}" class="text-light">
                    <div class="col-12">
                        <i class="fa fa-dashboard"></i>
                        <div class="d-none d-lg-inline-block">داشبورد</div>
                    </div>
                </a>
            </td>
        </tr>
        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is(['admin/order'])) ? 'active' : ''}}">
                <a href="#" id="products-menu">
                    <div class="col-12">
                        <i class="fa fa-list-alt"></i>
                        <div class="d-none d-lg-inline-block">لیست سفارشات</div>
                        {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                    </div>
                </a>
            </td>
        </tr>
        <tr></tr>
        <tr class="d-none" id="sub-menu">
            <td>
                <table class="col-12">
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/order'])) ? 'active' : ''}}">
                            <a href="{{ route('total.orders') }}">
                                <div class="col-12">
                                    <i class="fa fa-list-ol"></i>
                                    <div class="d-none d-lg-inline-block">کل سفارشات</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/order/status/*'])) ? 'active' : ''}}">
                            <a href="{{ route('status-filtered.orders',['statusId'=>1]) }}">
                                <div class="col-12">
                                    <i class="fa fa-refresh"></i>
                                    <div class="d-none d-lg-inline-block">سفارشات جدید</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    {{--@foreach($types as $type)--}}
                    {{--<tr class="sidebar-tr">--}}
                        {{--<td class="sidebar-td {{(request()->is(['list','collection-edit/*','collection/*','info/*'])) ? 'active' : ''}}">--}}
                            {{--<a href="#">--}}
                                {{--<div class="col-12">--}}
                                    {{--<i class="fa fa-flag"></i>--}}
                                    {{--<div class="d-none d-lg-inline-block">{{ $type->title }}</div>--}}
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                {{--</div>--}}
                            {{--</a>--}}
                        {{--</td>--}}
                    {{--</tr>--}}
                        {{--@endforeach--}}
                </table>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is(['advanced-search','total-search','collections-search'])) ? 'active' : ''}}">
                <a href="{{ route('users.list') }}">
                    <div class="col-12">
                        <i class="fa fa-users"></i>
                        <div class="d-none d-lg-inline-block">مدیریت کاربران</div>
                    </div>
                </a>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is('collection-create')) ? 'active' : ''}}">
                <a href="#">
                    <div class="col-12">
                        <i class="fa fa-object-group"></i>
                        <div class="d-none d-lg-inline-block">مدیریت محصولات</div>
                    </div>
                </a>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is(['total-infos'])) ? 'active' : ''}}">
                <a href="#">
                    <div class="col-12">
                        <i class="fa fa-image"></i>
                        <div class="d-none d-lg-inline-block">مدیریت صفحات</div>
                    </div>
                </a>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is('editpass')) ? 'active' : ''}}">
                <a href="#">
                    <div class="col-12">
                        <i class="fa fa-key"></i>
                        <div class="d-none d-lg-inline-block">تغییر رمز عبور</div>
                    </div>
                </a>
            </td>
        </tr>
        <tr class="sidebar-tr">
            <td class="sidebar-td">
                <a href="{{ route('admin.logout') }}">
                    <div class="col-12">
                        <i class="fa fa-sign-out"></i>
                        <div class="d-none d-lg-inline-block">خروج</div>
                    </div>
                </a>
            </td>
        </tr>
    </table>
</div>

<script>
    $('#products-menu').on('click', function(e) {
        $('#sub-menu').toggleClass("d-none sub-menu");
        e.preventDefault();
    });
</script>