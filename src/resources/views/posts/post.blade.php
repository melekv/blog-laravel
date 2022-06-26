@extends('index')

@section('title', 'title')

@section('content')
    @if (!empty($post))
        <div class="card mt-2 mb-2">
            <div class="card-body">
                <h5 class="card-title">{{ $post->title }}</h5>
                <span class="badge bg-secondary">{{ $post->created_at }}</span>
                <p class="card-text">
                    {{ $post->content }}
                </p>
            </div>
        </div>
        <a href="/{{ $post->user_id }}/posts" class="btn btn-primary">Wszystkie posty</a>
    @endif
@endsection
