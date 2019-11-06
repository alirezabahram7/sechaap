@extends('layouts.app')
@section('title','ویرایش رمز عبور')
@section('content')
    <div class="dashboard-content">

        <div class="row justify-content-center">
            <div class="col-md-6 mt-0">
                <div class="card text-center my-card">
                    <div class="card-header bg-secondary-color">ویرایش رمز</div>
                    @if (count($errors) > 0)
                        <div class="alert alert-danger my-alert">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @if(session('success'))
                        <div class="alert alert-success my-alert">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body my-card-body">
                        <form id="form-change-password" role="form" method="POST" action="{{route('pass.update')}}"
                              novalidate class="form-horizontal my-form-horizontal">
                            <div class="container my-container">

                                <div class="auto-margin col-md-8">
                                    <div class=" row rtl">
                                        <input type="hidden" name="" value="">
                                        <div class="">
                                            <label> نام کاربری </label>
                                        </div>
                                        <div class="form-group my-form-group">
                                            <input type="text" class="form-control my-form-control" id="" name=""
                                                   value="{{auth()->user()->name}}" readonly="readonly">
                                        </div>
                                    </div>
                                </div>

                                <div class="auto-margin col-md-8">
                                    <div class="row rtl">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <div class="">
                                            <label>رمز قبلی :</label>
                                        </div>
                                        <div class="form-group my-form-group ">
                                            <input type="password" class="form-control my-form-control" id="current-password"
                                                   name="current-password" placeholder="رمز قبلی">
                                        </div>
                                    </div>
                                </div>

                                <div class="auto-margin col-md-8">
                                    <div class="row rtl">
                                        <div class="">
                                            <label>رمز جدید :</label>
                                        </div>
                                        <div class="form-group my-form-group">
                                            <input type="password" class="form-control my-form-control" id="password" name="password"
                                                   placeholder="رمز جدید">
                                        </div>
                                    </div>
                                </div>

                                <div class="auto-margin col-md-8">
                                    <div class="row rtl">
                                        <div class="">
                                            <label>تکرار رمز :</label>
                                        </div>
                                        <div class="form-group my-form-group">
                                            <input type="password" class="form-control my-form-control" id="password_confirmation"
                                                   name="password_confirmation" placeholder="تکرار رمز جدید">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row form-group my-form-group d-flex justify-content-center">
                                <div class=" col-sm-6">
                                    <button type="submit" class="btn btn-danger no-btn">اعمال تغییرات</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
