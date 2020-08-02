<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{

    public function uploadAvatar(Request $request) {
      if($request->hasFile("image")) {
        User::uploadAvatar($request->image);
        return redirect()->back()->with("message", "Image Uploaded.");
      }
      return redirect()->back()->with("error", "Image not Uploaded.");
    }


    public function index()
    {
      $data = [
        "name" => "takuya",
        "email" => "foo@bar.com",
        "password" => "password"
      ];
      // User::create($data);
      // $user = new User();
      // $user->name = "higuchi";
      // $user->email = "higu@chi.com";
      // $user->password = bcrypt("foobar");
      // $user->save();

      $user = User::all();

      // return $user;

      // User::where("id", 3)->update(["name" => "takuyaaaaaaaaa"]);

      // User::where("id", 5)->delete();

      // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ["takuya", "foobar@foo.com", "foobar"]);
      // $users = DB::select('select * from users');
      return $user;

      return view("home");
    }
}
