@extends('layout.master')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<div class="hero">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="hero-content">
        <h1>Preserve Our Forests, Protect Our Future</h1>
        <p>Together, we can make a difference</p>
        <p>Join Us in Our Mission Today</p>
        <a href="#" class="btn btn-success rounded-pill">Contribute Now</a>
    </div>
</div>

<!-- About EcoSense Section -->
<div class="container-fluid">
    <div class="row">
        <!-- Left Column: Text Content -->
        <div class="col-md-6 px-5">
            <h1 class="text-center mt-4">About EcoSense</h1>

            <p class="text-dark">
                EcoSense is dedicated to promoting sustainability and eco-friendly practices. Our mission is to raise
                awareness about environmental issues and provide resources for individuals and businesses to make a
                positive impact on the planet. Join us in our journey to create a greener, cleaner world for future
                generations.
            </p>

            <p class="text-dark">
                Our platform offers a variety of eco-conscious products designed to reduce waste and promote
                sustainability. We believe in making a difference through small, thoughtful changes in our daily lives.
                Together, we can tackle climate change and protect our natural resources.
            </p>

            <p class="text-dark">
                By supporting EcoSense, you're not just buying products – you're contributing to a larger cause. Every
                purchase helps fund environmental initiatives, from reforestation to ocean clean-up projects. Together,
                we can make a global impact.
            </p>
        </div>

        <div class="col-md-6">
            <img src="{{ asset('images/butterfly.jpg') }}" class="img-fluid shadow-lg full-width-image"
                alt="EcoSense Image">
        </div>
    </div>
</div>

<!-- Featured Products Section -->
<h1 class="mt-5" style="text-align: center">Check Out Our Products</h1>

<div class="row mt-4" style="margin-bottom: 10px;">
    <!-- Product 1 -->
    <div class="col-md-3 d-flex justify-content-center">
        <div class="card product-card">
            <img src="{{ asset('images/lanyard.png') }}" class="card-img-top" alt="Product 1">
            <div class="card-body">
                <h5 class="card-title">Lanyard</h5>
                <p class="card-text">$10.00</p>
                <a href="#" class="btn btn-success rounded-1">Buy Now</a>
            </div>
        </div>
    </div>


    <!-- Product 2 -->
    <div class="col-md-3 d-flex justify-content-center">
        <div class="card product-card">
            <img src="{{ asset('images/earth.png') }}" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Earth Plush</h5>
                <p class="card-text">$15.00</p>
                <a href="#" class="btn btn-success rounded-1">Buy Now</a>
            </div>
        </div>
    </div>

    <div class="col-md-3 d-flex justify-content-center">
        <div class="card product-card">
            <img src="{{ asset('images/earth.png') }}" class="card-img-top" alt="Product 2">
            <div class="card-body">
                <h5 class="card-title">Earth Plush</h5>
                <p class="card-text">$15.00</p>
                <a href="#" class="btn btn-success rounded-1">Buy Now</a>
            </div>
        </div>
    </div>

    <!-- Product 3 -->
    <div class="col-md-3 d-flex justify-content-center">
        <div class="card product-card">
            <img src="{{ asset('images/tshirt.png') }}" class="card-img-top" alt="Product 3">
            <div class="card-body">
                <h5 class="card-title">Eco T-shirt</h5>
                <p class="card-text">$20.00</p>
                <a href="#" class="btn btn-success rounded-1">Buy Now</a>
            </div>
        </div>
    </div>
</div>


<!-- Contact Us Section -->
<div class="container-fluid mt-5 mx-5">
    <h1 class="mt-5" style="text-align: center"> Contact Us</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('contact.submit') }}" method="POST" style="max-width: 1000px;">
        @csrf

        <div class="form-group">
            <label for="name" class="font-weight-bold">Name</label>
            <input type="text" class="form-control shadow-sm" name="name" id="name" required>
            @error('name')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email" class="font-weight-bold">Email</label>
            <input type="email" class="form-control shadow-sm" name="email" id="email" required>
            @error('email')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="problem" class="font-weight-bold">Describe Your Problem</label>
            <textarea class="form-control shadow-sm" name="problem" id="problem" rows="4" required></textarea>
            @error('problem')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>

        <button type="submit" class="btn btn-success btn-lg mt-4" style="width: 300px;">Submit</button>
    </form>
</div>

<style>
    * {
        box-sizing: border-box;
    }

    html,
    body {
        width: 100%;
        overflow-x: hidden;
    }

    .hero {
        background: url('{{ asset('images/forest.png') }}') no-repeat center center;
        background-size: cover;
        height: 900px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: white;
        padding: 20px;
    }

    .hero h1 {
        font-size: 3rem;
        margin-bottom: 10px;
        font-weight: 700;
    }

    .hero p {
        font-size: 1.5rem;
    }

    .hero .btn {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 1rem;
    }

    .product-card {
        width: 100%;
        max-width: 300px;
        border-radius: 10px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .container-fluid {
        padding-left: 0;
        padding-right: 0;
    }

    .row {
        margin-left: 0;
        margin-right: 0;
    }

    .col-md-6 {
        padding-left: 0;
        padding-right: 0;
    }

    .product-card img {
        height: 200px;
        object-fit: cover;
        border-radius: 10px;
    }

    .product-card .card-body {
        padding: 20px;
        text-align: center;
    }

    .buy-now-btn {
        transition: background-color 0.3s, transform 0.3s;
        width: 100px;
    }

    .buy-now-btn:hover {
        background-color: #4CAF50;
        transform: scale(1.05);
    }

    .form-group label {
        font-size: 1rem;
        font-weight: 600;
    }

    .form-control {
        font-size: 1rem;
        padding: 10px;
        border-radius: 10px;
    }

    @media (max-width: 768px) {
        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }
    }

    @media (max-width: 576px) {
        .hero {
            height: 250px;
        }
    }

    .full-width-image {
        width: 100%;
        height: auto;
        max-height: 700px;
        /* Adjust this value to reduce the height */
        object-fit: cover;
    }

    h1 {
        font-size: 2.5rem;
        font-weight: bold;
        color: #333;
    }

    p {
        font-size: 1.3rem;
        line-height: 1.6;
    }

    .lead {
        font-size: 1.3rem;
    }

    .text-muted {
        color: #6c757d;
    }

    .text-dark {
        color: #333;
    }

    .text-success {
        color: #28a745;
    }
</style>

@endsection