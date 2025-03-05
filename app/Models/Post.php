<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    //
    use HasFactory;

    protected $fillable = ['title', 'short_description', 'description', 'category_id', 'status', 'slug'];


    protected static function boot()
    {
        parent::boot();

        // Automatically generate the slug on creation and update
        static::saving(function ($post) {
            // Ensure the slug is unique
            $slug = Str::slug($post->title);
            $count = Post::where('slug', 'like', $slug.'%')->count();
            
            // Append a number if slug already exists
            if ($count > 0) {
                $post->slug = $slug . '-' . ($count + 1);
            } else {
                $post->slug = $slug;
            }
        });
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, 'post_tags', 'post_id', 'tag_id');
    }


    //new code 27
        // Scope: Get Published Posts
        public function scopePublished($query)
        {
            return $query->where('status', 'published');
        }
    
        // Scope: Get Featured Posts
        public function scopeFeatured($query)
        {
            return $query->whereHas('category', function ($q) {
                $q->where('featured', 'Yes');
            });
        }
    
        // Scope: Get Posts by Category
        public function scopeByCategory($query, $categoryId)
        {
            return $query->where('category_id', $categoryId);
        }
    
        // Scope: Get Posts by Tag
        public function scopeByTag($query, $tagId)
        {
            return $query->whereHas('tags', function ($q) use ($tagId) {
                $q->where('tags.id', $tagId);
            });
        }
    
        // Scope: Search Posts

        // public function scopeSearch($query, $keyword)
        // {
            
        //     return $query->where('title', 'like', "%{$keyword}%")
        //                  ->orWhere('short_description', 'like', "%{$keyword}%")
        //                  ->orWhere('content', 'like', "%{$keyword}%");
        // }
}


