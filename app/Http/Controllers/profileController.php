<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Hash;


class profileController extends Controller
{
    public function index() {
        return view('dashboard.profile.index');
    }
    public function name_update(Request $request) {

        $request->validate([
           'name' => 'required',
           "email" => 'email || required'
        ]);

        $oldname = auth()->user()->name;



        User::find(auth()->id())->update([
            'name' => $request->name,
            'email' => $request->email,
            'updated_at' => now(),
        ]);
        return back()->with("name_update" , "name updated from $oldname to $request->name");
    }

    public function photo_update(Request $req){
        $req->validate([

            "image" => 'image || required'
         ]);

         $manager = new ImageManager(new Driver());


         if($req->hasFile('image')){
             $newname = $req->email . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $req->file('image')->getClientOriginalExtension();
             $image = $manager->read($req->file('image'));
             $image->toPng()->save(base_path('public/uploads/profiles/'.$newname));

             User::find(auth()->id())->update([

                 'image' => $newname

             ]);

             return back()->with("name_update" , "image updated successfull");
         }


    }

    public function pass_update(Request $req){

        $req->validate([
            'password' => 'required|confirmed|min:6',
            "password_confirmation" => 'required',
            "old" => 'required',
         ]);
         if(Hash::check($req->old,auth()->user()->password)){
            User::find(auth()->user()->id)->update([
                'password' => $req->password,
                'updated_at' => now(),
            ]);
            return back()->with('name_update','password update successfull');
        }else{
            return back()->withErrors(['password'=>'current password not match with our record'])->withInput();
        }
    }


}
