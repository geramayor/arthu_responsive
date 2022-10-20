<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PasswordController extends Controller
{
    public function store(Request $request)
    {
        $correo=$request->input('correo');
        $password=DB::table('tblcompradores')->where('vchCorreo',$correo)->value('vchPassword');//correo de la base de datos

        
        if($password){
            $con =$password;
            $to = "$correo";
            $subject = ">>>> Recuperacion de contrase\361a <<<<";
            $message = "Usuario: $correo su contrase\361a es: $con";
            mail($to, $subject, $message);
            return 'La clave de acceso ha sido enviada al correo proporcionado, revise su bandeja de entrada.';
            //return response()->json(['mensaje'=>'La contrase«Ða ha sido enviada al correo proporcionado, revise su bandeja de entrada.']);
        }
        else{
            return 'El correo proporcionado no existe, intente de nuevo.';
        }
        //return response()->json(['Comprador'=>$correo,'Password'=>$password]);
    }


}
?>
