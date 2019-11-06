@extends('layouts.app')

@section('content')
    <div class="container bg-secondary-color p-4 mb-3">
        <form action="#" class="form-group">
            <div class="d-flex flex-column" >
                @if(auth()->check()==false)
                    <div class="row form-group col-md-4 justify-content-center">
                        <label for="avatar">نام شما </label>
                        <input type="text" class="form-control my-form-control" name="col_name[]"
                               value="{{old('col_name[]') }}">
                    </div>
                    <div class="row form-group col-md-4 justify-content-center">
                        <label for="avatar">شماره تماس </label>
                        <input type="text" class="form-control my-form-control" name="col_name[]"
                               value="{{old('col_name[]') }}">
                    </div>
                @endif
                @if($type == 'book')
                    <div class="row justify-content-center">
                        <div class="form-group my-form-group col-md-4">
                            <label for="avatar">پی دی اف جلد کتاب ({{ $ext_name }}) </label>
                            <div class="input-group">
                                <input type="file" class="btn btn-primary browndiv text-right"
                                       name="avatar" id="avatar" accept="{{ $ext }}">
                            </div>
                        </div>
                    </div>
                @endif
                <div class="row justify-content-center">
                    <div class="form-group my-form-group col-md-4">
                        <label for="avatar">بارگزاری فایل ({{ $ext_name }})</label>
                        <div class="input-group">
                            <input type="file" class="btn btn-primary browndiv text-right"
                                   name="avatar" id="avatar" accept="{{ $ext }}">
                        </div>
                    </div>
                </div>
                    <div class="row">
                        <div class="form-group my-form-group col-10">
                            <label for="description">آدرس</label>
                            <textarea type="text" class="form-control my-form-control" name="description"
                                      rows="3">{{old('description')}}</textarea>
                        </div>
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
@endsection