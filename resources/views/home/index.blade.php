@extends('layouts.app')
@section('title', $viewData['title'])
@section('content')
<div class="row">
    <div class="col-md-8 offset-md-2">
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="1"></li>
                <li data-bs-target="#myCarousel" data-bs-slide-to="2"></li>
            </ol>

            <!-- Slides -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('/img/slider1.png') }}" class="d-block w-100" alt="Slide 1">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider2.png') }}" class="d-block w-100" alt="Slide 2">
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('/img/slider3.png') }}" class="d-block w-100" alt="Slide 3">
                </div>
            </div>

            <!-- Controls -->
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="row mt-4">
    @foreach ($viewData['products'] as $product)
        <div class="col-md-4 col-lg-3 mb-4">
            <div class="card h-100">
                <div class="text-center">
                    <p><strong class="product-name">{{ $product->getName() }}</strong></p>
                </div>
                <img src="{{ asset('/storage/'.$product->getImage()) }}" class="card-img-top">
                <div class="card-body text-center">
                    <p class="product-price">Price: ${{ $product->getPrice() }}</p> <!-- Added price -->
                    <a href="{{ route('product.show', ['id'=> $product->getId()]) }}" class="btn bg-primary text-white">
                        Tambahkan ke Keranjang
                    </a>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Menambahkan library CSS Bootstrap -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/css/bootstrap.min.css">

<!-- Menambahkan library JavaScript Bootstrap -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.5.0/js/bootstrap.bundle.min.js"></script>
@endsection
