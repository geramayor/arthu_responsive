<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catalogo;
use Illuminate\Support\Facades\DB;

class CatalogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request  $request)
    {
        //$texto=trim($request->get('texto'));//trim elimina espacios en balnco al inicio y fina de lo que se busca
        $texto = trim($request->get('texto')); //trim elimina espacios en balnco al inicio y fina de lo que se busca
        $productos = DB::table('tblproductos')
            ->select('intId', 'vchNombre', 'fltPrecio', 'intExistencia', 'txtDescripcion', 'vchFoto1')
            ->where('vchNombre', 'LIKE', '%' . $texto . '%')
            ->orderBy('vchNombre', 'asc')
            ->paginate(3);
        return view('principal.principal', compact('productos', 'texto'));
    }

    public function show($id)
    {
        $productos = DB::table('tblproductos')
            ->join('tblcategorias', 'tblcategorias.intCat', '=', 'tblproductos.intCategoria')
            ->join('tblproveedores', 'tblproveedores.intProv', '=', 'tblproductos.intProveedor')
            ->select('intId', 'vchNombre', 'fltPrecio', 'intExistencia', 'txtDescripcion', 'vchFoto1', 'vchCategoria', 'vchProveedor', 'vchTelefono', 'vchWhatsApp')
            ->where('intId', '=', $id)
            ->first();
        return view('catalogo.detalles', compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function edit(Catalogo $catalogo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Catalogo $catalogo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catalogo  $catalogo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Catalogo $catalogo)
    {
        //
    }
}
