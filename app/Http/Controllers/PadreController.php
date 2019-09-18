<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Padre;
use App\User;
use App\Madre;

class PadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hijos = Padre::find(1)->user;
        return view('admin.padres.home', compact('hijos'));
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
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function show(Padre $padre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function edit(Padre $padre)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Padre $padre)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function destroy(Padre $padre)
    {
        //
    }
}
