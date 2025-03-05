<?php

// namespace App\Http\Controllers;

// use App\Models\Post;
// use App\Models\Tag;
// use App\Models\Category;
// use Illuminate\Http\Request;

// class BlogController extends Controller
// {
 
//     public function index()
//     {
//         $allPosts = Post::paginate(9);
//         return view('blogs.index', compact('allPosts'));
//     }

//     public function featured()
//     {
//         $featuredPosts = Post::whereHas('category', function ($query) {
//             $query->where('featured', 'Yes');
//         })->paginate(9); 

//         return view('blogs.featured', compact('featuredPosts'));
//     }

//     public function detail($slug)
//     {
//         $post = Post::where('slug', $slug)->firstOrFail(); // Find post by slug
//         return view('blogs.detail', compact('post'));
//     }

//     public function byTag($slug)
//     {
//         $tag = Tag::where('slug', $slug)->firstOrFail();
//         $posts = $tag->posts()->where('status', 'published')->paginate(6);
//         return view('blogs.tag', compact('posts', 'tag'));
//     }

//     //cate
//     public function categoryBlogs($name)
//     {
//         $category = Category::where('name', $name)->firstOrFail();
//         $blogs = Post::where('category_id', $category->id)->paginate(6);       
//         return view('blogs.category', compact('blogs', 'category'));
//     }


//     public function search(Request $request)
//     {
//         $query = $request->input('query');
//         $posts = Post::where('title', 'like', '%' . $query . '%')
//                      ->orWhere('content', 'like', '%' . $query . '%')
//                      ->paginate(9);

//         return view('blogs.search', compact('posts', 'query'));
//     }

//     //tag show
//     // public function show($title)
//     // {
//     //     $post = Post::where('title', $title)->firstOrFail();
//     //     return view('blogs.show', compact('post'));
//     // }

// }






namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    // 🏠 Home Page - Show All Blogs
    public function index()
    {
        return view('blogs.index', [
            'categories' => Category::all(),
            'allPosts' => Post::published()->paginate(9)
        ]);
    }

    // ⭐ Show Featured Posts
    public function featured()
    {
        return view('blogs.featured', [
            'categories' => Category::all(),
            'featuredPosts' => Post::featured()->paginate(9)
        ]);
    }

    // 📌 Show Single Blog Post
    public function detail($slug)
    {
        return view('blogs.detail', [
            'categories' => Category::all(),
            'post' => Post::where('slug', $slug)->firstOrFail()
        ]);
    }

    // 🏷️ Show Posts by Tag
    public function byTag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();

        return view('blogs.tag', [
            'categories' => Category::all(),
            'tag' => $tag,
            'posts' => Post::byTag($tag->id)->paginate(6)
        ]);
    }

    // 📂 Show Posts by Category
    public function categoryBlogs($name)
    {
        $category = Category::where('name', $name)->firstOrFail();

        return view('blogs.category', [
            'categories' => Category::all(),
            'category' => $category,
            'blogs' => Post::byCategory($category->id)->paginate(6)
        ]);
    }

    // 🔍 Search Posts
    // public function search(Request $request)
    // {
    //     return view('blogs.search', [
    //         'categories' => Category::all(),
    //         'query' => $request->input('query'),
    //         'posts' => Post::search($request->input('query'))->paginate(9)
    //     ]);
    // }
    // public function search(Request $request)
    // {
        // dd($request->all()); // Debugging: See if 'query' is received
    
        // $query = $request->input('query');
    
        // $posts = Post::where('title', 'like', '%' . $query . '%')
        //              ->orWhere('content', 'like', '%' . $query . '%')
        //              ->paginate(9);
    
        // return view('blogs.search', compact('posts', 'query'));
    // }
    
    public function search(Request $request)
    {
        $query = $request->input('query');
        $posts = Post::where('title', 'like', '%' . $query . '%')
                     ->orWhere('content', 'like', '%' . $query . '%')
                     ->paginate(9);

        return view('blogs.search', compact('posts', 'query'));
    }
}
