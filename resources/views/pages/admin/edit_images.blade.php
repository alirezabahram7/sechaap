@extends('layouts.admin.app')
@section('title','ویرایش محصول')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                مدیریت بنرها و تصاویر
            </div>
            @include('layouts.message')
            <form action="{{ route('admin.update.images') }}" method="post" class="form-group"
                  enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="">
                    @foreach($images as $image)
                        <div class="row d-flex justify-content-center">
                            <img src="{{ asset('files/'.$image->image)}} "
                                 class="product-photo">
                        </div>
                        <br>

                        <div class="row d-flex justify-content-center">
                            <div class="form-group my-form-group">
                                <label for="photo"> تغییر تصویر {{ $image->persian_name }}</label>
                                <div class="input-group d-flex justify-content-center">
                                    <input class="btn btn-primary browndiv text-right" name="{{ $image->id }}"
                                           type="file" accept="image/*">
                                </div>
                            </div>
                        </div>
                    @endforeach
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