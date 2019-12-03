<div class="form-header-title d-flex justify-content-between">
    <div>نام کاربر:   {{ $user->name }}</div>
    <div>موبایل:  {{ $user->phone }} </div>
    <div>تعداد سفارشات:  {{ $user->orders->count() }} </div>
    <div>تاریخ عضویت:  {{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::forge($user->created_at)->format('%A, %d %B %y'))  }} </div>
</div>
<div class="col-3 center">
<a href="{{ route('admin.edit.pass',['id'=>$user->id]) }}}" class="form-control bg-success text-center text-light " >
    تغییر رمز عبور
</a>
</div>