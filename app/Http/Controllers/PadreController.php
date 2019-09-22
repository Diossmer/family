<?php

namespace App\Http\Controllers;

use App\Padre;
use Illuminate\Http\Request;

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
        $padres=Padre::all();
        return view('padre.home',compact('padres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('padre.create');
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
        $padres = new Padre();
        $padres->name = $request->name;
        $padres->lastname = $request->lastname;
        $padres->age = $request->age;
        $padres->color = $request->color;
        $padres->save();
        return redirect('padre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function show($padre)
    {
        //
        $padres=Padre::find($padre);
        return view('padre.show', compact('padres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $padre = Padre::find($id);
        return view('padre.edit', compact('padre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $padre)
    {
        //
        $padre = Padre::findOrFail($padre);
        $padre->name = $request->name;
        $padre->lastname = $request->lastname;
        $padre->age = $request->age;
        $padre->color = $request->color;
        $padre->save();
        return redirect('padre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Padre  $padre
     * @return \Illuminate\Http\Response
     */
    public function destroy($padre)
    {
        //
        Padre::destroy($padre);
        return redirect('padre');
    }
}
