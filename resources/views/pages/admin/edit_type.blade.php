@extends('layouts.admin.app')
@section('title','ویرایش محصول')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                ویرایش دسته بندی جدید
            </div>
            @include('layouts.message')
            <form action="{{ url('admin/type/'.$type->id) }}" method="post" class="form-group" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="">
                    <div class="d-md-flex d-sm-block justify-content-between">
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="title">عنوان دسته بندی</label>
                            <input type="text" class="form-control my-form-control" name="title"
                                   value="{{ $type->title }}">
                        </div>
                        <div class="form-group col-md-4 col-sm-12 text-center">
                            <label for="title">نوع چاپ</label>
                            <div>

                                <label for="title">افست: </label>
                                <input type="checkbox" class="my-checkbox" name="is_offset" value="1" {{ $type->is_offset==1 ? 'checked':'' }}>

                           &nbsp;&nbsp;&nbsp;

                                <label for="title">دیجیتال: </label>
                                <input type="checkbox" class="my-checkbox" name="is_digital" value="1" {{ $type->is_digital==1 ? 'checked':'' }}>

                            </div>
                        </div>
                        <div class="form-group col-md-2 col-sm-12 text-center">
                            <label for="price"> قیمت پایه</label>
                            <input type="text" class="form-control my-form-control" name="price"
                                   value="{{ $type->price}}" >
                        </div>
                        <div class="form-group col-md-2 col-sm-12 text-center">
                            <label for="price"> مازاد افست</label>
                            <input type="text" class="form-control my-form-control" name="add_price"
                                   value="{{ $type->add_price}}" >
                        </div>
                    </div>
                    <br>


                    <div class="form-group my-form-group col-10 text-center">
                        <label for="description">توضیحات</label>
                        <textarea type="text" class="form-control my-form-control" name="description"
                                  rows="6" >{{ $type->description }}</textarea>
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
