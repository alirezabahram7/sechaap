@extends('layouts.admin.app')
@section('title','پیام های کاربران')
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
                        پیام
                    </th>
                    <th class="table-th">
                        فرستنده
                    </th>
                    {{--<th class="table-th">--}}
                        {{--شماره تماس--}}
                    {{--</th>--}}
                    <th class="table-th">
                        وضعیت عضویت
                    </th>
                    <th class="table-th">
                        پاسخ مدیر
                    </th>
                    <th class="table-th">
                        تاریخ
                    </th>
                    <th class="table-th">
                        عملیات
                    </th>
                </tr>
                </thead>
                <tbody>

                @foreach($messages as $j => $message)
                    <tr class="table-tr {{ $message->is_read == 0 ? 'td-text-danger':'' }} {{ $message->answer!=null ? 'td-text-success':'' }}">
                        <td class="table-td">
                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers($j+1) }}
                        </td>
                        <td class="table-td">
                            <a href="{{ route('admin.show.message',['id'=>$message->id]) }}">
                                {{ $message->title }}
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ route('admin.show.message',['id'=>$message->id]) }}">
                                {{ mb_substr($message->body,0,50) }} ...
                            </a>
                        </td>
                        <td class="table-td">
                            <a href="{{ route('admin.show.message',['id'=>$message->id]) }}">
                                {{ $message->user_name }}
                            </a>
                        </td>
                        {{--<td class="table-td">--}}
                            {{--{{\Morilog\Jalali\CalendarUtils::convertNumbers($message->phone)}}--}}
                        {{--</td>--}}
                        <td class="table-td">
                            @if($message->user_id > 0)
                                <span class="mybadge bg-success text-light">عضو</span>
                            @else
                                <span class="mybadge bg-secondary text-light">غیر عضو</span>
                            @endif
                        </td>
                        <td class="table-td">
                            {{ mb_substr($message->answer,0,50) }}...
                        </td>
                        <td class="table-td">
                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::forge($message->created_at)->format('%A, %d %B %y')) }}
                        </td>
                        <td class="table-td">
                            <a href="{{ route('admin.show.message',['id'=>$message->id]) }}">
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
            {{--<div class="d-flex justify-content-center my-pages">--}}
            {{--{{ $messages->render() }}--}}
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