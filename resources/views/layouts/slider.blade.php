<div id="carouselExampleIndicators" class="carousel slide slide-size" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1" class="bg-dark"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="bg-dark"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100 slide-size" src="{{ asset('files/'.$images[0]->image) }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slide-size" src="{{ asset('files/'.$images[1]->image) }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 slide-size" src="{{ asset('files/'.$images[2]->image) }}" alt="Third slide">
        </div>
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