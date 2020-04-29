<?php

namespace App\Http\Controllers;

use App\Loved;
use App\Notification;
use Auth;
use Carbon\Carbon;
use Illuminate\Routing\UrlGenerator;
use Illuminate\Http\Request;

class LovedController extends Controller
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
        Loved::create([
         'post_id'      =>$id,
         'user_id'      =>Auth::user()->id,
         'created_at'   =>Carbon::now()
       ]);

        Notification::create([
         'post_id' =>$id,
         'user_id' =>Auth::user()->id,
         'action' => 'Loved',
         'is_read' => false,
         'url' => url()->previous(),
         'created_at'  =>Carbon::now()
       ]);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loved  $loved
     * @return \Illuminate\Http\Response
     */
    public function show(Loved $loved)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loved  $loved
     * @return \Illuminate\Http\Response
     */
    public function edit(Loved $loved)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Loved  $loved
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loved $loved)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loved  $loved
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loved $loved)
    {
        //
    }
}
