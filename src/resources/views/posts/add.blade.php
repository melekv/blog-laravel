@extends('index')

@section('title', 'Dodaj post')

@section('content')
    <h1>Dodaj post</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Tytuł:</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            @error('title')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Treść:</label>
            <textarea class="form-control" id="content" rows="3" name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="form-text">{{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="image">Grafika:</label>
            <input id="image" class="form-control" type="file" name="image" accept="image/*">
        </div>
        <button type="submit" class="btn btn-primary">Zapisz</button>
        <a href="/{{ Auth::id() }}/posts" class="btn btn-secondary">Wróć</a>
    </form>
@endsection