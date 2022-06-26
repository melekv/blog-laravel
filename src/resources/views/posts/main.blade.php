@extends('index')

@section('title', 'Blog')

@section('style')
    <link rel="stylesheet" href="{{ asset('css/posts.css') }}">
@endsection

@section('content')
    <div class="grid-layout">
        @foreach ($posts as $post)
            <div class="card">
                <img class="card-img-top" src="{{ asset('storage/' . $post->image) }}" alt="" width="100%">
                <div class="card-body">
                    <h3 class="card-title">{{ $post->title }}</h3>
                    <h6 class="card-subtitle text-muted">{{ $post->created_at }}</h6>
                    <p class="card-text">
                        {{ $post->contentShort }}
                    </p>
                    <a href="/{{ $post->user_id }}/posts/{{ $post->id }}" class="btn btn-primary">Szczegóły</a>
                </div>
            </div>
        @endforeach
    </div>
    @auth
        <a href="/posts/add" class="btn btn-secondary m-3">Dodaj nowy post</a>
    @endauth
@endsection