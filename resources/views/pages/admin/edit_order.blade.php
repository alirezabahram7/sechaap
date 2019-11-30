@extends('layouts.admin.app')
@section('title','داشبورد')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <form action="#" class="form-group">
                <div class="">
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-md-4 text-center">
                            <label for="type">گروه محصولی</label>
                            <select class="form-control my-form-control" name="type" readonly>
                                @foreach($types as $type)
                                    <option {{ $order->product->type['title'] == $type->title ? 'selected':'' }}>{{ $type->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <label for="product">عنوان سفارش </label>
                            <input type="text" class="form-control my-form-control" name="product"
                                   value="{{ $order->product->title  }}" readonly>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <label for="avatar">کد رهگیری</label>
                            <input type="text" class="form-control my-form-control text-success" name="col_name[]"
                                   value="{{ $order->tracking_code  }}" readonly>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group my-form-group col-md-4">
                            <label for="avatar">بارگزاری فایل (</label>
                            <div class="input-group">
                                <input type="file" class="btn btn-primary browndiv text-right"
                                       name="avatar" id="avatar" accept="">
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
                            <button type="submit" class="btn btn-danger justify-content-center my-btn">بروزرسانی
                            </button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>



@endsection