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
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $categories = Category::all();
       return view('dashboard.category.category' , compact('categories'));
    }

        /**
         * Show the form for creating a new resource.
         */
    public function create()
    {
       return   view('dashboard.category.create');
    }
    public function destroy($id)
    {
       return  $id;
    }

    /**
     * Store a newly created resource in storage.
     */


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


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */

    public function delete($id){
        return "i am from delete";

    }
    public function edit(string $id)
    {
        return 'hello form edit';
    }
    public function destroy($id)
    {
        // $category = Category::where('id',$id)->first();

        // if($category->image){
        //     $oldpath = base_path('public/uploads/categories/'.$category->image);
        //     if(file_exists($oldpath)){
        //         unlink($oldpath);
        //     }
        // }

       // Category::find($id)->delete();
        return 'hello form distory';


    }
}
