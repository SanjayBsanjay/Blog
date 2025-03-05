



@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="card shadow-sm border-0 animate__animated animate__fadeInUp">
            <div class="card-body">
                <h1 class="text-primary">{{ $post->title }}</h1>
                <p class="lead">{{ $post->description }}</p>
                <p><strong>Category:</strong> <span class="badge bg-secondary">{{ $post->category->name }}</span></p>
                <p><strong>Tags:</strong>
                    @foreach($post->tags as $tag)
                        <a href="{{ route('blogs.byTag', Str::slug($tag->tag)) }}" class="badge bg-primary text-decoration-none">{{ $tag->tag }}</a>
                    @endforeach
                </p>
                <div class="d-flex justify-content-end">
                    <a href="{{ url('/blogs') }}" class="btn btn-outline-dark mt-3">Back to Blogs</a>
                </div>
            </div>
        </div>
    </div>
@endsection



