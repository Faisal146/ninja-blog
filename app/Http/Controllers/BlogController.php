<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
//use App\Models\Category;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Drivers\Gd\Driver;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $blogs =  Blog::all();
       return view('dashboard.blog.index' , compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {  $categories = Category::all();
        return view('dashboard.blog.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'long' => 'required',
            'category' => 'required',

         ]);


         $manager = new ImageManager(new Driver());


         if($request->hasFile('image')){
             $newname = $request->title . auth()->user()->id . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $request->file('image')->getClientOriginalExtension();
             $image = $manager->read($request->file('image'));
             $image->toPng()->save(base_path('public/uploads/blogs/'.$newname));

             if($request->slug){
                 Blog::insert([
                    'user_id' => auth()->id(),
                    'category_id' => $request->category,
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug,'-'),
                    'image' => $newname,
                    'short_description' =>$request->short,
                    'description' =>$request->long,
                    'created_at' => now(),
                 ]);
             }else{
                 Blog::insert([
                    'user_id' =>  auth()->id(),
                    'category_id' => $request->category,

                     'title' => $request->title,
                     'slug' => Str::slug($request->title,'-'),
                     'image' => $newname,
                     'short_description' =>$request->short,
                     'description' =>$request->long,
                     'created_at' => now(),
                 ]);
             }

            }else{
                if($request->slug){
                    Blog::insert([
                        'user_id' => auth()->id(),
                        'category_id' => $request->category,

                        'title' => $request->title,
                        'slug' => Str::slug($request->slug,'-'),
                        'short_description' =>$request->short,
                     'description' =>$request->long,

                        'created_at' => now(),
                    ]);
                }else{
                    Blog::insert([
                        'user_id' =>  auth()->id(),
                        'category_id' => $request->category,

                        'title' => $request->title,
                        'slug' => Str::slug($request->title,'-'),
                        'short_description' =>$request->short,
                     'description' =>$request->long,

                        'created_at' => now(),
                    ]);
                }
            }

             return Redirect::route('blog.index')->with('success',"$request->title Added Successfully");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::where('id', $id)->first();
        $categories = Category::all();
        return view('dashboard.blog.edit' , compact('blog', 'categories'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title' => 'required',
            'short' => 'required',
            'long' => 'required',
            'category' => 'required',

         ]);


         $manager = new ImageManager(new Driver());


         if($request->hasFile('image')){
             $newname = $request->title . auth()->user()->id . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $request->file('image')->getClientOriginalExtension();
             $image = $manager->read($request->file('image'));
             $image->toPng()->save(base_path('public/uploads/blogs/'.$newname));

             if($request->slug){
                 Blog::where('id', $id)->update([
                    'user_id' => auth()->id(),
                    'category_id' => $request->category,
                    'title' => $request->title,
                    'slug' => Str::slug($request->slug,'-'),
                    'image' => $newname,
                    'short_description' =>$request->short,
                    'description' =>$request->long,
                    'created_at' => now(),
                 ]);
             }else{
                 Blog::where('id', $id)->update([
                    'user_id' =>  auth()->id(),
                    'category_id' => $request->category,

                     'title' => $request->title,
                     'slug' => Str::slug($request->title,'-'),
                     'image' => $newname,
                     'short_description' =>$request->short,
                     'description' =>$request->long,
                     'created_at' => now(),
                 ]);
             }

            }else{
                if($request->slug){
                    Blog::where('id', $id)->update([
                        'user_id' => auth()->id(),
                        'category_id' => $request->category,

                        'title' => $request->title,
                        'slug' => Str::slug($request->slug,'-'),
                        'short_description' =>$request->short,
                     'description' =>$request->long,

                        'created_at' => now(),
                    ]);
                }else{
                    Blog::where('id', $id)->update([
                        'user_id' =>  auth()->id(),
                        'category_id' => $request->category,

                        'title' => $request->title,
                        'slug' => Str::slug($request->title,'-'),
                        'short_description' =>$request->short,
                     'description' =>$request->long,

                        'created_at' => now(),
                    ]);
                }
            }

             return Redirect::route('blog.index')->with('success',"$request->title Updated Successfully");



    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::where('id' , $id)->delete();
        return Redirect::route('blog.index')->with('success',"Deleted Successfully");

    }
    public function status(Request $req)
    {


        Blog::where('id' , $req->id)->update([
           'status' => $req->to,
        ]);

        return response()->json([
            'success' => $req->to,
         ]);
    }
}
