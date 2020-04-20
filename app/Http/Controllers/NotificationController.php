<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; //new
use Illuminate\Http\Request;
use App\Notification;

class NotificationController extends Controller
{
    /**
     * Display a listing of the light settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $notifications =
            Notification::where('address_id', Auth::user()->address_id)->orderBy('created_at','DESC')
            ->get();
        $notifications = json_decode(json_encode($notifications),true);

        return view('notification', compact('notifications'));
    }

    /**
     * Change the viewed status.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function viewed($_id)
    {
        $update = [
            'viewed' => 1,
        ];

        DB::table('notifications')
        ->where('_id', $_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('viewed','Configuración exitosa');
    }
}
