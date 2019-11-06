@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <?php
        $i = 1;
        ?>
        <div class=" d-flex justify-content-around mb-3">
            <div class="col-3">
                <div class="col-11 card border-primary bg-whitesmoke ">
                    <div class="mt-3 mb-3">
                        <div class="d-flex justify-content-center">
                            <img class="thumbnail img-circle w-25" src="/pic/nopro.png">
                        </div>
                        <p class="text-center">
                            {{ auth()->user()->name }}
                        </p>
                        <p class="text-center">
                            {{ auth()->user()->phone }}
                        </p>
                        <p class="text-center">
                            {{ auth()->user()->created_at }}
                        </p>

                        <div class="d-flex justify-content-center">
                            <a  class="btn btn-danger" href="{{ route('edit.pass') }}">
                                تغییر رمز عبور
                            </a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-9 dashboard-content">
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
                            هزینه پرداختی
                        </th>
                        <th class="table-th">
                            تاریخ سفارش
                        </th>
                        <th class="table-th">
                            وضعیت سفارش
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orders as $j => $order)
                        <tr class="table-tr">
                            <td class="table-td">
                                {{$j+1}}
                            </td>
                            <td class="table-td">
                                {{ $order->product->type->title }}
                            </td>
                            <td class="table-td">
                                {{ $order->product->title }}
                            </td>
                            <td class="table-td">
                                {{ $order->price }}
                            </td>
                            <td class="table-td">
                                {{$order->created_at}}
                            </td>
                            <td class="table-td">
                                {{ $order->status->title }}
                            </td>
                        </tr>

                    @endforeach
                    </tbody>
                </table>

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