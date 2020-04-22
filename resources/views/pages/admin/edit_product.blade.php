@extends('layouts.admin.app')
@section('title','ویرایش محصول')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                ویرایش محصول
                {{ $product->title  }}
            </div>
            @include('layouts.message')
            <form action="{{ route('admin.update.product',['id' => $product->id]) }}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="">
                    <div class="d-md-flex d-sm-block justify-content-between">
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="type_id">گروه محصولی</label>
                            <select class="form-control my-form-control product_type" name="type_id">
                                @foreach($types as $type)
                                    <option value="{{ $type->id }}" {{ $product->type_id == $type->id ? 'selected' : '' }}>{{ $type->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="title">عنوان محصول</label>
                            <input type="text" class="form-control my-form-control" name="title"
                                   value="{{ $product->title  }}">
                        </div>

                        <div class="form-group col-md-4 col-sm-12 text-center justify-content-start" id="banner-type">
                            <label for="price">نوع بنر</label>
                            <select class="form-control my-form-control banner_type" name="banner_type">
                                <?php
                                $banner_types = [0=>'متفرقه',8=>'مکه',9=>'کربلا',10=>'تسلیت',11=>'اعیاد و شهادت']
                                ?>
                                    @foreach($banner_types as $j=>$banner_type)
                                        <option value="{{ $j }}" {{ $product->banner_type == $j ? 'selected' : '' }}>{{ $banner_type }}</option>
                                    @endforeach
                            </select>
                        </div>
                    </div>
                    <br>


                        <div class="form-group my-form-group col-10 text-center">
                            <label for="description">توضیحات</label>
                            <textarea type="text" class="form-control my-form-control" name="description"
                                      rows="6" >{{ $product->description }}</textarea>
                        </div>
                    <br>
                    <div class="row d-flex justify-content-center">
                        <img src="{{ asset('files/'.$product->photo)}} "
                             class="product-photo">
                    </div>
                    <br>

                    <div class="row d-flex justify-content-center">
                        <div class="form-group my-form-group">
                            <label for="photo">تغییر تصویر</label>
                            <div class="input-group d-flex justify-content-center">
                                <input class="btn btn-primary browndiv text-right" name="photo"
                                       type="file" accept="image/*">
                            </div>
                        </div>
                    </div>

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

        $(document).ready(function () {
            $("select.product_type").change(function () {
                if ($(this).val() == 1) {
                    $("#banner-type").show();
                } else {
                    $("#banner-type").hide();
                }
            });
        });
    </script>

@endsection
