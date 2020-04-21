<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB; //new
use Illuminate\Http\Request;
use App\Schedule;

class SecurityController extends Controller
{
    /**
     * Display a listing of the light settings.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $schedule =
            Schedule::where('address_id', Auth::user()->address_id )
            ->where('name', 'absence_schedule')
            ->get();
        $schedule = json_decode(json_encode($schedule),true);

        return view('security', compact('schedule'));
    }

    /**
     * Set one or a group of time configurations.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function set(Request $request)
    {
        //print_r($request->all());

        $request->validate([
            'days' => 'required',
            'end_time' => 'required',
            'start_time' => 'required',
        ]);

        $update = [
            'start_time' => $request->input('start_time'),
            'end_time' => $request->input('end_time'),
        ];

        foreach( $request->input('days') as $day => $value) {
            DB::table('schedules')
            ->where('_id', $value )
            ->update(
                ['$set' => $update]
            );
        }

        return back()->with('set','Configuración exitosa');

    }

    /**
     * Delete a time configurations.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteOne($id)
    {
        $update = [
            'start_time' => '',
            'end_time' => '',
        ];

        DB::table('schedules')
        ->where('_id', $id)
        ->update(
            ['$set' => $update]
        );
        return back()->with('deleteAll','Eliminación exitosa');
    }

    /**
     * Delete all time configurations.
     *
     * @param  string  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAll()
    {
        $update = [
            'start_time' => '',
            'end_time' => '',
        ];

        DB::table('schedules')
        ->where('name', 'absence_schedule' )
        ->where('address_id', Auth::user()->address_id)
        ->update(
            ['$set' => $update]
        );

        return back()->with('deleteOne','Eliminación exitosa');
    }
}
