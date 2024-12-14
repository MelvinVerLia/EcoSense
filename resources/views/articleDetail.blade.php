@extends('layout.master')

@section('title', 'articles')

@section('content')

<header>
    <h1>{{$article->title}}</h1>
</header>

<div class="container-fluid">
    <div class="row">
        <!-- Left Column: Text Content -->
        <div class="col-md-8 mx-auto px-4 py-5">

            <!-- Article Image -->
            <div class="image-container mb-4">
                <h5>{{$article->created_at}}</h5>
                <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                    style="height: 600px; object-fit: cover; object-position: center;" class="card-img-top"
                    alt="{{ $article->title }}" />
                <h5>{{$article->author}}</h5>
            </div>

            <p class="text-dark">
                @php
                    $words = explode(' ', $article->content); // Split content into words
                    $chunks = array_chunk($words, 100); // Split the words into chunks of 100 words
                @endphp

                @foreach($chunks as $chunk)
                    <p>{{ implode(' ', $chunk) }}</p> <!-- Rejoin the chunk of words into a string and wrap in a new <p> -->
                @endforeach
            </p>
        </div>
    </div>
</div>

<style>
    body {
        font-family: 'Roboto', sans-serif;
        position: relative;
        background-color: #f4f4f9;
        color: #333;
        line-height: 1.6;
        margin: 0;
        padding: 0;
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
        /* Adjust this value to control image opacity */
        z-index: -1;
        /* Ensure it stays behind the content */
    }

    header h1 {
        text-align: center;
        padding: 50px 0;
        background-color: rgba(52, 133, 55, 0.7);
        color: white;
        font-size: 2.8em;
        letter-spacing: 1px;
        text-transform: uppercase;
        margin: 0;
    }

    .container-fluid {
        padding: 0 15px;
    }

    .col-md-8 {
        max-width: 1500px;
        margin: 0 auto;
        font-size: 20px;
    }

    /* Styling for small devices */
    @media (max-width: 767px) {
        header h1 {
            font-size: 2.2em;
        }

        .container-fluid {
            padding: 0 10px;
        }

        .text-dark {
            font-size: 1em;
        }

        .col-md-8 {
            padding: 0;
            width: 100%;
        }
    }
</style>

@endsection