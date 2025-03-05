



@extends('layouts.app')

@section('title', 'Featured Blogs')

@section('content')
    <h2 class="text-center text-primary">Featured Blogs</h2>

    <div class="container">
        <div class="row">
            @foreach($featuredPosts as $post)
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
                    {{ $featuredPosts->links('pagination::bootstrap-5') }}
            </nav>       
        </div>
    </div>
@endsection
