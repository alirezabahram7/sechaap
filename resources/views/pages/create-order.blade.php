@extends('layouts.app')

@section('content')
    <div class="container bg-secondary-color p-4 mb-3">
        <div class="d-flex justify-content-end">
            <div class="position-fixed itembox bg-warning  z-depth-1-half text-center">
                <strong>
                    قیمت :
                </strong>
                <br>
{{--                <input type="text" name="price" class="w-25 bg-warning"  value="0" hidden>--}}
                {{ \Morilog\Jalali\CalendarUtils::convertNumbers($type->price) }} تومان
            </div>
        </div>
        <form id="formId" action="{{ route('add.to.cart') }}" method="post" class="form-group" enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column">
                <div class="form-header-title">
                    ایجاد سفارش جدید
                    ({{ $type->title }})
                </div>
                <input type="text" name="type_id" value="{{ $type->id }}" hidden>
                <input type="text" name="type_title" value="{{ $type->title }}" hidden>
                <input type="text" name="price" value="1000" hidden>
                @if(!$product)
                    <div class="row controls ">
                        <div class="form-group my-form-group">
                            <label for="avatar">بارگزاری فایل </label>
                            <div class="input-group entry justify-content-center">
                                <input type="file" class="btn btn-primary browndiv text-right"
                                       name="file[]" id="file[]" required>
                                <button class="btn btn-success btn-add" type="button">
                                    +
                                </button>
                            </div>

                        </div>
                    </div>
                @else
                    <div class="d-flex justify-content-center col-4">
                        <div class=" rounded border-secondary itembox">
                            <div class="">
                                <span class="">
                                    @if($product->photo)
                                        <img class="img-responsive my-circle-img"
                                             src="{{ asset('./files/'.$product->photo) }}">
                                    @else
                                        <img class="img-thumbnail rounded-circle rounded img-responsive my-circle-img"
                                             src="{{ asset('./pic/nopro.png') }}">
                                    @endif
                                </span>
                            </div>
                            <div class="text-center">
                            <span
                                class="info-title">{{ \Morilog\Jalali\CalendarUtils::convertNumbers($product->title) }}</span>
                            </div>
                        </div>
                    </div>
                    <input type="text" name="product_id" value="{{ $product->id }}" hidden>
                    <input type="text" name="product_name" value="{{ $product->title }}" hidden>
                    <input type="text" name="photo" value="{{ $product->photo }}" hidden>
                @endif
                @if($type->id == 1 or $type->id == 2)
                <div class="row">
                        <div class="form-group my-form-group col-4">
                            <label for="description">از طرف</label>
                            <input type="text" class="form-control my-form-control" name="from"
                                   required>{{old('from')}}</input>
                        </div>
                    <div class="form-group my-form-group col-4">
                        <label for="description">برای</label>
                        <input type="text" class="form-control my-form-control" name="to"
                               required>{{old('to')}}</input>
                    </div>
                    @if($type->id == 1)
                    <div class="form-group my-form-group col-4">
                        <label for="description">مناسبت</label>
                        <input type="text" class="form-control my-form-control" name="topic"
                               >{{old('topic')}}</input>
                    </div>
                        @endif
                    </div>

                @endif
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
                                    <div class="d-flex justify-content-start">
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
                                                      required id="{{ $addition->id }}" value="{{ $addition->id }}">
                                                <input type="text" name="addition_type[{{$addition->id}}]"
                                                       value="{{ $addition->title }}" hidden>
                                            </div>
                                        </div>
                                        <div>
                                            {{ $addition->price }}
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
                    @endforeach
                </div>
                <div class="row">
                    <div class="form-group my-form-group col-10">
                        @if($type->id == 2)
                            <label for="description">توضیحات ( ساعت مراسم - محل برکزاری - آدرس دقیق)</label>
                            <textarea type="text" class="form-control my-form-control" name="description"
                                      rows="5" required>{{old('description')}}</textarea>
                            @else
                        <label for="description">توضیحات</label>
                        <textarea type="text" class="form-control my-form-control" name="description"
                                  rows="5">{{old('description')}}</textarea>
                            @endif
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

        // $("#formId").validate({
        //     onkeyup:false,
        //
        //     rules: {
        //         "file[]" : "required",
        //     },
        //
        //     messages: {
        //          "file[]" : {required : "فایل بارگزاری نشده"}  ,
        //          "addition[]" : {required : "فایل بارگزاری نشده"}
        //     },
        //
        //     // Submit the form
        //     // submitHandler: function(form) {
        //     //     theUrl = '/add-to-cart';
        //     //     var params = $(form).serialize();
        //     //     $.ajax ({
        //     //         type: "POST",
        //     //         url: theUrl,
        //     //         data: params,
        //     //         processData: false,
        //     //         async: false,
        //     //         success: function(returnData) {
        //     //             $('#content').html(returnData);
        //     //         }
        //     //     });
        //     // }
        //     //
        // });
    </script>

@endsection
