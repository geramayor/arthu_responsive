<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RecuperarController extends Controller {
    public function index(Request $request) {

        $respuesta=$request->input('respuesta');
        $correo=$request->input('correo');
        $result=DB::table('users')->where('respuesta',$respuesta)->where('email',$correo)->value('respuesta');//correo de la base de datos

        $random = (Str::random(10));

        if($result){
            return view('login1.password',compact('correo','random'));
        }
        else{
            return view('login1.respuesta',compact('correo'));
        }
    }
    public function store(Request $request)
    {
        $correo=$request->input('correo');

        $password=DB::table('users')->where('email',$correo)->value('password');//correo de la base de datos
        $pregunta=DB::table('users')->where('email',$correo)->value('pregunta');

        if($password){
            return view('login1.pregunta',compact('pregunta','correo'));
        }
        else{
            return view('login1.error',compact('correo'));
        }
    }
    public function reset(Request $request)
    {
        $correo=$request->input('correo');
        $pass=$request->input('newpass');
        $id=DB::table('users')->where('email',$correo)->value('id');

        $pass=User::findOrFail($id);
        $pass->password=hash::make($request->input('newpass'));
        $pass->save();
        return view('login1.mensaje',compact('correo'));
    }


}

