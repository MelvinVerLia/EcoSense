@extends('layout.master')

@section('title', 'Contribute')

@section('content')

    <div class="hero">
        <div class="hero-content">
            <h1>Preserve Our Forests, Protect Our Future</h1>
            <p>Together, we can make a difference</p>
            <p>Join Us in Our Mission Today</p>
            <a href="#" class="btn btn-success rounded-pill">Contribute Now</a>
        </div>
    </div>

    <div class="container mt-5">
        <h1>About EcoSense</h1>

        <div class="row mt-4">
            <!-- Left Column: Text Content -->
            <div class="col-md-6">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus scelerisque dapibus arcu, non tincidunt nulla. Sed tincidunt, ligula non faucibus fringilla, magna eros tempor libero, non fringilla lorem dui in augue. Nam vehicula tortor orci, at tempus mi venenatis ac. Sed vel metus vitae odio condimentum scelerisque. Phasellus at orci vitae nisl pharetra pharetra. In eget risus nisl. Duis auctor hendrerit nisl, at interdum enim tempor sit amet.</p>

                <p>Morbi aliquam dolor ac nisi elementum, id efficitur felis pharetra. Nullam sollicitudin sit amet eros vitae vestibulum. Phasellus vel velit vel orci vestibulum efficitur. Mauris non ante velit. Pellentesque facilisis, leo eget sollicitudin tincidunt, urna nisi auctor dui, at malesuada felis magna sit amet augue.</p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-md-6">
                <img src="{{ asset('images/butterfly.jpg') }}" class="img-fluid rounded" alt="EcoSense Image">
            </div>
        </div>

    </div>

    <h1>Best Seller</h1>

    <div class="row">
        <div class="col-md-4 d-flex justify-content-center">
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <img src="{{ asset('images/lanyard.png') }}" class="card-img-top" alt="Product 1" style="height: 180px; object-fit: cover; border-radius: 10px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Lanyard</h5>
                    <p class="card-text">$10.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <img src="{{ asset('images/earth.png') }}" class="card-img-top" alt="Product 2" style="height: 180px; object-fit: cover; border-radius: 10px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Earth Plush</h5>
                    <p class="card-text">$15.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a>
                </div>
            </div>
        </div>

        <div class="col-md-4 d-flex justify-content-center">
            <div class="card mb-4" style="width: 220px; height: 320px; transition: transform 0.3s; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);">
                <img src="{{ asset('images/tshirt.png') }}" class="card-img-top" alt="Product 3" style="height: 180px; object-fit: cover; border-radius: 10px;">
                <div class="card-body d-flex flex-column justify-content-between">
                    <h5 class="card-title">Eco T-shirt</h5>
                    <p class="card-text">$20.00</p>
                    <a href="#" class="btn btn-success rounded-pill buy-now-btn">Buy Now!</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h1>Contact Us</h1>
        
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('contact.submit') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Your Name</label>
                <input type="text" class="form-control" name="name" id="name" required>
                @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
                @error('email')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="problem">Describe Your Problem</label>
                <textarea class="form-control" name="problem" id="problem" rows="4" required></textarea>
                @error('problem')
                    <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <style>
        .hero {
            background: url('{{ asset('images/forest.png') }}') no-repeat left center; /* Align image to the left */
            background-size: cover; /* Cover the entire section */
            height: 400px; /* Set height for the hero section */
            position: relative; /* Ensure positioning context for text */
            display: flex; /* Use flexbox to center text */
            align-items: center; /* Center text vertically */
            color: black; /* Text color */
            text-align: center; /* Align text to the left */
            margin-bottom: 20px; /* Add some space below the hero section */
            width: 100%; /* Ensure the hero section takes the full width */
            padding: 20px; /* Add some padding for the content */
        }

        .hero-content {
            max-width: 600px; /* Optional: Set a max width for the content */
        }

        .hero h1 {
            font-size: 2.5rem; /* Font size for the main text */
            margin-bottom: 10px; /* Space below the main text */
        }

        .hero p {
            font-size: 1.2rem; /* Font size for the secondary text */
        }

        @media (max-width: 768px) { /* Adjust height for smaller screens */
            .hero {
                height: 300px; /* Decrease height on smaller screens */
            }
        }

        @media (max-width: 576px) { /* Further adjustments for extra small screens */
            .hero {
                height: 200px; /* Further decrease height */
            }
        }

        .card:hover {
            transform: translateY(-5px); /* Lift the card on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.3); /* Darker shadow on hover */
        }

        .buy-now-btn {
            transition: background-color 0.3s, transform 0.3s; /* Transition for smooth hover effects */
        }

        .buy-now-btn:hover {
            background-color: #4CAF50; /* Darker green on hover */
            transform: scale(1.05); /* Slightly enlarge button on hover */
        }

        

    </style>


@endsection