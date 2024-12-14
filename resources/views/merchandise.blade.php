@extends('layout.master')

@section('title', 'Shop Merchandise')

@section('content')

<h1 class="text-center mb-5">Merchandise</h1>

<!-- Merchandise Section -->
<section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
        <div class="row row-cols-2 row-cols-md-3 row-cols-xl-4 g-4 justify-content-center">

            @foreach($merchandise as $product)
                <div class="col mb-5">
                    <div class="card h-100 shadow-lg rounded-3 overflow-hidden">
                        <img src="{{ $product->image ? asset('storage/' . $product->image) : "https://dummyimage.com/450x300/dee2e6/6c757d.jpg" }}"
                            class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                        <div class="card-body p-4">
                            <div class="text-center">
                                <h5 class="fw-bolder">{{ $product->name }}</h5>
                                <p class="card-description">{{ $product->description }}</p>
                                <p class="card-text">Rp. {{ number_format($product->price, 2) }}</p>
                            </div>
                        </div>
                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                            <div class="text-center">
                            <a href="{{ route('checkout', $product->id) }}" class="btn mt-auto">View Merch</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>

<!-- Bootstrap Core JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<style>
    body {
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        height: max;
    }

    /* Using ::after to apply opacity to the image */
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
        /* Adjust this value to control image opacity */
        z-index: -1;
        /* Ensure it stays behind the content */
    }

    h1 {
        text-align: center;
        padding: 30px 0;
        background-color: rgba(52, 133, 55, 0.7);
        /* Make background slightly transparent */
        color: white;
        margin: 0 0 40px 0;
        font-size: 2.5em;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    /* Card hover effect */
    .card {
        transition: transform 0.3s ease-in-out;
        background-color: rgba(212, 237, 218, 0.9);
        min-height: 550px;
        /* Increased card height */
        width: 110%;
        border-radius: 40px;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 30px rgba(0, 0, 0, 0.2);
    }

    /* Card styling */
    .card-body {
        padding: 20px;
    }

    h5.card-title {
        font-size: 1.4rem;
        /* Increased title size */
        font-weight: 600;
    }

    .card-description {
        font-size: 1.1rem;
        /* Slightly larger description */
        color: #777;
        margin: 10px 0;
    }

    .card-text {
        font-size: 1.2rem;
        /* Slightly larger text size */
        color: #555;
    }

    .container {
        padding-top: 50px;
    }

    /* Grid layout */
    .row-cols-md-3 {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 5rem;
        /* Increased the gap between columns and rows */
    }

    .col {
        max-width: 600px;
        /* Increased max-width of card */
        width: 100%;
    }

    /* Responsive design */
    @media (max-width: 1200px) {
        .row-cols-md-3 {
            grid-template-columns: repeat(2, 1fr);
            /* Two columns on medium screens */
            gap: 2rem;
            /* Adjust gap for medium screens */
        }
    }

    @media (max-width: 768px) {
        .row-cols-md-3 {
            grid-template-columns: 1fr;
            /* Single column on small screens */
            gap: 1.5rem;
            /* Adjust gap for small screens */
        }
    }

    /* Button styling */
    .btn {
        font-size: 2.5em;
        /* Increase font size */
        background-color: white;
        color: #2D642F;
        border: 2px solid #4CAF50;
        border-radius: 40px;
        text-align: center;
        font-size: 1.50em;
        width: 60%;
        /* Slightly increase width */
        margin: 0 auto;
        margin-bottom: 15px;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn:hover {
        background-color: #4CAF50;
        color: white;
    }
</style>

@endsection