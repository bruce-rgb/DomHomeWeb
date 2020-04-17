<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB; //new
use App\Gas;

class GasController extends Controller
{
    public function index()
    {

        $gas =
            Gas::where('address_id', Auth::user()->address_id )
            ->get();
        $gas = json_decode(json_encode($gas),true);
        $gas = $gas[0];

        return view('gas', compact('gas'));
    }

    public function power(Request $request)
    {
        //print_r($request->all());

        $update = [
            'status' => $request->input('status'),
        ];

        DB::table('gases')
        ->where('address_id', Auth::user()->address_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('power','Configuración exitosa');
    }

    public function time(Request $request)
    {
        //print_r($request->all());

        $update = [
            'time' => $request->input('time'),
        ];

        DB::table('gases')
        ->where('address_id', Auth::user()->address_id )
        ->update(
            ['$set' => $update]
        );

        return back()->with('time','Configuración exitosa');
    }
}
