<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Proveedor;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class ProveedorController extends Controller
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
        $proveedores=DB::table('tblproveedores')
        ->select(
            'intProv','vchProveedor','vchCorreo','vchrfcProveedor','vchCodigop','vchEstado','vchMunicipio','vchColonia',
            'vchTelefono','vchWhatsApp','vchFoto','intRol')
        ->where('vchProveedor','LIKE','%'.$texto.'%')
        ->orWhere('vchCorreo','LIKE','%'.$texto.'%')
        ->orWhere('vchCodigop','LIKE','%'.$texto.'%')
        ->orWhere('vchEstado','LIKE','%'.$texto.'%')
        ->orWhere('vchMunicipio','LIKE','%'.$texto.'%')
        ->orWhere('vchColonia','LIKE','%'.$texto.'%')
        ->orWhere('vchTelefono','LIKE','%'.$texto.'%')
        ->orderBy('vchProveedor','asc')
        ->paginate(4);
        return "Hola";
        //return view('proveedor.index',compact('proveedores','texto'));//retorna vista index + lista de todos los clientes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)//guardar rgistro
    {
        if($request->ajax()){
            $proveedor=new Proveedor;
            $proveedor->vchProveedor=$request->input('nombre');
            $proveedor->vchCorreo=$request->input('correo');
            $proveedor->vchPassword=$request->input('password');
            $proveedor->vchrfcProveedor=$request->input('rfc');
            $proveedor->vchCodigop=$request->input('codigop');
            $proveedor->vchEstado=$request->input('estado');
            $proveedor->vchMunicipio=$request->input('municipio');
            $proveedor->vchColonia=$request->input('colonia');
            $proveedor->vchTelefono=$request->input('telefono');
            $proveedor->vchWhatsApp=$request->input('whatsapp');
            $proveedor->vchFoto=$request->input('foto');
            $proveedor->intRol=5;

            $correo_consulta=$proveedor->vchCorreo;//corrreo que se envia desde el formulario
            $email=DB::table('tblproveedores')->where('vchCorreo',$correo_consulta)->value('vchCorreo');//correo de la base de datos

            $pass=new Proveedor;
            $pass=$request->input('password');
            $pass2=$request->input('password2');
            $correo2=$request->input('correo2');

            if($correo_consulta!=$correo2){
                return response()->json(['mensaje'=>'mensaje','Los correos no coinciden']);
            }elseif($pass!=$pass2){
                return response()->json(['mensaje'=>'mensaje','Las contraseñas no coinciden']);
            }elseif($correo_consulta==$email){
                return response()->json(['mensaje'=>'mensaje','El correo ya esta asociado a una cuenta']);
            }
            else{
                $proveedor->save();
                //return redirect()->route('proveedor.index');
                return response()->json(['mensaje'=>'mensaje','Se ha registrado exitosamente']);
            }
        }
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
        $proveedor=User::findOrFail($id);
       // return $proveedor;
        return view('proveedor.edit',compact('proveedor'));
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
        $proveedor=User::findOrFail($id);
        $proveedor->name=$request->input('nombre');
        $proveedor->email=$request->input('correo');
        //$proveedor->password=$request->input('password');
        $proveedor->curp=$request->input('curp');
        $proveedor->codigopostal=$request->input('codigop');
        $proveedor->estado=$request->input('estado');
        $proveedor->municipio=$request->input('municipio');
        $proveedor->colonia=$request->input('colonia');
        $proveedor->telefono=$request->input('telefono');
        $proveedor->whatsapp=$request->input('what');
        
        if($request->hasFile("foto")){
            $imagen = $request->file("foto");
            $nombre = $proveedor->curp.".".$imagen->getClientOriginalExtension();
            $destino = "../laravel/storage/app/public/perfiles/";
            $request->foto->move($destino, $nombre);
            $proveedor->foto=$nombre;

        }
        $proveedor->save();

        //return redirect()->route('proveedor.index');
        return  back()->with('mensaje','Datos editados correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $proveedor=Proveedor::findOrFail($id);
        $proveedor->delete();
        //return redirect()->route('proveedor.index');
        return redirect('proveedor')->with('mensaje','Empleado eliminado');
    }
}
