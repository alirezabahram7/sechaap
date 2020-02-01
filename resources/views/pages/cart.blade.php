@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <?php
        $i = 1;
        ?>
        <div class=" d-md-flex justify-content-around d-sm-block mb-3 ">
            <div class="col-md-9 col-sm-12 dashboard-content">
                <div class="form-header-title text-light">
             سبد خرید
                </div>
            @if($orders)
                    @foreach($orders as $i=>$order)
                        <div class="itembox">
                            <div class="d-flex justify-content-between">
                                <div class="col-8">
                                    <div class="row">
                                        <strong> نوع سفارش : </strong>
                                        {{ isset($order['type_title']) ? $order['type_title']:'-' }}
                                    </div>
                                    <div class="row">
                                        <strong> عنوان محصول: </strong>
                                        {{ isset($order['product_name']) ? $order['product_name']:'سفارشی' }}
                                    </div>
                                    <div class="row">
                                        <strong>قیمت کل : </strong>
                                        {{ isset($order['price']) ? \Morilog\Jalali\CalendarUtils::convertNumbers($order['price']):0 }}
                                        تومان
                                    </div>
                                    @if(isset($order['addition']))
                                        <div class="row">
                                            <strong>مشخصات: </strong>
                                            @foreach($order['addition'] as $addition)
                                                {{isset($order['addition_type']) ? $order['addition_type'][$addition]:''}}
                                                -
                                            @endforeach
                                        </div>
                                    @endif
                                    <div class="row">
                                        <strong> توضیحات: </strong>
                                        {{$order['description']}}
                                    </div>
                                </div>
                                <div>
                                    <div class="">
                                        @if(isset($order['photo']))
                                            <img src="{{asset('./files/'.$order['photo'])}}"
                                                 class="w-50">
                                        @else
                                            <img src="{{asset('./mainImg/custom.png')}}"
                                                 class="w-50">
                                        @endif
                                    </div>
                                    <div class="services-icons">
                                        <a href="{{ route('remove.from.cart',['index'=>$i]) }}">
                                            <div class="d-flex flex-column justify-content-between">
                                                <div>
                                                    <i class="fa fa-trash w-25 font-weight-bolder "></i>
                                                </div>
                                                <div>
                                                    <span class="text-danger">حذف از سبد خرید</span>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    @endforeach
                <div class="d-flex justify-content-center">
                    <form action="{{ route('order.store') }}" method="post">
                        @csrf
                        <div class="row d-flex ">
                            <div class="form-group my-form-group mt-3">
                                <button type="submit" class="btn btn-danger justify-content-center my-btn">پرداخت
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                @else
                    <div class="text-center text-dark">
                    <strong class="">سبد خرید خالی ست</strong>
                    </div>
                @endif
                {{--                <div class="myTableBox col-12">--}}
                {{--                    <table class="table table-striped table-hover bg-light list-table" id="myTable">--}}
                {{--                        <thead class="myTableHeader">--}}
                {{--                        <tr class="table-tr">--}}
                {{--                            <th class="table-th">--}}
                {{--                                ردیف--}}
                {{--                            </th>--}}
                {{--                            <th class="table-th">--}}
                {{--                                نوع--}}
                {{--                            </th>--}}
                {{--                            <th class="table-th">--}}
                {{--                                نام محصول--}}
                {{--                            </th>--}}
                {{--                            <th class="table-th">--}}
                {{--                                هزینه پرداختی--}}
                {{--                            </th>--}}
                {{--                            <th class="table-th">--}}
                {{--                                توضیحات--}}
                {{--                            </th>--}}
                {{--                            <th class="table-th">--}}
                {{--                                حذف--}}
                {{--                            </th>--}}

                {{--                        </tr>--}}
                {{--                        </thead>--}}
                {{--                        <tbody>--}}
                {{--                        @if($orders)--}}
                {{--                            @foreach($orders as $j => $order)--}}
                {{--                                <tr class="table-tr">--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        {{\Morilog\Jalali\CalendarUtils::convertNumbers($j+1)}}--}}
                {{--                                    </td>--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        {{ isset($order['type_title']) ? $order['type_title']:'-' }}--}}
                {{--                                    </td>--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        {{ isset($order['product_name']) ? $order['product_name']:'-' }}--}}
                {{--                                    </td>--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        --}}{{--                                    {{ \Morilog\Jalali\CalendarUtils::convertNumbers($order->price) }}--}}
                {{--                                    </td>--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        {{$order['description']}}--}}
                {{--                                    </td>--}}
                {{--                                    <td class="table-td">--}}
                {{--                                        <i class="fa fa-trash"></i>--}}
                {{--                                    </td>--}}

                {{--                                </tr>--}}

                {{--                            @endforeach--}}
                {{--                        @endif--}}
                {{--                        </tbody>--}}
                {{--                    </table>--}}
                {{--                </div>--}}
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
