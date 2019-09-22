<?php

namespace App\Http\Controllers;

use App\Padre;
use App\Madre;
use App\Hijo;

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
        // $families=Hijo::with('padre')->get();
        // $valor = Padre::pluck($padre, 'lastName', 'firstName');
        // $families=Hijo::get()->collect(['name','lastname','age','color']);
        // $madre=Madre::with('padre')->pluck($families,'name','lastname');
        
        $families = Hijo::all();
        return view('hijo.home',compact('families'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $padre = Padre::pluck('name','id')->all();
        $madre= Madre::pluck('name','id')->all();
        return view('hijo.create',compact('padre','madre'));
    
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
        $hijo=new Hijo;
        $hijo->name = $request->name;
        $hijo->lastname = $request->lastname;
        $hijo->padres_id = $request->padres_id;
        $hijo->madres_id = $request->madres_id;
        $hijo->save();
        return redirect('hijo');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function show($hijo)
    {
        //
        $hijo = Hijo::findOrFail($hijo);
        return view('hijo.show',compact('hijo'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function edit($hijo)
    {
        //
        $hijo = Hijo::find($hijo);
        $padre = Padre::pluck('name','id');
        $madre = Madre::pluck('name','id');
        return view('hijo.edit',compact('hijo','padre','madre'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $hijo)
    {
        //
        $hijo = Hijo::findOrFail($hijo);
        $hijo->name = $request->name;
        $hijo->lastname = $request->lastname;
        $hijo->padres_id = $request->padres_id;
        $hijo->madres_id = $request->madres_id;
        $hijo->save();
        return redirect('hijo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function destroy($hijo)
    {
        //
        Hijo::destroy($hijo);
        return redirect('hijo');
    }
}
