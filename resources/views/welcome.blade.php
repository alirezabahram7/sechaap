@extends('layouts.app')
@section('title','داشبورد')
@section('content')
    <?php
    $i = 1;
    ?>
    <div class="">
        @include('layouts.slider')
        @include('layouts.benefits')
        @include('layouts.services')
        @include('layouts.summary')
        @include('layouts.offset_or_digital')

        <div class="d-flex flex-column justify-content-around dashboard-content">


        </div>


    </div>


@endsection
