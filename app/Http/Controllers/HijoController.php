<?php

namespace App\Http\Controllers;

use App\Hijo;
use App\User;
use Illuminate\Http\Request;

class HijoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $hijos = Hijo::paginate(5);
        //echo $hijos->user->name;
        return view('padre.hijo.home', compact('hijos'));
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
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function show(Hijo $hijo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function edit(Hijo $hijo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hijo $hijo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hijo $hijo)
    {
        //
    }
}
