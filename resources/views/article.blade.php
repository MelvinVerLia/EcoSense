@extends('layout.master')

@section('title', 'Home')

@section('content')

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>

<body>
    <h1>Articles</h1>
    <div>
        @foreach($articles as $article)
            <div style="margin-bottom: 20px;">
                <h2>{{ $article->title }}</h2>
                <img src="{{ asset('storage/'.$article->image) }}" alt="" style="max-width: 300px;">
                <p>{{ $article->content }}</p>
            </div>
        @endforeach
    </div>

    <div>
        <!-- <div style="margin-bottom: 20px;">
            <h2>ayam goreng</h2>
            <img src="{{ asset('images/butterfly.jpg') }}" alt="" style="max-width: 300px;">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequuntur delectus fugiat, natus
                itaque eligendi molestias iste iure sit, error soluta cum vero. Ipsam alias laborum aliquam in
                distinctio voluptatibus!</p>
        </div>

        <div style="margin-bottom: 20px;">
            <h2>ayam goreng</h2>
            <img src="{{ asset('images/butterfly.jpg') }}" alt="" style="max-width: 300px;">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequuntur delectus fugiat, natus
                itaque eligendi molestias iste iure sit, error soluta cum vero. Ipsam alias laborum aliquam in
                distinctio voluptatibus!</p>
        </div>

        <div style="margin-bottom: 20px;">
            <h2>ayam goreng</h2>
            <img src="{{ asset('images/butterfly.jpg') }}" alt="" style="max-width: 300px;">
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quibusdam consequuntur delectus fugiat, natus
                itaque eligendi molestias iste iure sit, error soluta cum vero. Ipsam alias laborum aliquam in
                distinctio voluptatibus!</p>
        </div> -->
    </div>


</body>

</html>


@endsection