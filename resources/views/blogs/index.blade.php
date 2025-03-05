


@extends('layouts.app')

@section('title', 'All Blogs')

@section('content')
    <div class="container mt-3">
        <h2 class="text-center text-primary mb-4">All Blog Posts</h2>
        
        <div class="row">
            @foreach($allPosts as $post)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card shadow-sm border-0 animate__animated animate__fadeInUp">
                        {{-- <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title text-dark">{{ $post->title }}</h5>
                            <p class="card-text text-muted">{{ Str::limit($post->short_description, 100) }}</p>
                            <a href="{{ route('blogs.detail', $post->slug) }}" class="btn btn-primary">Read More</a>
                        </div>
                        <div class="card-footer bg-white border-0 text-muted small d-flex justify-content-between">
                            {{-- <span>By {{ $post->author->name }}</span> --}}
                            {{-- <span>{{ $post->created_at->format('M d, Y') }}</span> --}}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="col-12 my-3">
            <nav aria-label="Page navigation">
                    {{ $allPosts->links('pagination::bootstrap-5') }}
            </nav>       
        </div>
    </div>
@endsection
