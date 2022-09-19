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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $medicina = medicinas::find($id);
        return view('dashboard.post.show')->with('medicinas', $medicina);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medicina = medicinas::find($id);
        return view('dashboard.post.edit')->with('medicinas', $medicina);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        medicinas::find($id);
        echo "El titulo trae: ".$request->Nombre;
        medicinas::create($request->validated());
        return back()->with('status','Post creado con exito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicinas = medicinas::findOrFail($id);
        $medicinas->delete();
        return redirect()->route('medicinas.index');
    }
}
