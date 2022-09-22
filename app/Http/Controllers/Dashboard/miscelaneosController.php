<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\Store2PostPost;
use App\Models\miscelaneos;
use Illuminate\Http\Request; 

class miscelaneosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //asc es de forma ascendente
        $miscelaneos=miscelaneos::orderBy('created_at', 'desc')->cursorpaginate(5);
        echo view ('dashboard.post.index3', ['miscelaneos'=>$miscelaneos]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo view ('dashboard.post.create3', ["miscelaneo"=> new miscelaneos()]);
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Store2PostPost $request)
    {
        echo "El titulo trae: ".$request->Nombre;
        miscelaneos::create($request->validated());
        return back()->with('status','Post creado con exito');
        //return redirect('post.create')->with('status','Post created');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\miscelaneos  $post
     * @return \Illuminate\Http\Response
     */
    public function show(miscelaneos $miscelaneo)
    {
        echo view('dashboard.post.show3', ['miscelaneo'=>$miscelaneo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\miscelaneos  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(miscelaneos $miscelaneo)
    {
        echo view ('dashboard.post.edit3', ["miscelaneo"=>$miscelaneo]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\miscelaneos  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Store2PostPost $request, miscelaneos $miscelaneos)
    {
        $miscelaneos->update($request->validated());
        return back()->with('status', 'Muchas gracias tu post fue realizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\miscelaneos  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(miscelaneos $miscelaneo)
    {
        $miscelaneo->delete();
        return back()->with('status', 'Post fue eliminado');
    }
}
