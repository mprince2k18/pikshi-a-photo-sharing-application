<?php

namespace App\Http\Controllers;

use App\Post;
use App\Downloaded;
use App\Notification;
use Carbon\Carbon;
use Auth;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;

class DownloadedController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function download($id)
    {
      $get_file = Post::findOrFail($id);
      $file=public_path() . '/uploads/' . $get_file->photo;
      return response()->download($file);
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
        Downloaded::create([
         'post_id' =>$id,
         'user_id' =>Auth::user()->id,
         'ip_address' => $_SERVER['REMOTE_ADDR'],
         'created_at'  =>Carbon::now()
       ]);

        Notification::create([
         'post_id' =>$id,
         'user_id' =>Auth::user()->id,
         'action' => 'Downloaded',
         'is_read' => false,
         'url' => url()->previous(),
         'created_at'  =>Carbon::now()
       ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Downloaded  $downloaded
     * @return \Illuminate\Http\Response
     */
    public function show(Downloaded $downloaded)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Downloaded  $downloaded
     * @return \Illuminate\Http\Response
     */
    public function edit(Downloaded $downloaded)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Downloaded  $downloaded
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Downloaded $downloaded)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Downloaded  $downloaded
     * @return \Illuminate\Http\Response
     */
    public function destroy(Downloaded $downloaded)
    {
        //
    }
}
