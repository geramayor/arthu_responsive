<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Login;
use DataTables;

class LoginController extends Controller
{
    public function index(Request $request)
    {

        return view('login.login');
    }

    public function store(Request $request)
    {
        //Comprador
        $email=$request->input('email');
        $password=$request->input('password');

        $emailComprador=DB::table('tblcompradores')->where('vchCorreo',$email)->value('vchCorreo');//correo de la base de datos
        $passwordComprador=DB::table('tblcompradores')->where('vchPassword',$password)->value('vchPassword');//pass de la base de datos

        //Poveedor
        $emailp=$request->input('email');
        $passwordp=$request->input('password');

        $emailProveedor=DB::table('tblproveedores')->where('vchCorreo',$emailp)->value('vchCorreo');
        $passwordProveedor=DB::table('tblproveedores')->where('vchPassword',$passwordp)->value('vchPassword');

        //administrador
        $emailadmin=$request->input('email');
        $passwordadmin=$request->input('password');

        $emailAdm=DB::table('tbladministradores')->where('vchCorreo',$emailadmin)->value('vchCorreo');
        $passwordAdm=DB::table('tbladministradores')->where('vchPassword',$passwordadmin)->value('vchPassword');


        if($emailComprador==$email && $passwordComprador==$password){
            $id=DB::table('tblcompradores')->where('vchPassword',$password)
            ->where('vchCorreo',$emailComprador)
            ->value('intId');
            $comprador = DB::table('tblcompradores')
            ->where('intId', $id)
            ->first();
            return view('comprador.bienvenida',compact('comprador'));
        }
        else if($emailProveedor==$emailp && $passwordProveedor==$passwordp){
            $id=DB::table('tblproveedores')->where('vchPassword',$passwordp)
            ->where('vchCorreo',$emailProveedor)
            ->value('intProv');
            $proveedor = DB::table('tblproveedores')
            ->where('intProv', $id)
            ->first();
            return view('proveedor.bienvenida',compact('proveedor'));
        }
        else if($emailAdm==$emailadmin && $passwordAdm==$passwordadmin){
            $id=DB::table('tbladministradores')->where('vchPassword',$passwordadmin)
            ->where('vchCorreo',$emailAdm)
            ->value('intId');
            $proveedor = DB::table('tbladministradores')
            ->where('intId', $id)
            ->whereIn('intRol',[1])
            ->first();
            return view('administrador.bienvenida',compact('proveedor'));
        }
        else{
            return redirect('login')->with('mensaje','Credenciales incorrectas');
        }

    }

}
