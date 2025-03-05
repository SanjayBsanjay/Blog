

@extends('layouts.app')

@section('title', 'Posts tagged with: ' . $tag->tag)

@section('content')
<div class="container mt-5">
    <h1 class="text-center text-primary mb-4">Posts tagged with: <span class="badge bg-secondary">{{ $tag->tag }}</span></h1>

    <div class="row">
        @foreach($posts as $post)
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm border-0 animate__animated animate__fadeInUp">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ $post->short_description }}</p>
                        <a href="{{ route('blogs.detail', $post->slug) }}" class="btn btn-primary">Read More</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="col-12 my-3">
        <nav aria-label="Page navigation">
                {{ $posts->links('pagination::bootstrap-5') }}
        </nav>       
    </div>
</div>
@endsection
