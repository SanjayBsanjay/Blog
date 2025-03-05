@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <h1>Search Results for: "{{ $query }}"</h1>

    @if($posts->count() > 0)
        <div class="row">
            @foreach($posts as $post)
                <div class="col-md-4">
                    <div class="card mb-4">
                        {{-- <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}"> --}}
                        <div class="card-body">
                            <a href="{{ route('blogs.detail', $post->slug) }}">{{ $post->title }}</a>
                            
                            {{-- <h6 class="card-title">{{ $post->title }}</h6> --}}
                            {{-- <p class="card-text">{{ $post->short_description }}</p> --}}
                            <p class="card-text">{{ Str::limit($post->short_description, 100) }}</p>
                            {{-- <a href="{{ route('blogs.detail', $post->title) }}" class="btn btn-primary">Read More</a> --}}
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
    @else
        <p>No results found for your search query.</p>
    @endif
@endsection
