<?php

namespace App\Http\Controllers;

use App\Madre;
use Illuminate\Http\Request;

class MadreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $madres=Madre::all();
        return view('madre.home',compact('madres'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('madre.create');
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
        $madres = new Madre();
        $madres->name = $request->name;
        $madres->lastname = $request->lastname;
        $madres->age = $request->age;
        $madres->color = $request->color;
        $madres->save();
        return redirect('madre');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Madre  $madre
     * @return \Illuminate\Http\Response
     */
    public function show($madre)
    {
        //
        $madres=Madre::find($madre);
        return view('madre.show', compact('madres'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Madre  $madre
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $madre = Madre::find($id);
        return view('madre.edit', compact('madre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Madre  $madre
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $madre)
    {
        //
        $madre = Madre::findOrFail($madre);
        $madre->name = $request->name;
        $madre->lastname = $request->lastname;
        $madre->age = $request->age;
        $madre->color = $request->color;
        $madre->save();
        return redirect('madre');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Madre  $madre
     * @return \Illuminate\Http\Response
     */
    public function destroy($madre)
    {
        //
        $madre = Madre::find($madre);
        $madre->delete();
        return redirect('madre');
    }
}
