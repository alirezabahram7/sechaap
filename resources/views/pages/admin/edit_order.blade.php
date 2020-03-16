@extends('layouts.admin.app')
@section('title','داشبورد')
@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3">
            <div class="form-header-title">
                مشخصات سفارش با کد
                {{ $order->tracking_code  }}
            </div>
            @include('layouts.message')
            <form action="{{ route('update.order',['id' => $order->id]) }}" method="post" class="form-group">
                @csrf
                @method('patch')
                <div class="">

                    <div class="itembox text-center">
                        @if($order->product_id==null)
                    @foreach($order->files as $file)
                        <a href="{{'/files/orders/'.$file->name}}" target="_blank">
                        {{$file->name}}
                        </a>
                        <br>
                        @endforeach
                        @else
                            @if($order->product->photo)
                                <div class="col-md-5 center">
                                <img class="img-responsive my-circle-img"
                                     src="{{ asset('./files/'.$order->product->photo) }}">
                            @else
                                <img class="img-thumbnail rounded-circle rounded img-responsive my-circle-img"
                                     src="{{ asset('./pic/nopro.png') }}">
                            @endif
                                </div>
                            @endif
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-md-4 text-center">
                            <label for="type">گروه محصولی</label>
                            <input type="text" class="form-control my-form-control" name="type"
                                   value="{{ isset($order->product)?$order->product->type['title']:'-'  }}" readonly>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <label for="product_name">عنوان سفارش </label>
                            <input type="text" class="form-control my-form-control" name="product_name"
                                   value="{{ $order->product!=null ? $order->product->title:'محصول سفارشی'  }}"
                                   readonly>
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="numbers">تعداد</label>
                            <input type="text" class="form-control my-form-control" name="numbers"
                                   value="{{ $order->numbers }}" readonly>
                        </div>
                        <div class="form-group col-md-2 text-center">
                            <label for="price">مبلغ پرداختی </label>
                            <input type="text" class="form-control my-form-control" name="price"
                                   value="{{ $order->price  }} " readonly>
                        </div>
                    </div>
                    <br>
                    <div class="d-flex justify-content-between">
                        <div class="form-group col-md-4 text-center">
                            <label for="user_name">نام سفارش دهنده</label>
                            <input type="text" class="form-control my-form-control" name="user_name"
                                   value="{{ $order->user_name  }}" readonly>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <label for="phone_number">شماره تماس </label>
                            <input type="text" class="form-control my-form-control" name="phone_number"
                                   value="{{ $order->phone  }}" readonly>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <label for="code">وضعیت عضویت</label>
                            <input type="text"
                                   class="form-control my-form-control text-white text-center {{ $order->user_id > 0 ? "bg-success":"bg-warning" }}"
                                   name="user_status"
                                   value="{{ $order->user_id > 0 ? 'عضو':'غیرعضو'  }}" readonly>
                        </div>
                    </div>
                    <br>
                    <div class="text-center">
                        <label for="address">مشخصات</label>
                    </div>
                    <div class="form-group my-form-group col-6 text-right bg-light text-dark p-2 mb-4">

                        <br>
                            @foreach($additions as $i => $addition)
                                {{\Morilog\Jalali\CalendarUtils::convertNumbers($i+1)}} -
                            {{$addition->additionType->title}} :
                                {{$addition->title}}
                                <br>

                            @endforeach


                    </div>
                    <div class="d-flex justify-content-between">

                        <div class="form-group my-form-group col-6 text-center">
                            <label for="address">آدرس</label>
                            <textarea type="text" class="form-control my-form-control" name="address"
                                      rows="4" readonly>{{ $order->address }}</textarea>
                        </div>


                        <div class="form-group my-form-group col-6 text-center">
                            <label for="description">توضیحات</label>
                            <textarea type="text" class="form-control my-form-control" name="description"
                                      rows="4" readonly>{{ $order->description }}</textarea>

                        </div>
                    </div>
                    <br>
                    <div class="form-group col-md-4 text-center">
                        <label for="order_status_id">وضعیت سفارش</label>
                        <select type="text" class="form-control my-form-control" name="order_status_id">
                            @foreach($statuses as $status)
                                <option
                                    value="{{ $status->id }}" {{ $order->order_status_id==$status->id ? 'selected':'' }}>{{ $status->title }}</option>
                            @endforeach
                        </select>
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



@endsection
