@extends('layouts.app')

@section('content')
    <h1>{{ $article->title }}</h1>
    <p>{{ $article->image }}</p>
    <p>{{ $article->body }}</p>
@endsection
