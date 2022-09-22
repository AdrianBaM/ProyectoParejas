<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreFarmacosPost;
use Illuminate\Http\Request;
use App\Models\farmacos;

class farmacosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $farmacos=farmacos::orderBy('created_at', 'desc')->cursorpaginate(5);
        echo view ('dashboard.post.index2', ['farmacos'=>$farmacos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create2', ["farmaco"=> new farmacos()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFarmacosPost $request)
    {
        echo "El titulo trae: ".$request->Nombre;
        farmacos::create($request->validated());
        return back()->with('status','Post creado con exito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\farmacos
     * @return \Illuminate\Http\Response
     */
    public function show(farmacos $farmaco)
    {
        echo view ('dashboard.post.show2', ["farmacos"=>$farmaco]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\farmacos
     * @return \Illuminate\Http\Response
     */
    public function edit(farmacos $farmaco)
    {
        echo view ('dashboard.far.edit2', ["farmaco"=>$farmaco]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\farmacos
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFarmacosPost $request, farmacos $farmaco)
    {
        $farmaco->update($request->validated());
        return back()->with('status', 'Muchas gracias tu post fue realizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\farmacos
     * @return \Illuminate\Http\Response
     */
    public function destroy(farmacos $farmaco)
    {
        $farmaco->delete();
        return back()->with('status', 'Post fue eliminado');
    }
}
