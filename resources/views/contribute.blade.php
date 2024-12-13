@extends('layout.master')

@section('title', 'Contribute')

@section('content')

<h1>Contribute</h1>

<div class="container-fluid px-3">
    <div class="row justify-content-center">
        
        <!-- Card 1 -->
        <div class="col-md-8 mb-3">
            <div class="card shadow-lg border-0 d-flex flex-row align-items-center" style="height: 500px;">
                <div class="col-md-4 d-flex justify-content-center align-items-center p-0">
                    <img src="{{ asset('images/Reforest.jpeg') }}" class="card-img-left" alt="Reforest" style="height: 300px; width: 90%; object-fit: cover; object-position: center; margin: 0 0 0 40px;">
                </div>
                <div class="col-md-8 px-2 py-2 d-flex flex-column justify-content-between">
                    <h5 class="card-title">Donate to Reforestation Projects</h5>
                    <p class="card-text">Reforestation and afforestation projects are crucial for reversing deforestation and combating climate change.</p>
                    <!-- Updated Progress Bar -->
                    <div class="progress mb-2" style="height: 10px; margin: 0 0 0 60px; width: 90%;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%"></div>
                    </div>
                    <p class="text-end">60%</p>
                    <p class="text-end">$10.00</p>
                    <a href="/Donate1" class="btn btn-success rounded-pill mt-1">Donate Now!</a>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-8 mb-3">
            <div class="card shadow-lg border-0 d-flex flex-row align-items-center" style="height: 500px;">
                <div class="col-md-4 d-flex justify-content-center align-items-center p-0">
                    <img src="{{ asset('images/Agri.jpeg') }}" class="card-img-left" alt="Agri" style="height: 300px; width: 90%; object-fit: cover; object-position: center; margin: 0 0 0 40px;">
                </div>
                <div class="col-md-8 px-2 py-2 d-flex flex-column justify-content-between">
                    <h5 class="card-title">Support Sustainable Agriculture Initiatives</h5>
                    <p class="card-text">Sustainable farming promotes soil health, biodiversity, and food security.</p>
                    <!-- Updated Progress Bar -->
                    <div class="progress mb-2" style="height: 10px; margin: 0 0 0 60px; width: 90%;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <p class="text-end">75%</p>
                    <p class="text-end">$15.00</p>
                    <a href="/Donate2" class="btn btn-success rounded-pill mt-1">Donate Now!</a>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-8 mb-3">
            <div class="card shadow-lg border-0 d-flex flex-row align-items-center" style="height: 500px;">
                <div class="col-md-4 d-flex justify-content-center align-items-center p-0">
                    <img src="{{ asset('images/Greentech.jpeg') }}" class="card-img-left" alt="Greentech" style="height: 300px; width: 90%; object-fit: cover; object-position: center; margin: 0 0 0 40px;">
                </div>
                <div class="col-md-8 px-2 py-2 d-flex flex-column justify-content-between">
                    <h5 class="card-title">Support Green Technology and Innovation</h5>
                    <p class="card-text">Green tech offers solutions for renewable energy, waste management, and</p>
                    <p class="card-text">more.</p>
                    <!-- Updated Progress Bar -->
                    <div class="progress mb-2" style="height: 10px; margin: 0 0 0 60px; width: 90%;">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%"></div>
                    </div>
                    <p class="text-end">50%</p>
                    <p class="text-end">$20.00</p>
                    <a href="/Donate3" class="btn btn-success rounded-pill mt-1">Donate Now!</a>
                </div>
            </div>
        </div>

    </div>
</div>

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
    opacity: 0.3; /* Adjust this value to control image opacity */
    z-index: -1; /* Ensure it stays behind the content */
}

    h1 {
        text-align: center;
        padding: 30px 0;
        background-color: rgba(52, 133, 55, 0.7); /* Make background slightly transparent */
        color: white;
        margin: 0 0 40px 0;
        font-size: 2.5em;
        letter-spacing: 0.5px;
        text-transform: uppercase;
    }

    .container-fluid {
        padding-left: 20px;
        padding-right: 20px;
    }

    .card {
        transition: transform 0.3s ease;
        background-color: rgba(212, 237, 218, 0.9); /* Semi-transparent background for cards */
        height: 500px;
        margin: 0 0 40px 0;
        border-radius: 40px;
    }

    .card-img-left {
        width: 80%;
        height: 250px;
        object-fit: cover;
        object-position: center;
    }

    .col-md-4 {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .col-md-8 {
        padding-left: 10px;
        padding-right: 10px;
    }

    .card-title {
        font-size: 3.00em;
        margin: 0 0 0.5rem 60px;
    }

    .card-text {
        font-size: 2.00em;
        margin: 0 40px 0.5rem 60px;
    }

    .btn {
    font-size: 2.5em; /* Increase font size */
    background-color: white;
    color: #2D642F;
    border: 2px solid #4CAF50;
    text-align: center;
    width: 60%; /* Slightly increase width */
    margin-left: auto;
    margin-right: auto;
    padding: 15px 25px; /* Increase padding for a larger button */
    transition: background-color 0.3s, color 0.3s;
}

.btn:hover {
    background-color: #4CAF50;
    color: white;
}


    @media (max-width: 768px) {
        .col-md-8 {
            flex: 0 0 100%;
            max-width: 100%;
        }

        .card-img-left {
            height: 160px;
        }

        h1 {
            font-size: 2.3em;
        }
    }

    .progress-bar {
        transition: width 0.5s ease;
        background-color: #16B616;
    }

    .text-end {
        font-size: 1.50em;
        color: #333;
        margin: 0 70px 0 0;
    }
</style>

@endsection