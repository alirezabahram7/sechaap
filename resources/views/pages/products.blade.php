@extends('layouts.app')

@section('content')
    <div class="banner-for-personalization">
        <a href="{{route('order.create',['type'=>'book'])}}">
        <img class="banner-for-personalization"
             src="{{ asset('./files/5d3d8cb99e028.jpg') }}">
            <div class="bg-dark-transparent text-on-image" >
                <i class="fa fa-paint-brush text-danger"></i>
               سفارشی سازی
            </div>
        </a>

    </div>
    <div class="container">
        <?php
        $i = 1;
        ?>
        <div class="row d-flex justify-content-center">
            @foreach($products as $product)
                <div class="col-3 card-body my-card-body rounded d-flex flex-column border-secondary itembox_lists"
                >
                    <div class="align-items-start">
                        <a href="#">
                    <span class="float-left">
                        @if($product->image)
                            <img class="img-responsive my-circle-img"
                                 src="{{ asset('./files/'.$product->image) }}">
                        @else
                            <img class="img-thumbnail rounded-circle rounded img-responsive my-circle-img"
                                 src="{{ asset('./pic/nopro.png') }}">
                        @endif
                    </span>
                        </a>
                    </div>
                    <div class="align-items-center">
                        <span class="info-title">{{ $product->title }}</span>
                        </a>
                    </div>
                    <div class="align-items-end">
                    <span class="float-right">
                       {{ $product->price }}  تومان
                    </span>
                    </div>
                </div>
                <?php
                $i++;
                if ($i > 3) {
                    echo "</div>";
                    echo "<div class='row d-flex justify-content-center'>";
                    $i = 1;
                }
                ?>

            @endforeach
            {{--</tbody>--}}
            {{--</table>--}}
            <div class="row col-12 mt-3 d-flex justify-content-center my-pages">
                {{ $products->appends(['username' => request('username')])->render() }}
            </div>
            {{--<div class="d-flex flex-column justify-content-center dashboard-content">--}}
            {{--@foreach($queries as $query)--}}
            {{--<div class="itembox d-flex flex-column justify-content-between">--}}
            {{--<div class="d-flex justify-content-between">--}}
            {{--<span>کوئری :</span>--}}
            {{--<span>{{$query['query']}}</span>--}}
            {{--</div>--}}
            {{--<div class="d-flex justify-content-between">--}}
            {{--<span>زمان :</span>--}}
            {{--<span>{{$query['time']}}</span>--}}
            {{--</div>--}}

            {{--</div>--}}
            {{--@endforeach--}}
            {{--</div>--}}

        </div>
    </div>
@endsection