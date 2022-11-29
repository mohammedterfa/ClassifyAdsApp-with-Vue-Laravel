@extends('layouts.app')

@section('content')
<div class="slider" style="margin-top: -25px;">
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="slider/slider1.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/slider2.png" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="slider/slider3.png" class="d-block w-100" alt="...">
        </div>
        </div>
    </div>
</div>
<div class="container mt-5">
    <span>
        <h1>Car</h1>
    </span>
    <div id="carouselExampleFade" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="..." class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
            <img src="product/car1.jpg" class="d-block w-100" alt="...">
        </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
@endsection
