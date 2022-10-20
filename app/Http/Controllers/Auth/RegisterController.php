<?php
namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
class RegisterController extends Controller
{
    use RegistersUsers;
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct()
    {
        $this->middleware('guest');
    }
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => hash::make($data['password']),
            'curp'=>$data['curp'],
            'role'=>$data['tipousuario'],
            'pregunta'=>$data['preguntas'],
            'respuesta'=>$data['respuesta'],
        ]);
    }
    public function store(Request $request){          
        $user=new User; 
        $user -> name = $request->input('name');
        $user -> email = $request->input('email');
        $user -> password = $request->input('password');
        $user-> curp = $request->input('curp');
        $user-> role = $request->input('tipousuario');
        $user-> pregunta = $request->input('preguntas');
        $user-> respuesta = $request->input('respuesta');        
        $user->save();
        return "Registrado";
    }

    public function list(){
        $user = User::all();
        return response()->json($user,200); 
    }

    public function getUserid($id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['Mensaje'=>'Registro NO ENCONTRADO'],404);
        }
        return response()->json($user,200);
    }

    public function updateuser(Request $request, $id){
        $user = User::find($id);
        if(is_null($user)){
            return response()->json(['Mensaje'=>'Registro no encontrado'], 404);
        }
        $user->update($request->all());
        return Response($user,200);
    }

    public function deleteuser($id){
        $User = User::find($id);
        if(is_null($User)){
            return response()->json(['Mensaje'=>'Registro NO ENCONTRADO'],404);
        }
        $User->delete();
        return response()->json(['Mensaje'=>'Eliminado'],200);
    }
}
