<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Image;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\UrlGenerator;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return response()->json($posts);
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


      $last_id = Post::insertGetId([
        'title'       => $request->title,
        'synopsis'    => $request->synopsis,
        'photo'       => $request->photo,
        'size'        => '100',
        'resulation'  => '1990x780',
        'post_link'   => 'http://127.0.0.1:8000/',
        'user_id'     => Auth::user()->id,
        'slug'        => Str::slug($request->title),
        'created_at'  =>Carbon::now()
      ]);

      if ($request->hasFile('photo')) {
         $photo_upload        =  $request->photo;
         $photo_extension     =  $photo_upload -> getClientOriginalExtension();
         $photo_name          =  $last_id . "." . $photo_extension;
         $img = Image::make($photo_upload)->save(base_path('public/uploads/'.$photo_name),100);
         $size = $img->filesize();
         $height = Image::make($photo_upload)->height();
         $width = Image::make($photo_upload)->width();
         Post::find($last_id)->update([
         'photo'          => $photo_name,
         'size'           => round($size/1024),
         'resulation'     => $width .'x' . $height,
         'post_link'      => url('/post'. '/' . $last_id .'/' . Str::slug($request->title)),
        ]);
        }


      return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
      $posts = Post::paginate(50);
      return view('frontend.index',compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function details($id)
    {
      $single_post = Post::findOrFail($id);
      $related_posts = Post::paginate(18);
      $post_comments = Comment::where('post_id',$id)->get();
      return view('frontend.details',compact('single_post','post_comments','related_posts'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
