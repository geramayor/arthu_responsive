<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Modopago;
use Illuminate\Support\Facades\DB;

class ModopagoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //se almacena en $texto lo que hay en el input con name=texto
        $texto=trim($request->get('texto'));//trim elimina espacios en balnco al inicio y fina de lo que se busca
        $modopago=DB::table('tbltarjetadebito')
        ->select(
            'Id','vchNombre','numTarjeta','Fecha','ccv')
        ->where('vchNombre','LIKE','%'.$texto.'%')
        ->orWhere('numTarjeta','LIKE','%'.$texto.'%')
        ->orWhere('Fecha','LIKE','%'.$texto.'%')
        ->orWhere('ccv','LIKE','%'.$texto.'%')
        ->orderBy('vchNombre','asc')
        ->paginate(4);

        return view('comprador.metodopago',compact('modopago','texto'));//retorna vista index + lista de todos los clientes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('comprador.metodopago');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//guardar rgistro
    {
        $modopago=new Modopago;
        $modopago->vchNombre=$request->input('nombre');
        $modopago->numTarjeta=$request->input('numTarjeta');
        $modopago->Fecha=$request->input('Fecha');
        $modopago->ccv=$request->input('ccv');
        

        $numTarjeta_consulta=$modopago->numTarjeta;//corrreo que se envia desde el formulario
        $numTarjeta=DB::table('tbltarjetadebito')->where('numTarjeta',$numTarjeta_consulta)->value('numTarjeta');//correo de la base de datos

        $tarj=new Modopago;


        if($numTarjeta_consulta==$tarj){
            return redirect('comprador/metodopago')->with('mensaje','El correo ya esta asociado a una cuenta');
        }
        else{
            $modopago->save();
            //return redirect()->route('comprador.index');
            return redirect('comprador/metodopago')->with('mensaje','Se ha registrado exitosamente');
        }
        //$comprador->save();
        //return redirect()->route('comprador.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modopago=Modopago::findOrFail($id);
        //return $comprador;json
        return view('comprador.editpago',compact('modopago'));
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
        $modopago=Modopago::findOrFail($id);
        $modopago->vchNombre=$request->input('nombre');
        $modopago->numTarjeta=$request->input('numTarjeta');
        $modopago->Fecha=$request->input('Fecha');
        $modopago->ccv=$request->input('ccv');
        $modopago->save();
        //return redirect()->route('comprador.index');
        return redirect('comprador')->with('mensaje',' Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $modopago=Modopago::findOrFail($id);
        $modopago->delete();
        //return redirect()->route('comprador.index');
        return redirect('comprador')->with('mensaje',' Eliminado');
    }
}
