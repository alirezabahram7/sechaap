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
                <span id="total-price" class="total-price" data-total-price= {{$type->price}}>
                {{ \Morilog\Jalali\CalendarUtils::convertNumbers($type->price) }}
                </span>
                تومان
                @if($type->id == 3)
                    <br>
{{--                    X--}}
                    <input class="total-nums" id="total-nums" data-total-nums="1" value="1"  hidden/>

                @endif
            </div>
        </div>
        <form id="formId" action="{{ route('add.to.cart') }}" method="post" class="form-group"
              enctype="multipart/form-data">
            @csrf
            <div class="d-flex flex-column">
                <div class="form-header-title">
                    ایجاد سفارش جدید
                    ({{ $type->title }})
                </div>
                <input type="text" name="type_id" value="{{ $type->id }}" hidden>
                <input type="text" name="type_title" value="{{ $type->title }}" hidden>
                <input type="text" name="price" id="price" value="{{$type->price}}" hidden>
                <input type="text" name="nums" id="nums" class="nums" value="1" hidden>
                @if(!$product)
                    <div class="row controls ">
                        <div class="form-group my-form-group">
                            <label for="avatar">بارگزاری فایل </label>
                            <div class="input-group entry justify-content-center">
                                @if($type->id !=3)
                                    <input type="file" class="btn btn-primary browndiv text-right"
                                           name="file[]" id="file[]" required>
                                    <button class="btn btn-success btn-add" type="button">
                                        +
                                    </button>
                                @else
                                    <input type="file" class="btn btn-primary browndiv text-right selected-file"
                                           name="file[]" id="file[]" accept="application/pdf"
                                           placeholder="فایل را با فرمت پی دی اف انتخاب کنید" required>
                                    <span class="mr-2" id="page_count"></span>
                                    صفحه
                                @endif
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
                                                @if($additionType->id==2)
                                                    <input type="radio" class="my-checkbox addition-nums-data"
                                                           data-addition-type-id="{{$additionType->id}}"
                                                           data-addition-nums="{{$addition->price}}"
                                                           name="addition[{{$i}}]"
                                                           required id="{{ $addition->id }}"
                                                           value="{{ $addition->id }}">
                                                @else
                                                    <input type="radio" class="my-checkbox addition-price-data"
                                                           data-addition-type-id="{{$additionType->id}}"
                                                           data-addition-price="{{$addition->price}}"
                                                           name="addition[{{$i}}]"
                                                           required id="{{ $addition->id }}"
                                                           value="{{ $addition->id }}">
                                                @endif
                                                <input type="text" name="addition_type[{{$addition->id}}]"
                                                       value="{{ $addition->title }}" hidden>
                                            </div>
                                        </div>
                                        <div class="text-middle mt-4 type-divider ">
                                            {{ \Morilog\Jalali\CalendarUtils::convertNumbers($addition->price) }}
                                            @if($additionType->id == 2)
                                                تومان X
                                            @else
                                                + تومان
                                            @endif
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


@endsection
@section('script')
    <script>
        $(document).ready(function () {
            let addition = [];
            let base_price = parseInt($('#price').val());
            $('.addition-price-data').click(function () {
                let base_nums = parseInt($('#nums').val());
                let total_path = $('.total-price');
                let total_price = parseInt(total_path.attr('data-total-price'));
                let addition_price = parseInt($(this).attr('data-addition-price'));
                let addition_id = parseInt($(this).attr('data-addition-type-id'));
                addition[addition_id] = addition_price;
                total_price = addition.reduce((a, b) => a + b, base_price);
                total_path.text(total_price * base_nums);
                total_path.attr('data-total-price', total_price);
                $('#price').val(total_price);
            })
        });

        $(document).ready(function () {
            let addition = [];
            let base_nums = parseInt($('#nums').val());
            $('.addition-nums-data').click(function () {
                let total_path = $('.total-nums');
                let total_price_path = $('.total-price');
                let base_price = parseInt($('#price').val());
                let total_nums = parseInt(total_path.attr('data-total-nums'));
                let addition_nums = parseInt($(this).attr('data-addition-nums'));
                let addition_id = parseInt($(this).attr('data-addition-type-id'));
                addition[addition_id] = addition_nums;
                total_nums = addition.reduce((a, b) => a + b - 1, base_nums);
                total_price_path.text(base_price * total_nums);
                total_path.text(total_nums);
                total_path.attr('data-total-nums', total_nums);
                $('#nums').val(total_nums);
            })
        });

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

        var url = 'https://raw.githubusercontent.com/mozilla/pdf.js/ba2edeae/web/compressed.tracemonkey-pldi-09.pdf';

        document.querySelector(".selected-file").addEventListener("change", function (e) {
            var file = e.target.files[0];
            if (file.type != "application/pdf") {
                console.error(file.name, "is not a pdf file.")
                return
            }
            var fileReader = new FileReader();

            fileReader.onload = function () {
                var typedarray = new Uint8Array(this.result);
                var pdfjsLib = window['pdfjs-dist/build/pdf'];
                let base_price = parseInt(document.getElementById('price').value);
// The workerSrc property shall be specified.
                pdfjsLib.GlobalWorkerOptions.workerSrc = '//mozilla.github.io/pdf.js/build/pdf.worker.js';
                pdfjsLib.getDocument(typedarray).promise.then(function (pdfDoc_) {
                    pdfDoc = pdfDoc_;
                    document.getElementById('page_count').textContent = pdfDoc.numPages;
                    document.getElementById('nums').value = pdfDoc.numPages;
                    document.getElementById('total-nums').value = pdfDoc.numPages;
                    // total_price_path.text(base_price * total_nums);
                    document.getElementById('total-price').textContent = base_price * pdfDoc.numPages;
                });
            };

            fileReader.readAsArrayBuffer(file);
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
