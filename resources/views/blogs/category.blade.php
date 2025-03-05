
@extends('layouts.app')

@section('title', 'Blogs in ' . $category->name)

@section('content')
    <div class="container mt-5">
        <h1 class="text-center text-primary mb-4">Blogs in {{ $category->name }} Category</h1>
        <div class="row">
            @foreach ($blogs as $blog)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-0 animate__animated animate__fadeInUp">
                        {{-- <img src="{{ $blog->image_url }}" class="card-img-top" alt="{{ $blog->title }}"> --}}
                        <div class="card-body">
                            <h5 class="card-title">{{ $blog->title }}</h5>
                            <p class="card-text">{{ $blog->short_description }}</p>
                            <a href="{{ route('blogs.detail', $blog->slug) }}" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="col-12 my-3">
            <nav aria-label="Page navigation">
                    {{ $blogs->links('pagination::bootstrap-5') }}


            </nav>       
        </div>
    </div>
@endsection
