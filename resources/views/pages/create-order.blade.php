@extends('layouts.app')

@section('content')
    <div class="container bg-secondary-color p-4 mb-3">
        <form action="#" class="form-group">
            <div class="d-flex flex-column" >
                <div class="form-header-title">
                    ایجاد سفارش جدید
                    ({{ $type->title }})
                </div>

                <div class="row controls ">
                    <div class="form-group my-form-group">
                        <label for="avatar">بارگزاری فایل </label>
                        <div class="input-group entry justify-content-center">
                            <input type="file" class="btn btn-primary browndiv text-right"
                                   name="file[]" id="avatar" accept="{{ $ext }}">
                            <button class="btn btn-success btn-add" type="button">
                                +
                            </button>
                        </div>

                    </div>

                </div>
{{--                    <div class="row">--}}
{{--                        <div class="form-group my-form-group col-10">--}}
{{--                            <label for="description">آدرس</label>--}}
{{--                            <textarea type="text" class="form-control my-form-control" name="description"--}}
{{--                                      rows="3">{{old('description')}}</textarea>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                <div class="container mr-5">
                @foreach($additionTypes as $additionType)
                    <div class="d-flex justify-content-start type-divider mt-5">
                        <h5>
                {{ $additionType->title }} :
                        </h5>
                    </div>
                    @foreach($additions as $addition)
                        @if($addition->addition_type_id == $additionType->id)
                            <div class="d-flex justify-content-start mt-4 mr-4">
                            <label for="title"> {{ $addition->title }} </label>
                                <div class="helpers-icons helper"><i class="fa fa-question">
                                    </i>
                                    <span class="helper-text">{{ $addition->description }}</span>
                                </div>
                            <input type="checkbox" class="my-checkbox" name="addition[]" value="{{ $addition->id }}">

                            </div>
                        @endif
                    @endforeach
                @endforeach
                </div>
                    <div class="row">
                        <div class="form-group my-form-group col-10">
                            <label for="description">توضیحات</label>
                            <textarea type="text" class="form-control my-form-control" name="description"
                                      rows="5">{{old('description')}}</textarea>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="form-group my-form-group mt-3">
                            <button type="submit" class="btn btn-danger justify-content-center my-btn">بروزرسانی</button>
                        </div>
                    </div>
            </div>
        </form>

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
