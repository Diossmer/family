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
        $families=Padre::all();
        return view('padre.home',compact('families'));
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
        $families = new Padre();
        $families->name = $request->name;
        $families->lastname = $request->lastname;
        $families->age = $request->age;
        $families->color = $request->color;
        $families->save();
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
        $families=Padre::find($padre);
        return view('padre.show', compact('families'));
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
        $family = Padre::find($id);
        return view('padre.edit', compact('family'));
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
        $family = Padre::findOrFail($padre);
        $family->name = $request->name;
        $family->lastname = $request->lastname;
        $family->age = $request->age;
        $family->color = $request->color;
        $family->save();
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
