@extends('layouts.app')
@section('content')
    <div class="dashboard-content container text-dark text-center">
        @if($typeId==1)
            <div id="accordion">
                <h3>انواع بنر</h3>
                <div>
                <div class="itembox">
                    <div class="d-block d-md-flex justify-content-around">
                        <div class="col-md-2 type-divider">
                            <a href="{{ route('products',['id '=>$typeId,'bannerType'=>8]) }}">
                                <img class="img-responsive my-circle-img "
                                     src="{{ asset('./mainImg/mecca.jpg') }}">
                                <br>
                                <strong class="">بنر مکه</strong>
                            </a>
                        </div>
                        <div class="col-md-2 type-divider">
                            <a href="{{ route('products',['id '=>$typeId,'bannerType'=>9]) }}">
                                <img class="img-responsive my-circle-img"
                                     src="{{ asset('./mainImg/karbala.jpg') }}">
                                <br>
                                <strong class="">بنر کربلایی</strong>
                            </a>
                        </div>
                        <div class="col-md-2 type-divider">
                            <a href="{{ route('products',['id '=>$typeId,'bannerType'=>10]) }}">
                                <img class="img-responsive my-circle-img"
                                     src="{{ asset('./mainImg/cond.jpg') }}">
                                <br>
                                <strong class="">بنر تسلیت</strong>
                            </a>
                        </div>



                        <div class="col-md-2 type-divider">
                            <a href="{{ route('products',['id '=>$typeId,'bannerType'=>11]) }}">
                                <img class="img-responsive my-circle-img "
                                     src="{{ asset('./mainImg/ayad.jpg') }}">
                                <br>
                                <strong class="">بنر اعیاد و شهادت ها</strong>
                            </a>
                        </div>
{{--                        <div class="col-md-3 type-divider">--}}
{{--                            <a href="{{route('order.create',['id'=>16])}}">--}}
{{--                                <img class="img-responsive my-circle-img"--}}
{{--                                     src="{{ asset('./mainImg/customize.jpeg') }}">--}}
{{--                                <br>--}}
{{--                                <strong class="">سفارشی سازی بنر</strong>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="col-md-3 type-divider">--}}
{{--                            <a href="{{ route('products',['id '=>$typeId]) }}">--}}
{{--                                <img class="img-responsive my-circle-img"--}}
{{--                                     src="{{ asset('./mainImg/allbanners.jpg') }}">--}}
{{--                                <br>--}}
{{--                                <strong class="">همه</strong>--}}
{{--                            </a>--}}
{{--                        </div>--}}

                </div>
                </div>
            </div>
{{--        @elseif($typeId==2)--}}
{{--            <div class="itembox">--}}
{{--                <div class="col-md-5 type-divider center">--}}
{{--                    <a href="{{route('order.create',['id'=>17])}}">--}}
{{--                        <img class="img-responsive my-circle-img"--}}
{{--                             src="{{ asset('./mainImg/customize.jpeg') }}">--}}
{{--                        <br>--}}
{{--                        <strong class="">سفارشی سازی اعلامیه</strong>--}}
{{--                    </a>--}}
{{--                </div>--}}


{{--            </div>--}}
        @endif

        <div class="container ">
            <?php
            $i = 1;
            ?>
            <div class="row d-block d-md-flex justify-content-center">
                @foreach($products as $product)
                    <div class="col-md-3 card-body my-card-body rounded d-flex flex-column border-secondary itembox_lists">
                        <div class="align-items-start">
                            <a href="{{ route('order.create', ['id' => $typeId,'productId'=>$product->id]) }}">
                                <span class="center">
                                    @if($product->photo)
                                        <img class="img-responsive my-circle-img"
                                             src="{{ asset('./files/'.$product->photo) }}">
                                    @else
                                        <img class="img-thumbnail rounded-circle rounded img-responsive my-circle-img"
                                             src="{{ asset('./pic/nopro.png') }}">
                                    @endif
                                </span>
                            </a>
                        </div>
                        <div class="d-flex justify-content-center">
                            <span
                                class="info-title">{{ \Morilog\Jalali\CalendarUtils::convertNumbers($product->title) }}</span>

                        </div>
                        <br>
                        <div class="d-flex justify-content-center">

                            <div>
                                <a href="{{ route('order.create', ['id' => $typeId,'productId'=>$product->id]) }}">

                                    <i class="fa fa-shopping-basket font-weight-bolder"></i>
                                </a>
                            </div>
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
    </div>
@endsection

