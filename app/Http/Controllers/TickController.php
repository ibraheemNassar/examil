<?php

namespace App\Http\Controllers;

use App\Models\Tick;
use Illuminate\Http\Request;

class TickController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Ticks= Tick::all();
        return view('myTickets',compact('Ticks'));
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
        $task = new Tick();
        $task->Title = $request->title;
        $task->Category = $request->category;
        $task->priority = $request->priority;
        $task->Message = $request->message;

        $task->save();
        return redirect()->route('newTicket');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tick  $tick
     * @return \Illuminate\Http\Response
     */
    public function show(Tick $tick)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tick  $tick
     * @return \Illuminate\Http\Response
     */
    public function edit(Tick $tick)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tick  $tick
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tick $tick)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tick  $tick
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tick $tick)
    {
        //
    }
}
