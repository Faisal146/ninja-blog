<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;


class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('dashboard.user_manage.index', compact('users'));
    }
    public function create() {
        return view('dashboard.user_manage.create');
    }
    public function create_new(Request $req) {

       $req->validate([
            'name' => 'required',
            'email' => 'email || required',
            'password' => 'required',
            'role' => 'required',
        ]);

        $manager = new ImageManager(new Driver());


        if($req->hasFile('image')){
            $newname = $req->email . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $req->file('image')->getClientOriginalExtension();
            $image = $manager->read($req->file('image'));
            $image->toPng()->save(base_path('public/uploads/profiles/'.$newname));

            User::create([
                'name' => $req->name,
                'email' => $req->email,
                'password' => Hash::make($req->password),
                'role' => $req->role,
                'image' => $newname
            ]);


        }else {
             User::create([
            'name' => $req->name,
            'email' => $req->email,
            'password' => Hash::make($req->password),
            'role' => $req->role,
        ]);
        }






      //  return back()->with('success_insert','User Register Successfull');

        return Redirect::route('user_manage')->with('success_user',"$req->name  Register Successfull");


     //   return $req;
    }

    public function delete_user($id){

     $user =  User::where('id',$id)->first();
     User::where('id' , $id)->delete();

     $user_name = $user['name'];




        return back()->with('success_user',"$user_name  Deleted Successfull");
    }
    public function block_user($id){

     $user =  User::where('id',$id)->first();

     $user_status = $user['block'];

     if($user_status == true) {
        User::where('id' , $id)->update([
            'block' => false,

            'updated_at' => now(),
        ]);
    } else {
             User::where('id' , $id)->update([
        'block' => true,

        'updated_at' => now(),
    ]);
        }





     $user_name = $user['name'];




        return back()->with('success_user',"$user_name  Blocked Successfull");
    }

    public function roleAssign_user(Request $req){

        User::where('id' , $req->id)->update([
            'role' => $req->role,
            'updated_at' => now(),
        ]);


     //   session()->flash('success_user', "role updated");

        return response()->json([
            'success' => true,
            'redirect' => route('user_manage')
        ]);

    }

    public function edit_page($id){

        $user =  User::where('id',$id)->first();

        return view('dashboard.user_manage.edit' , compact('user'));
    }
    public function edit_user(Request $req, $id){

        $req->validate([
            'name' => 'required',
            'email' => 'email || required',
           // 'password' => 'required',
            'role' => 'required',
        ]);

        $manager = new ImageManager(new Driver());


        if($req->hasFile('image')){
            $newname = $req->email . '-' . now()->format("M d ,Y") .'-'. rand(0,9999) . '.' . $req->file('image')->getClientOriginalExtension();
            $image = $manager->read($req->file('image'));
            $image->toPng()->save(base_path('public/uploads/profiles/'.$newname));

            User::where('id' , $req->id)->update([
                'name' => $req->name,
                'email' => $req->email,
              //  'password' => Hash::make($req->password),
                'role' => $req->role,
                'image' => $newname

            ]);


        }else {
            User::where('id' , $req->id)->update([
            'name' => $req->name,
            'email' => $req->email,
           // 'password' => Hash::make($req->password),
            'role' => $req->role,
        ]);
        }




        return Redirect::route('user_manage')->with('success_user',"$req->name  Updated Successfull");

    }


}
