<?php
namespace App\Http\Controllers;
use App\Models\Buzon;
use Illuminate\Http\Request;

class BuzonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quejas=Buzon::all();
        return response()->json($quejas,200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $buzon=new Buzon;
        $buzon->vchNombre=$request->input('nombre');
        $buzon->vchOperacion=$request->input('buzonqs');
        $buzon->txtComentario=$request->input('comentario');
        $buzon->save();
        //return redirect('faq/')->with('mensaje','Se ha enviado tu respuesta a los administradores del sitio');
        return 'Se ha enviado tu respuesta a los administradores del sitio';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function show(Buzon $buzon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function edit(Buzon $buzon)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buzon $buzon)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Buzon  $buzon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buzon $buzon)
    {
        //
    }
}
?>