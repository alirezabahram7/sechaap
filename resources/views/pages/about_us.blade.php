@extends('layouts.app')

@section('content')
    <div class="d-flex flex-column justify-content-around dashboard-content">
        <div class="container bg-secondary-color p-4 mb-3 text-right">
            <div class="form-header-title">
                درباره ی ما
            </div>
            <span class="m-4">
                <?php
                $paragraphs = explode(PHP_EOL, $texts[2]->text);
                ?>

                @foreach($paragraphs as $paragraph)
                    <p class="mr-5 ml-5">{{{ $paragraph }}}</p>
                @endforeach


            </span>
            <br>
            <br>
            <div class="d-flex justify-content-center">
                <img class="logo-img about-us-logo-image" src="{{ asset('/files/'.$images[4]->image) }}" alt="سه چاپ">
            </div>
        </div>



    </div>

@endsection