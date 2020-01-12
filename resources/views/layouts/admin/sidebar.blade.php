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
                <a href="#" id="orders-menu">
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
            <td class="sidebar-td {{(request()->is(['admin/users','admin/users/*'])) ? 'active' : ''}}">
                <a href="{{ route('users.list') }}">
                    <div class="col-12">
                        <i class="fa fa-users"></i>
                        <div class="d-none d-lg-inline-block">مدیریت کاربران</div>
                    </div>
                </a>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is(['admin/product/create','admin/product' ,'admin/product/edit/*'])) ? 'active' : ''}}">
                <a href="#" id="products-menu">
                    <div class="col-12">
                        <i class="fa fa-shopping-bag"></i>
                        <div class="d-none d-lg-inline-block">مدیریت محصولات</div>
                        {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                    </div>
                </a>
            </td>
        </tr>
        <tr></tr>
        <tr class="d-none" id="psub-menu">
            <td>
                <table class="col-12">
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/product/create'])) ? 'active' : ''}}">
                            <a href="{{ route('admin.create.product') }}">
                                <div class="col-12">
                                    <i class="fa fa-plus-square"></i>
                                    <div class="d-none d-lg-inline-block">افزودن محصول جدید</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/product'])) ? 'active' : ''}}">
                            <a href="{{ route('admin.products') }}">
                                <div class="col-12">
                                    <i class="fa fa-th-list"></i>
                                    <div class="d-none d-lg-inline-block">لیست  محصولات</div>
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
            <td class="sidebar-td {{(request()->is(['admin/type/create','admin/type' ,'admin/type/edit/*','admin/addition/create'])) ? 'active' : ''}}">
                <a href="#" id="categories-menu">
                    <div class="col-12">
                        <i class="fa fa-cog"></i>
                        <div class="d-none d-lg-inline-block">مدیریت دسته بندی ها</div>
                        {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                    </div>
                </a>
            </td>
        </tr>
        <tr></tr>
        <tr class="d-none" id="csub-menu">
            <td>
                <table class="col-12">
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/type/create'])) ? 'active' : ''}}">
                            <a href="{{ url('admin/type/create') }}">
                                <div class="col-12">
                                    <i class="fa fa-plus-square"></i>
                                    <div class="d-none d-lg-inline-block">افزودن دسته بندی جدید</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/type'])) ? 'active' : ''}}">
                            <a href="#">
                                <div class="col-12">
                                    <i class="fa fa-th-list"></i>
                                    <div class="d-none d-lg-inline-block">لیست  دسته بندی ها</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/addition/create'])) ? 'active' : ''}}">
                            <a href="#">
                                <div class="col-12">
                                    <i class="fa fa-cubes"></i>
                                    <div class="d-none d-lg-inline-block">افزودن نوع</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is(['admin/image', 'admin/text'])) ? 'active' : ''}}">
                <a href="#" id="pages-menu">
                    <div class="col-12">
                        <i class="fa fa-paperclip"></i>
                        <div class="d-none d-lg-inline-block">مدیریت صفحات</div>
                        {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                    </div>
                </a>
            </td>
        </tr>
        <tr></tr>
        <tr class="d-none" id="pgsub-menu">
            <td>
                <table class="col-12">
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/image'])) ? 'active' : ''}}">
                            <a href="{{ route('admin.edit.images') }}">
                                <div class="col-12">
                                    <i class="fa fa-image"></i>
                                    <div class="d-none d-lg-inline-block">بنرهاو تصاویر</div>
                                    {{--<div class="d-none d-lg-inline-block">لیست سفارشات</div>--}}
                                </div>
                            </a>
                        </td>
                    </tr>
                    <tr class="sidebar-tr">
                        <td class="sidebar-td {{(request()->is(['admin/text'])) ? 'active' : ''}}">
                            <a href="{{ route('admin.edit.texts') }}">
                                <div class="col-12">
                                    <i class="fa fa-file-text"></i>
                                    <div class="d-none d-lg-inline-block">متن ها</div>
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
            <td class="sidebar-td {{(request()->is(['admin/message','admin/message/*'])) ? 'active' : ''}}">
                <a href="{{ route('admin.messages.list') }}">
                    <div class="col-12">
                        <i class="fa fa-envelope"></i>
                        <div class="d-none d-lg-inline-block">پیام های کاربران</div>
                        <div class="badge badge-pill badge-warning">{{ \Morilog\Jalali\CalendarUtils::convertNumbers($unreadMessages) }}</div>
                    </div>
                </a>
            </td>
        </tr>

        <tr class="sidebar-tr">
            <td class="sidebar-td {{(request()->is('admin/edit-admin-pass/*')) ? 'active' : ''}}">
                <a href="{{ route('edit.admin.pass') }}">
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
    $('#orders-menu').on('click', function(e) {
        $('#sub-menu').toggleClass("d-none sub-menu");
        e.preventDefault();
    });
    $('#products-menu').on('click', function(e) {
        $('#psub-menu').toggleClass("d-none sub-menu");
        e.preventDefault();
    });

    $('#pages-menu').on('click', function(e) {
        $('#pgsub-menu').toggleClass("d-none sub-menu");
        e.preventDefault();
    });

    $('#categories-menu').on('click', function(e) {
        $('#csub-menu').toggleClass("d-none sub-menu");
        e.preventDefault();
    });
</script>
