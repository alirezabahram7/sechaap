@extends('layouts.admin.app')
@section('title','لیست دسته بندی ها')
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
                        عنوان
                    </th>
                    <th class="table-th">
                         دسته بندی
                    </th>
                    <th class="table-th">
                        نوع
                    </th>
                    <th class="table-th">
                       قیمت پایه
                    </th>
                    <th class="table-th">
                        توضیحات
                    </th>
                    <th class="table-th">
                        اعمال
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($additions as $j => $addition)
                    <tr class="table-tr">
                        <td class="table-td">
                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers($j+1) }}
                        </td>
                        <td class="table-td">
                            <a href="{{ url('admin/edit-addition/'.$addition->id) }}">
                                {{ $addition->title }}
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ url('admin/edit-addition/'.$addition->id) }}">
                                @if($addition->type_id != null)
                                    {{ $addition->type->title }}
                                @else
                                    ---
                                @endif
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ url('admin/edit-addition/'.$addition->id) }}">
                                @if($addition->addition_type_id != null)
                                    {{ $addition->additionType->title }}
                                @else
                                    ---
                                @endif
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ url('admin/edit-addition/'.$addition->id) }}">
                                {{\Morilog\Jalali\CalendarUtils::convertNumbers($addition->price)}}
                            </a>
                        </td>
                        <td class="table-td">
                            {{ mb_substr($addition->description,0,20) }} ...
                        </td>

                        <td class="table-td">
                            <a href="{{url('admin/edit-addition/'.$addition->id) }}}}">
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
