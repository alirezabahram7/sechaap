<div id="carouselExampleIndicators" class="carousel slide slide-size" data-ride="carousel">
    <ol class="carousel-indicators">
        @foreach($bannerImages as $b => $banner)
        <li data-target="#carouselExampleIndicators" data-slide-to="{{$b}}" class="{{$b==0?'active':''}} bg-dark"></li>
        @endforeach
    </ol>
    <div class="carousel-inner">
        @foreach($bannerImages as $b => $banner)
        <div class="carousel-item {{$b==0?'active':''}}">
            <img class="d-block w-100 slide-size" src="{{ asset('files/'.$banner->image) }}" alt="First slide">
        </div>
            @endforeach
    </div>
    <a class="carousel-control-prev " href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bg-dark p-4" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon bg-dark p-4" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
