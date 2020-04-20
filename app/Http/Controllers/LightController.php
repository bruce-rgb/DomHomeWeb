<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller; //new
use Illuminate\Support\Facades\DB; //new
use Illuminate\Http\Request;
use App\Schedule;
use App\Light;

class LightController extends Controller
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
            ->where('name', 'lighting_schedule')
            ->get();
        $schedule = json_decode(json_encode($schedule),true);

        $light =
            Light::where('address_id', Auth::user()->address_id)
            ->get();

        $lights = json_decode(json_encode($light), true);

        return view('light', compact('schedule', 'lights'));
    }

    /**
     * Set one or a group of time configurations.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function set(Request $request) //POST
    {
        //print_r($request->all());

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
     * Power on/off a light.
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

            DB::table('lights')
            ->where('_id', $request->input('_id') )
            ->update(
                ['$set' => $update]
            );
        return back()->with('power','Configuración exitosa');
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
        ->where('name', 'lighting_schedule' )
        ->where('address_id', Auth::user()->address_id)
        ->update(
            ['$set' => $update]
        );

        return back()->with('deleteOne','Eliminación exitosa');
    }
}
