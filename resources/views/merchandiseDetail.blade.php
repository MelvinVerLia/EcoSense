@extends('layout.master')

@section('title', 'merchandise')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<section class="py-5">
    <div class="container px-4 px-lg-5 my-5"
        style="background-color: #ffffff; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.2); padding: 20px;">
        <div class="row gx-4 gx-lg-5 align-items-center d-flex justify-content-center">
            <div class="col-md-6 text-center">
                <img class="card-img-top"
                    src="{{ $product->image ? asset('storage/' . $product->image) : 'https://dummyimage.com/600x700/dee2e6/6c757d.jpg' }}"
                    alt="..." />
            </div>
            <div class="col-md-5">
                <h1 class="display-5 fw-bolder mb-2" style="font-size: 30px">{{ $product->name }}</h1>
                <div class="fs-5 mb-3">
                    <span style="font-size: 40px">Rp. {{ number_format($product->price, 2) }}</span>
                </div>
                <div class="fs-5 mb-3">
                    <span style="font-size: 20px">
                        @if($product->stock_quantity == 0)
                            <span style="color: red; font-weight: bolder;">Sold Out</span>
                        @else
                            Stock Left: {{ $product->stock_quantity }}
                        @endif
                    </span>
                </div>
                <p class="lead" style="font-size: 18px; margin-bottom: 15px;">{{ $product->description }}</p>
                <div class="d-flex">
                    <form action="{{ route('buy', $product->id) }}" method="POST" class="d-flex flex-column"
                        style="gap: 20px;">
                        @csrf
                        <input type="number" name="quantity" value="1" min="1" class="form-control me-2"
                            style="width: 70px; height: 40px; font-size: 20px; padding: 10px;">
                        <button class="btn btn-outline-dark flex-shrink-0" type="submit"
                            style="font-size: 20px; height: 70px; width: 250px; display: flex; align-items: center; justify-content: center;">
                            <i class="bi-cart-fill me-1"></i>
                            Buy
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-light">
    <div class="container px-4 px-lg-5 mt-5">
        <h2 class="fw-bolder mb-4" style="font-size:300%;">Other Products</h2>
        <div class="row gx-4 gx-lg-5"
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 30px;">
            @foreach($randomProduct as $randomProducts)
                <div class="col mb-5">
                    <div class="card h-100">
                        <img class="card-img-top"
                            src="{{ $randomProducts->image ? asset('storage/' . $randomProducts->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                            alt="..." style="border-radius: 40px 40px 0 0; height: 300px; object-fit: cover;" />
                        <div class="card-body p-4">
                            <div class="text-center" style="font-size: 20px">
                                <h5 class="fw-bolder" style="font-size: 30px">{{ $randomProducts->name }}</h5>
                                <p class="card-text">Rp. {{ number_format($randomProducts->price, 2) }}</p>
                                <p class="card-description">{{ $randomProducts->description }}</p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                                <a class="btn btn-outline-dark mt-auto"
                                    href="{{ route('checkout', $randomProducts->id) }}">View Merch</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<style>
    body {
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        height: max;
    }

    body::after {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-image: url('https://img.freepik.com/free-vector/simple-pattern-white-branches-background_53876-60579.jpg');
        background-size: cover;
        background-position: center;
        opacity: 0.3;
        z-index: -1;
    }

    h1 {
        text-align: center;
        padding: 30px 0;
        background-color: rgba(52, 133, 55, 0.7);
        color: white;
        margin: 0 0 40px 0;
        font-size: 2.5em;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .card {
        transition: transform 0.3s ease-in-out;
        background-color: rgba(212, 237, 218, 0.9);
        min-height: 550px;
        width: 110%;
        border-radius: 40px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    .card-body {
        padding: 20px;
    }

    h5.card-title {
        font-size: 1.4rem;
        font-weight: 600;
    }

    .card-description {
        font-size: 1.1rem;
        color: #777;
        margin: 10px 0;
    }

    .card-text {
        font-size: 1.2rem;
        color: #555;
    }

    .container {
        padding-top: 50px;
    }

    .row-cols-md-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 5rem;
    }

    .col {
        max-width: 600px;
        width: 100%;
    }

    @media (max-width: 1200px) {
        .row-cols-md-3 {
            grid-template-columns: repeat(2, 1fr);
            gap: 2rem;
        }
    }

    @media (max-width: 768px) {
        .row-cols-md-3 {
            grid-template-columns: 1fr;
            gap: 1.5rem;
        }
    }

    .btn {
        font-size: 2.5em;
        background-color: white;
        color: #2D642F;
        border: 2px solid #4CAF50;
        border-radius: 40px;
        text-align: center;
        font-size: 1.50em;
        padding: 10px 25px;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>

@endsection