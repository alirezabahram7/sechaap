<div class="bg-secondary-color text-light p-5">
    <div class="row d-flex justify-content-around">
        @foreach($types as $i => $type)
            @if($i%6==0 && $i>0)
    </div>
    <div class="row d-flex justify-content-around">
        @endif
        <div class="col-2 d-flex flex-column justify-content-start">
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
