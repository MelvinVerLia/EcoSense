@extends('layout.master')

@section('title', 'Article')

@section('content')


<h1>Articles</h1>

<div class="content-container">

    <div class="articles-container">
        @foreach($articles as $article)
            <div class="article">
                <div class="article-title-row">
                    <h2 class="article-title">{{ $article->title }}</h2>
                    @if($article->image)
                        <img src="" alt="{{ $article->title }}" class="article-image">
                    @endif
                </div>

                <p class="article-content">{{ \Illuminate\Support\Str::limit($article->content, 150) }}</p>

                <a href="{{ route('article.show', $article->id) }}" class="button">Read More</a>
            </div>
        @endforeach
    </div>
</div>

<div class="static-articles-container">
    <div class="static-article">
        <h2>Tackling the Climate Crisis: A Global Call to Action</h2>
        <img src="{{ asset('images/butterfly.jpg') }}" alt="Pollution" class="static-article-img">
        <p>As the world continues to face the urgent reality of climate change, scientists...</p>
        <a href="/article/1" class="button">Read More</a>
    </div>
    <div class="static-article">
        <h2>Forests: Earth's Guardians Against Climate Change</h2>
        <img src="{{ asset('images/butterfly.jpg') }}" alt="Forests" class="static-article-img">
        <p>Forests, often referred to as the "lungs of the Earth," play an essential role...</p>
        <a href="/article/2" class="button">Read More</a>
    </div>
    <div class="static-article">
        <h2>The Growing Threat of Wildfires in a Warming World</h2>
        <img src="{{ asset('images/butterfly.jpg') }}" alt="Wildfire" class="static-article-img">
        <p>As the planet warms, wildfires are becoming an increasingly dangerous...</p>
        <a href="/article/3" class="button">Read More</a>
    </div>

    <div class="latest-article-container">
        <div class="latest-article">
            <h2>Latest Article</h2>
            @if($articles->isNotEmpty())
                <a href="{{ route('article.show', $articles->first()->id) }}" class="button">
                    {{ $articles->first()->title }}
                </a>
            @else
                <p>No articles available yet.</p>
            @endif
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


    /* Main content container with flex layout */
    .content-container {
        display: flex;
        justify-content: space-between;
        gap: 80px;
        /* Increased gap for more space */
        margin: 20px auto;
        max-width: 1650px;
        /* Increased max-width by 20% */
        padding: 0 20px;
        flex-direction: column-reverse;
    }

    /* Articles container */
    .articles-container {
        flex: 3;
        display: flex;
        flex-direction: column;
        gap: 40px;
        width: 138%;
        /* Increased width by 20% */
    }

    /* Right side container for Latest Article */
    .latest-article-container {
        flex: 1;
        display: flex;
        flex-direction: column;
        gap: 30px;
    }

    .latest-article {
        background-color: #f0f8f0;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .latest-article h2 {
        font-size: 2em;
        color: #333;
        margin-bottom: 20px;
    }

    /* Articles list */
    .article {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        padding: 30px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        width: 138%;
        /* Increased width by 20% */
    }

    .article:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .article-title-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
    }

    .article-title {
        font-size: 2.2em;
        color: #333;
        margin: 0;
        font-weight: bold;
        letter-spacing: 1px;
    }

    .article-image {
        width: 120px;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
        margin-left: 20px;
    }

    .article-content {
        font-size: 1.3em;
        color: #666;
        line-height: 1.8;
        margin-bottom: 25px;
        text-align: justify;
    }

    .button {
        display: inline-block;
        padding: 14px 30px;
        background-color: #85E78C;
        color: white;
        text-decoration: none;
        border-radius: 35px;
        font-size: 1.3em;
        font-weight: bold;
        text-transform: uppercase;
        letter-spacing: 1px;
        transition: background-color 0.3s ease;
    }

    .button:hover {
        background-color: #45a049;
    }

    /* Static Articles Container */
    .static-articles-container {
        display: flex;
        justify-content: space-evenly;
        gap: 80px;
        /* Increased gap for more space */
        margin: 50px auto;
        max-width: 1650px;
        /* Increased max-width by 20% */
        padding: 0 20px;
    }

    .static-article {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 6px 20px rgba(0, 0, 0, 0.1);
        width: 41% !important;
        /* Increased width by 20% */
        height: 800px;
        padding: 30px;
        text-align: center;
        margin-bottom: 80px;
    }

    .static-article:hover {
        transform: translateY(-10px);
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .static-article-img {
        max-width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 10px;
        margin-bottom: 30px;
    }

    .static-article-img:hover {
        transform: scale(1.05);
    }

    .static-article p {
        font-size: 1.1em;
        color: #555;
        line-height: 1.7;
        text-align: justify;
        margin-bottom: 30px;
    }

    /* Responsive Layout */
    @media (max-width: 768px) {
        .content-container {
            flex-direction: column;
            gap: 30px;
        }

        .articles-container,
        .latest-article-container {
            width: 100%;
        }

        .static-article {
            width: 48%;
            /* Adjusted for smaller screens */
        }
    }
</style>


@endsection