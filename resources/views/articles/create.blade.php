@extends('layouts.app')

@section('content')
    <h1>Create Article</h1>

    <form action="{{ route('articles.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>

        <div>
            <label for="body">Body:</label>
            <textarea name="body" id="body" rows="5" required>{{ old('body') }}</textarea>
        </div>

        <div class="form-group">
            <label for="image">Upload Image</label>
            <input type="file" name="image" class="form-control-file" id="image">
        </div>

        <button type="submit">Create Article</button>
    </form>
@endsection
