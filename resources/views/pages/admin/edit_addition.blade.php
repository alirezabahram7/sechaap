@extends('layouts.admin.app')
@section('title','ویرایش نوع')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                ویرایش نوع
            </div>
            @include('layouts.message')
            <form action="{{ route('addition.update',['id' => $addition->id ]) }}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div>
                    <div class="d-md-flex d-sm-block">
                    <div class="col-md-4 col-sm-12 justify-content-start text-right">
                        <label for="type_id">گروه محصولی</label>
                        <select class="form-control my-form-control" name="type_id">
                            @foreach($types as $type)
                                <option value="{{ $type->id }}" {{ $type->id==$addition->type_id ? 'selected':'' }}>{{ $type->title }}</option>
                            @endforeach
                        </select>
                    </div>
                    </div>
                    <br>
                    <div class="d-md-flex d-sm-block justify-content-between">

                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="title">عنوان نوع</label>
                            <input type="text" class="form-control my-form-control" name="title"
                                   value="{{ $addition->title }}">
                        </div>
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="type_id">دسته بندی نوع</label>
                            <select class="form-control my-form-control" name="addition_type_id">
                                @foreach($additionTypes as $additionType)
                                    <option value="{{ $additionType->id }}" {{ $additionType->id==$addition->addition_type_id ? 'selected':'' }}>{{ $additionType->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="price"> قیمت مازاد</label>
                            <input type="text" class="form-control my-form-control" name="price"
                                   value="{{ $addition->price }}" >
                        </div>
                    </div>
                    <br>
                    <div class="form-group my-form-group col-10 text-center">
                        <img src="{{asset('./files/'.$addition->image)}}"
                             class="img-circle rounded-circle thumbnail thumbnail-width">
                        <label for="avatar">بارگزاری تصویر </label>
                        <div class="input-group entry justify-content-center">
                            <input type="file" class="btn btn-primary browndiv text-right"
                                   name="image" id="avatar" accept="image/*">
                        </div>

                    </div>

                    <div class="form-group my-form-group col-10 text-center">
                        <label for="description">توضیحات</label>
                        <textarea type="text" class="form-control my-form-control" name="description"
                                  rows="6" >{{ $addition->description }}</textarea>
                    </div>
                    <br>
                    <div class="row d-flex ">
                        <div class="form-group my-form-group mt-3">
                            <button type="submit" class="btn btn-danger justify-content-center my-btn">ایجاد
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
