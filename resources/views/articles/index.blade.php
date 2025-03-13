@extends('layouts.app')

@section('content')
    <h1>Articles</h1>

    @foreach($articles as $article)
        <div>
            <h2>{{ $article->title }}</h2>
            <p>{{ $article->image }}</p>
            <p>{{ $article->body }}</p>
            <a href="{{ route('articles.show', $article->id) }}">Read more</a>
        </div>
    @endforeach
@endsection
