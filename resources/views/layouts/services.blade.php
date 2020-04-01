<div class="bg-secondary-color text-light p-md-5">
    <div class="row d-flex justify-content-around">
        @foreach($types as $i => $type)
            @if($i%6==0 && $i>0)
    </div>
    <div class="row d-flex justify-content-around">
        @endif
        <div class="col-6 col-md-2 d-md-flex pt-3 pt-md-0 flex-md-column justify-content-start">
            <div class="services-icons">
        <a href="{{route('order.create',['id'=>$type->id,'cat'=>'all'])}}">
            <i class="fa fa-{{$type->icon}}"></i>
        </a>
            </div>
            <div>
                {{$type->title}}
            </div>
        </div>
        @endforeach
    </div>

</div>
