<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //new
use App\Fan;

class FanController extends Controller
{
    public function index()
    {

        $fan =
            Fan::where('address_id', Auth::user()->address_id )
            ->get();
        $fan = json_decode(json_encode($fan),true);
        $fan = $fan[0];

        return view('fan', compact('fan'));
    }

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
