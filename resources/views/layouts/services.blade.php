<div class="bg-secondary-color text-light p-5">
    <div class="row d-flex justify-content-around">
        <div class="d-flex flex-column">
            <div class="services-icons">
               <a href="{{route('order.create',['type'=>'book'])}}"> <i class="fa fa-book"></i></a>
            </div>
            <div>
                چاپ کتاب
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{route('order.create',['type'=>'thesis'])}}"><i class="fa fa-file"></i></a>
            </div>
            <div>
                چاپ پایان نامه
            </div>
        </div>
        <div>
            <div class="d-flex flex-column">
                <div class="services-icons">
                    <a href="{{route('order.create',['type'=>'visit_card'])}}"><i class="fa fa-credit-card"></i></a>
                </div>
                <div>
                    چاپ کارت ویزیت
                </div>
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{route('order.create',['type'=>'envelope'])}}"><i class="fa fa-envelope"></i></a>
            </div>
            <div>
                چاپ پاکت نامه
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{route('order.create',['type'=>'factor'])}}"><i class="fa fa-list"></i></a>
            </div>
            <div>
                چاپ فاکتور
            </div>
        </div>
    </div>
    <div></div>
    <div class="row d-flex justify-content-around">
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{route('order.create',['type'=>'color'])}}"><i class="fa fa-print"></i></a>
            </div>
            <div>
                چاپ رنگی
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{route('order.create',['type'=>'plot'])}}"><i class="fa fa-map"></i></a>
            </div>
            <div>
                چاپ پلات - نقشه
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{ route('products',['type_id'=>2]) }}"><i class="fa fa-address-card"></i></a>
            </div>
            <div>
                چاپ اعلامیه
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{ route('products',['type_id'=>1]) }}"><i class="fa fa-flag"></i></a>
            </div>
            <div>
                چاپ بنر
            </div>
        </div>
        <div class="d-flex flex-column">
            <div class="services-icons">
                <a href="{{ route('products',['type_id'=>3]) }}"><i class="fa fa-gift"></i></a>
            </div>
            <div>
                هدایای تبلیغاتی
            </div>
        </div>
    </div>

    </div>

</div>