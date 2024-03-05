@extends('template.character')

@section('content')

<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" style="width: 50%; margin: auto;">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="card">
                <img src="{{ asset('images/wht-logo.png') }}" class="card-img-top" alt="Image 1">
                <div class="card-body">
                    <h5 class="card-title">Card 1</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <img src="{{ asset('images/Frog.jpg') }}" class="card-img-top" alt="Image 2">
                <div class="card-body">
                    <h5 class="card-title">Card 2</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="card">
                <img src="image3.jpg" class="card-img-top" alt="Image 3">
                <div class="card-body">
                    <h5 class="card-title">Card 3</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>



@endsection
