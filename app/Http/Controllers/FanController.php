<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //new
use App\Fan;

class FanController extends Controller
{
    /**
     * Display a listing of the fan settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $fan =
            Fan::where('address_id', Auth::user()->address_id )
            ->get();
        $fan = json_decode(json_encode($fan),true);
        $fan = $fan[0];

        return view('fan', compact('fan'));
    }

    /**
     * Change the fan on mode
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function mode(Request $request)
    {
        //print_r($request->all());

        $update = [
            'mode' => $request->input('mode'),
        ];

        DB::table('fans')
        ->where('address_id', Auth::user()->address_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('set-mode','Configuración exitosa');
    }

    /**
     * Power on/off the fan
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function power(Request $request)
    {
        //print_r($request->all());

        $update = [
            'status' => $request->input('status'),
        ];

        DB::table('fans')
        ->where('address_id', Auth::user()->address_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('power','Configuración exitosa');
    }

    /**
     * Change the fan on temperature
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function temperature(Request $request)
    {
        //print_r($request->all());

        $update = [
            'temperature' => $request->input('temperature'),
        ];

        DB::table('fans')
        ->where('address_id', Auth::user()->address_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('temperature','Configuración exitosa');
    }

}
