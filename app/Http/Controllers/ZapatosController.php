<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Zapato;

class ZapatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Obtener todos los elementos de la bd
        $zapatos = Zapato::all();
        return view('home', compact('zapatos'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agregar-zapato');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Guardar un nuevo zapato
        Zapato::create($request->all());
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Mostrar una búsqueda
        $zapato = Zapato::findOrFail($id);
        return view('home', compact('zapato'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Mostrar una búsqueda
        $zapato = Zapato::findOrFail($id);
        return view('editar-zapato', compact('zapato'));

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
        //Modificar un elemento
        Zapato::findOrFail($id)->update($request->all());
        return redirect()->route('home');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar el elemento seleccionado
        Zapato::findOrFail($id)->delete();
        return redirect()->route('home');

    }
}
