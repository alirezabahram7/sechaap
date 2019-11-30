@extends('layouts.admin.app')
@section('title','داشبورد')
@section('content')


    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="myTableBox">
            <table class="table table-striped table-hover bg-light list-table" id="myTable">
                <thead class="myTableHeader">
                <tr class="table-tr">
                    <th class="table-th">
                        ردیف
                    </th>
                    <th class="table-th">
                        نوع محصول
                    </th>
                    <th class="table-th">
                        نام محصول
                    </th>
                    <th class="table-th">
                        تعداد
                    </th>
                    <th class="table-th">
                        پرداختی
                    </th>
                    <th class="table-th">
                        کد رهگیری
                    </th>
                    <th class="table-th">
                        شماره تماس سفارش دهنده
                    </th>
                    <th class="table-th">
                        وضعیت عضویت
                    </th>
                    <th class="table-th">
                        تاریخ
                    </th>
                    <th class="table-th">
                        وضعیت سفارش
                    </th>
                    <th class="table-th">
                        عملیات
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($orders as $j => $order)
                    <tr class="table-tr">
                        <td class="table-td">
                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers($j+1) }}
                        </td>
                        <td class="table-td">
                            <a href="{{ route('edit.order',['id'=>$order->id]) }}">
                                {{ $order->product->type->title }}
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ route('edit.order',['id'=>$order->id]) }}">
                                {{ $order->product->title }}
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ route('edit.order',['id'=>$order->id]) }}">
                                {{\Morilog\Jalali\CalendarUtils::convertNumbers($order->numbers)}}
                            </a>
                        </td>
                        <td class="table-td">
                            {{\Morilog\Jalali\CalendarUtils::convertNumbers($order->price)}} تومان
                        </td>
                        <td class="table-td">
                            {{ $order->tracking_code }}
                        </td>
                        <td class="table-td">
                            {{\Morilog\Jalali\CalendarUtils::convertNumbers($order->phone)}}
                        </td>
                        <td class="table-td">
                            @if($order->user_id > 0)
                                <span class="mybadge bg-success text-light">عضو</span>
                            @else
                                <span class="bg-secondary text-light">غیر عضو</span>
                            @endif
                        </td>
                        <td class="table-td">
                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::forge($order->created_at)->format('%A, %d %B %y')) }}
                        </td>
                        <td class="table-td">
                            {{ $order->status->title }}
                        </td>
                        <td class="table-td">
                            <a href="{{ route('edit.order',['id'=>$order->id]) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
            {{--<div class="d-flex justify-content-center my-pages">--}}
            {{--{{ $orders->render() }}--}}
            {{--</div>--}}
        </div>
    </div>

    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
        });
        $('#myTable').DataTable({
            language: {
                processing: "در حال پردازش ...",
                search: "جستجو",
                lengthMenu: "نمایش _MENU_ ورودی",
                info: "نمایش ورودی  _START_  تا _END_ از _TOTAL_ ورودی",
                infoEmpty: "نمایش ورودی 0 تا 0 از 0 ورودی",
                infoFiltered: "_فیلتر شده ی _MAX_ ورودی در کل",
                infoPostFix: "",
                loadingRecords: "در حال بارگذاری رکوردها ...",
                zeroRecords: "هیچ",
                emptyTable: "جدول خالی",
                Show: "نمایش",
                paginate: {
                    first: "ابتدا",
                    previous: "قبلی",
                    next: "بعدی",
                    last: "آخر"
                },
                aria: {
                    sortAscending: "مرتب سازی صعودی :",
                    sortDescending: "مرتب سازی نزولی :"
                }
            }
        });
    </script>


@endsection