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
        $schedule = json_decode(json_encode($schedule),true);

        return view('security', compact('schedule'));
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
        return back()->with('deleteOne','Eliminación exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
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
