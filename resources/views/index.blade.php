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
@endsection
