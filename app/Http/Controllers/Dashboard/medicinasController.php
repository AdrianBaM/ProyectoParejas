<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePostPost;
use Illuminate\Http\Request;
use App\Models\medicinas;

class medicinasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /* $medicinas = medicinas::all();
        echo view('dashboard.post.index')->with('medicinas', $medicinas); */
        //asc es de forma ascendente
        $medicinas=medicinas::orderBy('created_at', 'desc')->cursorpaginate(5);
        echo view ('dashboard.post.index', ['medicinas'=>$medicinas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePostPost $request)
    {
        echo "El titulo trae: ".$request->Nombre;
        medicinas::create($request->validated());
        return back()->with('status','Post creado con exito');
        //return redirect('post.create')->with('status','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\medicinas  $id
     * @return \Illuminate\Http\Response
     */
    public function show(medicinas $medicina)
    {
        echo view ('dashboard.post.show', ["medicinas"=>$medicina]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\medicinas   $id
     * @return \Illuminate\Http\Response
     */
    public function edit(medicinas $medicina)
    {
        echo view ('dashboard.post.edit', ["medicinas"=>$medicina]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\medicinas   $id
     * @return \Illuminate\Http\Response
     */
    public function update(StorePostPost $request, medicinas $medicina)
    {
        $medicina->update($request->validated());
        return back()->with('status', 'Muchas gracias tu post fue realizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\medicinas   $id
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy(medicinas $medicinas)
    {
        $medicinas->delete();
        return back()->with('status', 'Post fue eliminado');
    }
}
