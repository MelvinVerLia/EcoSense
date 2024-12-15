@extends('layout.master')

@section('title', 'Article')

@section('content')

<h1>Articles</h1>

<div class="content-container d-flex justify-content-center align-items-start">
    <div class="articles-container d-flex flex-wrap justify-content-center gap-5 my-4">
        @foreach($articles as $article)
            <div class="article">
                <h2 style="font-size: 34px;">{{$article->title}}</h2>
                <img src="{{ $article->image ? asset('storage/' . $article->image) : 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"
                    class="card-img-top" alt="{{ $article->title }}" />
                <p class="mt-1">{{ \Illuminate\Support\Str::limit($article->content, 150) }}</p>
                <a href="{{route('article.detail', $article->id)}}" class="btn">Read More</a>
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

    .article {
        width: 500px;
        background-color: rgba(212, 237, 218, 0.9);
        padding: 50px;
        margin-bottom: 20px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .article img {
        height: 250px;
        object-fit: cover;
        width: 100%;
        border-radius: 8px;
    }

    .article:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .article h2 {
        font-size: 1.8em;
        margin: 15px 0;
    }

    .article p {
        font-size: 1em;
        color: #555;
    }

    .btn {
        font-size: 2.5em;
        background-color: white;
        color: #2D642F;
        border: 2px solid #4CAF50;
        border-radius: 40px;
        text-align: center;
        font-size: 1.50em;
        width: 40%;
        margin: 0 auto;
        transition: background-color 0.3s, color 0.3s;
    }

    .btn:hover {
        background-color: #4CAF50;
        color: white;
    }

    @media (max-width: 768px) {
        .article {
            width: 100%;
        }
    }
</style>

@endsection