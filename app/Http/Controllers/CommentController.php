<?php

namespace App\Http\Controllers;

use App\Comment;
use App\Notification;
use App\User;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;
use App\Notifications\PostNotification;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request, $id)
    {
        Comment::create([
          'comment' => $request->comment,
          'post_id' => $id,
          'user_id' => Auth::user()->id,
          'created_at' => Carbon::now(),
        ]);

        Notification::create([
         'post_id' =>$id,
         'user_id' =>Auth::user()->id,
         'action' => 'Commented',
         'is_read' => false,
         'url' => url()->previous(),
         'created_at'  =>Carbon::now()
       ]);

       $array = [
         "greeting" => "hi",
       ];

       $user = User::first();
       $user->notify(new PostNotification($array));


       return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function show(Comment $comment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comment  $comment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comment $comment)
    {
        //
    }
}
