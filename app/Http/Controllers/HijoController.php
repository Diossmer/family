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
    public function create(request $request)
    {
        //
        return view('padre.hijo.create');
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
        $nuevo = Hijo::all();
        $nuevo->name = $request->user;
        $nuevo->apellido = $request->apellido;
        $nuevo->user_id = $request->user_id;
        $nuevo->save();
        return redirect("hijo");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $ver = Hijo::findOrFail($id);
        return view('padre.hijo.show', compact('ver'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $edit = Hijo::find($id);
        $padres = User::pluck('name', 'id');
        return view('padre.hijo.edit', compact('edit', 'padres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $nuevo = Hijo::find($id);
        $nuevo->name = $request->user;
        $nuevo->apellido = $request->apellido;
        $nuevo->user_id = $request->user_id;
        $nuevo->save();
        return redirect("/hijo");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hijo  $hijo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Hijo::destroy($id);
        return redirect('/hijo');
    }
}
