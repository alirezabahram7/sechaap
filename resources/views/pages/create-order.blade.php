@extends('layouts.app')

@section('content')
    <div class="container bg-secondary-color p-4 mb-3">
        <div class="d-flex justify-content-end">
        <div class="position-fixed itembox bg-warning  z-depth-0 text-center">
            <strong>
            قیمت :
            </strong>
            <br>
            {{ \Morilog\Jalali\CalendarUtils::convertNumbers($type->price) }}تومان

        </div>
        </div>
        <form action="{{ route('add.to.cart') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column">
                <div class="form-header-title">
                    ایجاد سفارش جدید
                    ({{ $type->title }})
                </div>
                <input type="text" name="type_id" value="{{ $type->id }}" hidden>
                <input type="text" name="type_title" value="{{ $type->title }}" hidden>
                <input type="text" name="price" value="1000" hidden>
                <div class="row controls ">
                    <div class="form-group my-form-group">
                        <label for="avatar">بارگزاری فایل </label>
                        <div class="input-group entry justify-content-center">
                            <input type="file" class="btn btn-primary browndiv text-right"
                                   name="file[]" id="file[]">
                            <button class="btn btn-success btn-add" type="button">
                                +
                            </button>
                        </div>

                    </div>
                </div>
                <div class="container">
                    @foreach($additionTypes as $i=>$additionType)
                        <div class="itembox">
                            <div class="d-flex justify-content-start type-divider">
                                <h5>
                                    {{ $additionType->title }}
                                    <i class="fa fa-arrow-circle-down"></i>
                                </h5>
                            </div>
                            @foreach($additions as $addition)
                                @if($addition->addition_type_id == $additionType->id)
                                    <div class="d-flex justify-content-start mt-4 col-3">
                                        <div class="col-9 text-right">
                                            <label for="title"> {{ $addition->title }} </label>
                                            @if($addition->image!=null)
                                                <img src="{{asset('./files/'.$addition->image)}}"
                                                     class="col-5">
                                            @endif
                                            @if($addition->description!='')
                                                <div class="helper"><i class="fa fa-question w-25">
                                                    </i>
                                                    <span class="helper-text">{{ $addition->description }}</span>
                                                </div>
                                            @endif
                                        </div>

                                        <div class="col-2">
                                            <input type="radio" class="my-checkbox" name="addition[{{$i}}]"
                                                   value="{{ $addition->id }}">
                                            <input type="text" name="addition_type[{{$addition->id}}]"
                                                   value="{{ $addition->title }}" hidden>
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
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
                        <button type="submit" class="btn btn-danger justify-content-center my-btn">افزودن به سبد خرید
                        </button>
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
