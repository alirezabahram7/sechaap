@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                تماس با ما
            </div>

            @include('layouts.message')
            <form action="{{ route('store.message') }}" method="post" class="form-group"
                  enctype="multipart/form-data">
                @csrf

                <div class="d-flex flex-column" >

                    @if(auth()->check()==false)
                        <div class="row form-group col-md-4 justify-content-center">
                            <label for="user_name">نام شما </label>
                            <input type="text" class="form-control my-form-control" name="user_name"
                                   value="{{old('user_name') }}">
                        </div>
                        <div class="row form-group col-md-4 justify-content-center">
                            <label for="phone">شماره تماس </label>
                            <input type="text" class="form-control my-form-control" name="phone"
                                   value="{{old('phone') }}">
                        </div>
                    @endif

                        <div class="row form-group col-md-4 justify-content-center">
                            <label for="title">عنوان پیام </label>
                            <input type="text" class="form-control my-form-control" name="title"
                                   value="{{old('title') }}">
                        </div>

                    <div class="row">
                        <div class="form-group my-form-group col-10">
                            {{--<label for="body">متن پیام</label>--}}
                            <textarea type="text" class="form-control my-form-control" name="body"
                                      rows="5">{{old('body')}}</textarea>
                        </div>
                    </div>
                    <div class="row d-flex">
                        <div class="form-group my-form-group mt-3">
                            <button type="submit" class="btn btn-danger justify-content-center my-btn">ارسال پیام</button>
                        </div>
                    </div>
                </div>
            </form>

        </div>

    </div>

@endsection