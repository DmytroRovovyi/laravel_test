<form action="{{ route('articles.update', $article->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" name="title" class="form-control" id="title" value="{{ old('title', $article->title) }}" required>
    </div>

    <div class="form-group">
        <label for="body">Body</label>
        <textarea name="body" class="form-control" id="body" required>{{ old('body', $article->body) }}</textarea>
    </div>

    @if($article->image)
        <div class="form-group">
            <label>Current Image</label>
            <img src="{{ asset('storage/' . $article->image) }}" alt="Image" style="max-width: 200px;">
        </div>
    @endif

    <div class="form-group">
        <label for="image">Upload New Image</label>
        <input type="file" name="image" class="form-control-file" id="image">
    </div>

    <button type="submit" class="btn btn-primary">Update Article</button>
</form>
