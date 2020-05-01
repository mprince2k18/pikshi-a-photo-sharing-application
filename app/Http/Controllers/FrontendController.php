<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Illuminate\Support\Str;

class FrontendController extends Controller
{


  public function store(Request $request)
  {

      $request->validate([
        'name'  => 'required|string|max:255',
        'email'  => 'required|string|max:255|email|unique:users',
        'password'  => 'required|string|min:8|confirmed',
      ]);


      $user = new User;
      $user->name = $request->name;
      $user->email = $request->email;
      $user->password = bcrypt($request->password);
      $user->role = 'Guest';
      $user->profile_bio = '';
      $user->photo = 'profile.png';
      $user->cover = 'cover.png';
      $user->slug = Str::slug($request->name);
      $user->save();

      return redirect()->route('login');
  }


    //END
}
