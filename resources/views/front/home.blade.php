@extends('front.layout.master')
@section('main_content')

    <!-- Carousel -->
    <div id="demo" class="carousel slide" data-bs-ride="carousel">

        <!-- Indicators/dots -->
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
        </div>

        <!-- The slideshow/carousel -->
        <div class="carousel-inner">
            @foreach($sliders as $index => $product)
                <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{asset($product->getFirstMediaUrl('image'))}}" class="img-fluid" alt="{{ $product->name }}"
                         style="width: 100%; max-height: 600px;">
                    <div class="carousel-caption">
                        <h3>{!! $product->heading !!}</h3>
                        <p>{!! $product->text !!}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Left and right controls/icons -->
        <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <!-- Preloader -->
    <div id="preloader">
        <div class="line"></div>
    </div>

@endsection
