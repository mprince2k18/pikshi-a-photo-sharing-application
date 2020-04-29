<?php

namespace App\Http\Controllers;

use App\Notification;
use App\User;
use Illuminate\Http\Request;

class NotificationController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index($id)
    {
      $user = User::findOrFail($id);
      $notifications = Notification::where('user_id',$id)->latest()->get();
      return view('frontend.notifications',compact('user','notifications'));
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
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function all_update($notification)
    {
        $notifications = Notification::all();
        foreach ($notifications as $notify) {
          Notification::where('user_id',$notification)->update([
            'is_read' => 1
          ]);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update($notification)
    {
        Notification::findOrFail($notification)->update([
          'is_read' => 1
        ]);

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
