<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My Blog')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body class="d-flex flex-column min-vh-100">
    <header class="bg-dark py-3">
        <div class="container">
            <nav class="d-flex justify-content-between">
                <a href="{{ url('/blogs') }}" class="text-white h4 text-decoration-none">My Blog</a>
        <form action="{{ route('blogs.search') }}" method="GET" class="d-flex">
            <div class="input-group">
                <input type="text" name="query" class="form-control" placeholder="Search..." aria-label="Search">
                <button type="submit" class="btn btn-outline-light">
                    <i class="bi bi-search"></i>
                </button>
            </div>
            
        </form>
        
                <div class="d-flex">
                    {{-- <a href="{{ url('/blogs') }}" class="text-white me-3 mt-2 text-decoration-none">Home</a> --}}
                    <a href="{{ url('/blogs/featured') }}" class="text-white mt-2 text-decoration-none">Featured Blog</a> 
                    <div class="dropdown">
                        <button class="btn dropdown-toggle text-white" type="button" id="categoryDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                            Categories
                        </button>                 
                        {{-- <ul class="dropdown-menu " aria-labelledby="categoryDropdown">
                            <li><a class="dropdown-item text-primary text-primary" href="{{ url('/blogs/category/technology') }}">Technology</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ url('/blogs/category/lifestyle') }}">Lifestyle</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ url('/blogs/category/health') }}">Health</a></li>
                            <li><a class="dropdown-item text-primary" href="{{ url('/blogs/category/business') }}">Business</a></li>
                        </ul> --}}
                        <ul class="dropdown-menu" aria-labelledby="categoryDropdown">
                            @foreach($categories as $category)
                                <li>
                                    <a class="dropdown-item text-primary" href="{{ url('/blogs/category/' . $category->name) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                        
                    </div>
                </div>
            </nav>
        </div>
    </header>

    <main class="flex-grow-1">
        @yield('content')
    </main>

    <footer class="bg-dark text-white text-center py-3 mt-auto">
        &copy; {{ date('Y') }} My Blog | All Rights Reserved
    </footer>


    {{-- <main class="container">
        @yield('content') 
    </main>
    <footer class="bg-dark text-white text-center py-3 mt-5">
        <p>&copy; {{ date('Y') }} My Blog | All Rights Reserved</p>
    </footer> --}}


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).fadeIn(200);
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).fadeOut(200);
            });
        });
    </script>
</body>
</html>




