@extends('layouts.admin.app')
@section('title','مدیریت متن ها')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                مدیریت متن ها
            </div>
            @include('layouts.message')
            <form action="{{ route('admin.update.texts') }}" method="post" class="form-group"
                  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="">
                    @foreach($texts as $text)

                        <div class="form-group my-form-group col-10 text-center">
                            <label for="description">ویرایش متن {{ $text->persian_name }} </label>
                            <textarea type="text" class="form-control my-form-control" name="{{ $text->id }}"
                                      rows="10" >{{ $text->text }}</textarea>
                        </div>

                        <br>
                        <br>
                        <br>

                    @endforeach
                    <div class="row d-flex ">
                        <div class="form-group my-form-group mt-3">
                            <button type="submit" class="btn btn-danger justify-content-center my-btn">بروزرسانی
                            </button>
                        </div>
                    </div>
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