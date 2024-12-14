@extends('layout.master')

@section('title', 'Home')

@section('content')

@if(session('success'))
    <div class="alert alert-success w-100" style="margin-bottom: 0;">
        {{ session('success') }}
    </div>
@endif
@if(session('contact_success'))
    <div class="alert alert-success w-100" style="margin-bottom: 0;">
        {{ session('contact_success') }}
    </div>
@endif
@if(session('contact_err'))
    <div class="alert alert-danger w-100" style="margin-bottom: 0;">
        {{ session('contact_err') }}
    </div>
@endif

<div class="hero">
    <div class="hero-content">
        <h1>Preserve Our Forests, Protect Our Future</h1>
        <p>Together, we can make a difference</p>
        <p>Join Us in Our Mission Today</p>
        <a href="{{route('contribute')}}" class="btn btn-success rounded-pill">Contribute Now</a>
    </div>
</div>

<div class="container-fluid1">
    <div class="row">
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

<h1 class="mt-5" style="text-align: center">Check Out Our Products</h1>

<div class="row mt-4">

    @foreach ($products as $p)
        <div class="col mb-5 d-flex justify-content-center align-items-center">
            <div class="card h-100 shadow-lg rounded-3 overflow-hidden text-center">
                <img src="{{ $p->image ? asset('storage/' . $p->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                    class="card-img-top" alt="{{ $p->name }}" style="height: 250px; object-fit: cover;">
                <div class="card-body p-4">
                    <div class="text-center">
                        <h5 class="fw-bolder">{{ $p->name }}</h5>
                        <p class="card-description">{{ $p->description }}</p>
                        <p class="card-text">Rp. {{ number_format($p->price, 2) }}</p>
                    </div>
                </div>
                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                    <div class="text-center">
                        <a href="{{ route('checkout', $p->id) }}" class="btn mt-auto">View Merch</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach

    <div class="container-fluid1 mt-5 mx-5">
        <h1 class="mt-5" style="text-align: center"> Contact Us</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST" style="max-width: 1000px;">
            @csrf

            <div class="form-group mb-1">
                <label for="email" class="font-weight-bold">Email</label>
                <input type="email" class="form-control shadow-sm" name="email" id="email">
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="problem" class="font-weight-bold">Describe Your Problem</label>
                <textarea class="form-control shadow-sm" name="complaints" id="complaints" rows="4"></textarea>
                @error('complaints')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-success btn-lg mt-4 mb-5" style="width: 300px;">Submit</button>
        </form>
    </div>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            overflow-x: hidden;
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
            background-image: url('{{ asset('images/BG.png') }}');
            background-size: cover;
            background-position: center;
            opacity: 0.3;
            z-index: -1;
        }

        .btn {
            font-size: 2.5em;
            background-color: white;
            color: #2D642F;
            border: 2px solid #4CAF50;
            border-radius: 40px;
            text-align: center;
            font-size: 1.50em;
            margin: 0 auto;
            transition: background-color 0.3s, color 0.3s;
        }

        .form-control:focus {
            box-shadow: none;
            border-color: rgb(59, 153, 75)
        }

        .btn:hover {
            background-color: #4CAF50;
            color: white;
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

        .card {
            transition: transform 0.3s ease-in-out;
            background-color: rgba(212, 237, 218, 0.9);
            min-height: 550px;
            width: 70%;
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

        .container-fluid1 {
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

            footer {
                display: none;
            }
        }

        .full-width-image {
            width: 100%;
            height: auto;
            max-height: 700px;
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