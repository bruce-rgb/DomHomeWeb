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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $schedule =
            Schedule::where('address_id', Auth::user()->address_id )
            ->where('name', 'absence_schedule')
            ->get();
        $data = json_decode(json_encode($schedule), true);

        $data = $data[0];

        $schedule_id = $data['_id'];

        $schedule = $data['schedule_settings'];
        $days = array_keys($schedule);

        return view('security', compact('schedule','days','schedule_id'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $notaUpdate = Nota::find($id);
        $notaUpdate->nombre = $request->nombre;
        $notaUpdate->descripcion = $request->descripcion;
        $notaUpdate->save();
        return back()->with('update','La nota se ha actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteOne($day)
    {
        $schedule =
            Schedule::where('address_id', Auth::user()->address_id )
            ->where('name', 'absence_schedule')
            ->get();
        $data = json_decode(json_encode($schedule), true);
        $data = $data[0];
        $schedule_id = $data['_id'];

        // DB::table('schedules')
        //     ->updateOrInsert(
        //     ['_id' => $schedule_id ],
        //     [
        //         'schedule_settings'=>[
        //             $day => [
        //                 'start_time' => '',
        //                 'end_time' => '',
        //             ]
        //         ]
        //     ]
        // );

        DB::table('schedules')
            ->where('_id', $schedule_id)
            ->update(['schedule_settings'=>
                [
                    $day => [
                        'start_time' => '',
                        'end_time' => '',
                    ]
                ]
            ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deleteAll($id)
    {
        //
    }
}
