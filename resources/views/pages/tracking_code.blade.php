@extends('layouts.app')

@section('content')
    <div class="container-fluid dashboard-content center">
        <div class="itembox col-6 d-flex flex-column justify-content-around">
            <i class="fa fa-credit-card text-success" style="font-size: 40px;"></i>
            <div class=" text-success d-md-flex justify-content-around d-sm-block mb-3 p-5 text-center">
                <div>
                    سفارش شما با موفقیت ثبت شد . کد پیگیری شما :
                    <br>
                    <br>
                    <strong class="text-center type-divider">
                        {{$trackingCode}}
                        <br>

                    </strong>

                </div>
            </div>
            <div class="align-items-end">
                <a href="/">
                    <div class="btn btn-danger">بازکشت</div>
                </a>
            </div>
        </div>

    </div>

@endsection
