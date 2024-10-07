<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function category($slug){
        $category = Category::where('slug', $slug)->first();
        $blogs = Blog::where('category_id',$category->id)->latest()->get();
        return view('web.blogs', compact('category' , 'blogs'));
    }
    public function single($slug){
       // $category = Category::where('slug', $slug)->first();
        $blog = Blog::where('slug',$slug)->first();
        return view('web.blogSingle', compact('blog'));
    }
}
