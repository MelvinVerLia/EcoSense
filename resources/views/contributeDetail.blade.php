@extends('layout.master')

@section('title', 'Contribution')

@section('content')

<h1>{{$contribute->name}}</h1>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-4">
            <div class="img-container mb-4">
                <img src="{{ $contribute->image ? asset('storage/' . $contribute->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                    style="height: 600px; object-fit: cover; object-position: center;" class="card-img-top"
                    alt="{{ $contribute->name }}" />
                <p>
                    {{$contribute->content}}
                </p>
            </div>

            <form action="{{route('donate', $contribute->id)}}" method="POST">
                @csrf
                <div class="card shadow-lg border-0 p-4 px-5 mb-4 rounded-lg">
                    <h2 class="text-center text-success mb-4">Make a Donation</h2>

                    <div class="mb-1">
                        <label for="name" class="form-label text-muted" style="margin-bottom: 0;">Charity Name: </label>
                        <p id="name" class="font-weight-bold" style="margin-bottom: 0;">{{$contribute->name}}</p>
                    </div>

                    <div class="mb-1">
                        <label for="goal" class="form-label text-muted" style="margin-bottom: 0;">Goal: </label>
                        <p id="goal" class="font-weight-bold" style="margin-bottom: 0;">Rp. {{$contribute->goal}}</p>
                    </div>

                    <div class="mb-3">
                        <label for="totalRaised" class="form-label text-muted" style="margin-bottom: 0;">Total Raised:
                        </label>
                        <p id="totalRaised" class="font-weight-bold" style="margin-bottom: 0;">Rp.
                            {{$contribute->total_raised}}</p>
                    </div>

                    <div class="mb-5">
                        <label for="donationAmount" class="form-label">Donation Amount (Rp.)</label>
                        <input type="number" class="form-control" id="donationAmount" name="donationAmount"
                            placeholder="Enter your donation amount">
                        @error('donationAmount')
                            <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="text-center">
                        <button type="submit" class="btn btn-success rounded-pill px-1 py-1 shadow">Donate Now</button>
                    </div>
                </div>
            </form>
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

        p {
            font-size: 24px;
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

        .row {
            margin-left: 0;
            margin-right: 0;
        }

        .container-fluid {
            padding-left: 0;
            padding-right: 0;
        }

        .card {
            transition: transform 0.3s ease;
            background-color: rgba(212, 237, 218, 0.9);
            height: 550px;
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

        .card-title {
            font-size: 3.00em;
            margin: 0 0 0.5rem 60px;
        }

        .card-text {
            font-size: 2.00em;
            margin: 0 40px 0.5rem 60px;
        }

        .btn {
            font-size: 24px;
            background-color: white;
            color: #2D642F;
            border: 2px solid #4CAF50;
            text-align: center;
            width: 30%;
            margin: 0 auto;
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

        .form-label {
            font-size: 1.2em;
            color: #333;
        }

        .form-control {
            font-size: 1.2em;
            padding: 10px;
        }

        .form-select {
            font-size: 1.2em;
            padding: 10px;
        }

        .card-body {
            background-color: rgba(255, 255, 255, 0.9);
            border-radius: 20px;
            padding: 20px;
        }
    </style>

    @endsection