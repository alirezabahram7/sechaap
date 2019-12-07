@extends('layouts.admin.app')
@section('title','پیام کاربر')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                پیام کاربر :
                {{ $message->title  }}
                <br>
                <div class="badge badge-warning badge-pill">
                    {{ \Morilog\Jalali\CalendarUtils::convertNumbers(\Morilog\Jalali\Jalalian::forge($message->created_at)->format('%A, %d %B %y')) }}
                </div>
            </div>

            @include('layouts.message')
            <form action="{{ route('admin.update.message',['id' => $message->id]) }}" method="post" class="form-group"
                  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="">
                    <div class="d-md-flex d-sm-block justify-content-between">
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="user_name"> نام کاربر</label>
                            <input type="text" class="form-control my-form-control" name="title"
                                   value="{{ $message->user_name  }}" readonly>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="phone ">شماره تماس</label>
                            <input type="text" class="form-control my-form-control" name="phone "
                                   value="{{ $message->phone  }}" readonly>
                        </div>


                    </div>
                    <br>


                    <div class="form-group my-form-group col-10 text-center">
                        <label for="body">متن پیام</label>
                        <textarea type="text" class="form-control my-form-control" name="body"
                                  rows="6" readonly>{{ $message->body }}</textarea>
                    </div>
                    <br>
                    @if($message->user_id > 0)
                        <div class="form-group my-form-group col-10 text-center">
                            <label for="answer">پاسخ</label>
                            <textarea type="text" class="form-control my-form-control" name="answer"
                                      rows="6">{{ $message->answer }}</textarea>
                        </div>

                        <div class="row d-flex ">
                            <div class="form-group my-form-group mt-3">
                                <button type="submit" class="btn btn-danger justify-content-center my-btn">بروزرسانی
                                </button>
                            </div>
                        </div>
                    @else
                        <div class="text-center bg-main-color p-2 col-md-6 center badge-pill">
                            کاربر ، عضو نیست . امکان پاسخ به پیام وجود ندارد
                        </div>
                    @endif
                </div>
            </form>

        </div>

    </div>

    <script>
        $(function () {
            $(document).on('click', '.btn-add', function (e) {
                e.preventDefault();

                var controlForm = $('.controls:first'),
                    currentEntry = $(this).parents('.entry:first'),
                    newEntry = $(currentEntry.clone()).appendTo(controlForm);

                newEntry.find('input').val('');
                controlForm.find('.entry:not(:last) .btn-add')
                    .removeClass('btn-add').addClass('btn-remove')
                    .removeClass('btn-success').addClass('btn-danger')
                    .html('--');
            }).on('click', '.btn-remove', function (e) {
                $(this).parents('.entry:first').remove();

                e.preventDefault();
                return false;
            });
        });

    </script>

@endsection