<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Image;
use Illuminate\Support\Str;

class ProfileController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $user = User::findOrFail($id);
        $user_posts = Post::where('user_id',$id)->get();
        return view('frontend.profile',compact('user','user_posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {


        $user = User::where('id',$id)->firstOrFail();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->profile_bio = $request->profile_bio;

        $user->password = bcrypt($request->password);
        $user->slug = Str::slug($request->name);

        if($file = $request->hasFile('photo')) {

            $file = $request->file('photo') ;

            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/profile' ;
            $file->move($destinationPath,$fileName);
            $user->photo = $fileName ;
          }


        if($file = $request->hasFile('cover')) {

            $file = $request->file('cover') ;

            $fileName = $file->getClientOriginalName() ;
            $destinationPath = public_path().'/uploads/cover' ;
            $file->move($destinationPath,$fileName);
            $user->cover = $fileName ;
          }


        $user->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
