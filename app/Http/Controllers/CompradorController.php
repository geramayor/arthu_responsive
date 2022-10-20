<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Comprador;
use Illuminate\Support\Facades\DB;

class CompradorController extends Controller
{
    public function index(Request $request)
    {
        $compradores=DB::table('users')
        ->select(
            'name', 'email','password','curp','codigopostal','estado','municipio','colonia',
        'telefono','whatsapp','foto','tipo_usuario')
        ->orderBy('name','asc')
        ->paginate(4);

        return view('comprador.index',compact('compradores'));
    }

    public function show(){
        return view('homecomprador');
    }

    public function create()
    {
        return view('comprador.create');
    }

    public function compras()
    {
        return view('comprador.compras');
    }

    public function store(Request $request)
    {
        if($request->ajax()){
            $comprador=new Comprador;
            $comprador->name=$request->input('nombre');
            $comprador->email=$request->input('correo');
            $comprador->password=$request->input('password');
            $comprador->curp=$request->input('codigop');
            $comprador->codigopostal=$request->input('estado');
            $comprador->estado=$request->input('municipio');
            $comprador->municipio=$request->input('colonia');
            $comprador->colonia=$request->input('telefono');
            $comprador->telefono=$request->input('foto');
            $comprador->whatsapp=$request->input('foto');
            $comprador->foto=$request->input('foto');
            $comprador->tipo_usuario='comprador';
    
            $correo_consulta=$comprador->email;
            $email=DB::table('users')->where('email',$correo_consulta)->value('email');    
            $pass=new Comprador;
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
                $comprador->save();
                return response()->json(['mensaje'=>'mensaje','Se ha registrado exitosamente']);
            }
        }
    }

    public function edit($id)
    {
        $comprador=Comprador::findOrFail($id);
        return view('comprador.edit',compact('comprador'));
    }

    public function update(Request $request, $id)
    {
        $comprador=Comprador::findOrFail($id);
        $comprador->name=$request->input('nombre');
        $comprador->email=$request->input('correo');
        $comprador->password=$request->input('password');
        $comprador->curp=$request->input('curp');
        $comprador->codigopostal=$request->input('codigo');
        $comprador->estado=$request->input('estado');
        $comprador->municipio=$request->input('municipio');
        $comprador->colonia=$request->input('colonia');
        $comprador->telefono=$request->input('telefono');
        $comprador->whatsapp=$request->input('whatsapp');
        $comprador->foto=$request->input('foto');
        $comprador->tipo_usuario='comprador';
        $comprador->save();
        return redirect('comprador')->with('mensaje','Empleado editado');
    }

    public function destroy($id)
    {
        $comprador=Comprador::findOrFail($id);
        $comprador->delete();
        return redirect('comprador')->with('mensaje','Empleado eliminado');
    }
}
