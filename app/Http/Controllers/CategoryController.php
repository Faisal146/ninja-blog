<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Str;



class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('dashboard.category.category' , compact('categories'));

    }
    public function create(){
        return view('dashboard.category.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
         ]);


         $manager = new ImageManager(new Driver());


         if($request->hasFile('image')){
             $newname = $request->title . auth()->user()->id . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $request->file('image')->getClientOriginalExtension();
             $image = $manager->read($request->file('image'));
             $image->toPng()->save(base_path('public/uploads/categories/'.$newname));

             if($request->slug){
                 Category::insert([
                     'title' => $request->title,
                     'slug' => Str::slug($request->slug,'-'),
                     'image' => $newname,
                     'created_at' => now(),
                 ]);
             }else{
                 Category::insert([
                     'title' => $request->title,
                     'slug' => Str::slug($request->title,'-'),
                     'image' => $newname,
                     'created_at' => now(),
                 ]);
             }

            }else{
                if($request->slug){
                    Category::insert([
                        'title' => $request->title,
                        'slug' => Str::slug($request->slug,'-'),

                        'created_at' => now(),
                    ]);
                }else{
                    Category::insert([
                        'title' => $request->title,
                        'slug' => Str::slug($request->title,'-'),

                        'created_at' => now(),
                    ]);
                }
            }

             return Redirect::route('category.index')->with('success_cat',"$request->title  Added Successfull");




    }


    public function destroy($id)
    {
        $category =  Category::where('id',$id)->first();
        Category::where('id' , $id)->delete();

        $name = $category['title'];




           return back()->with('success_cat',"$name  Deleted Successfully");

    }
    public function status(Request $req)
    {


        Category::where('id' , $req->id)->update([
           'status' => $req->to,
        ]);

        return response()->json([
            'success' => $req->to,
         ]);
    }
    public function edit($id){

        $category = Category::where('id', $id)->first();
        return view('dashboard.category.edit' , compact('category'));
    }
    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required',
         ]);


         $manager = new ImageManager(new Driver());


         if($request->hasFile('image')){
             $newname = $request->title . auth()->user()->id . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $request->file('image')->getClientOriginalExtension();
             $image = $manager->read($request->file('image'));
             $image->toPng()->save(base_path('public/uploads/categories/'.$newname));

             if($request->slug){
                 Category::where('id' , $id)->update([
                     'title' => $request->title,
                     'slug' => Str::slug($request->slug,'-'),
                     'image' => $newname,
                     'updated_at' => now(),
                 ]);
             }else{
                 Category::where('id' , $id)->update([
                     'title' => $request->title,
                     'slug' => Str::slug($request->title,'-'),
                     'image' => $newname,
                     'updated_at' => now(),
                 ]);
             }

            }else{
                if($request->slug){
                    Category::where('id' , $id)->update([
                        'title' => $request->title,
                        'slug' => Str::slug($request->slug,'-'),

                        'updated_at' => now(),
                    ]);
                }else{
                    Category::where('id' , $id)->update([
                        'title' => $request->title,
                        'slug' => Str::slug($request->title,'-'),

                        'updated_at' => now(),
                    ]);
                }
            }

             return Redirect::route('category.index')->with('success_cat',"$request->title  Updated Successfully !!");



    }
}
