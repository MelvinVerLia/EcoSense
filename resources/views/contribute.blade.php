@extends('layout.master')

@section('title', 'Contribute')

@section('content')

<h1>Contribute</h1>

<div class="container-fluid">
    <div class="row justify-content-center">

        @foreach ($contribute as $c)
            <div class="col-md-8 mb-5" style="padding: 0;">
                <div class="card shadow-lg border-0 d-flex flex-row align-items-center px-5 py-5">
                    <div class="col-md-4 d-flex justify-content-center align-items-center">
                        <img src="{{ $c->image ? asset('storage/' . $c->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                            style="height: 100%; object-fit: cover; object-position: center;" class="card-img-top"
                            alt="{{ $c->name }}" />
                    </div>
                    <div class="col-md-8 d-flex flex-column justify-content-between">
                        <h5 class="card-title">{{$c->name}}</h5>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($c->content, 100) }}</p>
                        <div class="progress mb-2" >
                            <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar"
                                aria-valuenow="{{ $c->current_progress * 100 }}" aria-valuemin="0" aria-valuemax="100"
                                style="width: {{ $c->current_progress }}%;">
                            </div>
                        </div>
                        <p class="text-end">{{$c->current_progress}}%</p>
                        <a href="{{route('contribute.detail', $c->id)}}" class="btn btn-success rounded-pill mt-1">Donate Now!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<style>
    body {
        position: relative;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        background-repeat: no-repeat;
        height: 100%;
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

    .progress{
        height: 10px; 
        margin-left: 60px;
        margin-right: 70px;
    }

    .container-fluid {
        margin-left: 0;
        margin-right: 0;
    }

    .card {
        transition: transform 0.3s ease;
        background-color: rgba(212, 237, 218, 0.9);
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
        height: 400px; 
        overflow: hidden; 
    }

    .card-title {
        font-size: 48px;
        margin: 0 0 0.5rem 70px;
    }

    .card-text {
        font-size: 24px;
        margin: 0 60px 0.5rem 70px;
    }

    .btn {
        font-size: 24px;
        background-color: white;
        color: #2D642F;
        border: 2px solid #4CAF50;
        text-align: center;
        width: 50%;
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
</style>

@endsection