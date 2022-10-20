<?php
namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ProductoController extends Controller
{
    public function index(Request $request){
        $producto = Producto::all();
        return response()->json($producto,200); 

        $categorias=Categoria::igualcategoria($request);
        $productos=DB::table('tblproductos')
        ->join('tblcategorias', 'tblcategorias.intCat','=','tblproductos.intCategoria')
        ->select('intId','vchNombre','vchCategoria','fltPrecio','intExistencia','txtDescripcion','vchFoto1')
        ->orderBy('vchNombre','asc')
        ->paginate(1000);     

        return view('producto.index',compact('productos','categorias'));
    }

    public function create(){
        $categorias=Categoria::all();
        return view('producto.create',compact('categorias'));
    }
    
    public function getproductoid($id){
        $producto = Producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro NO ENCONTRADO'],404);
        }
        return response()->json($producto,200);
    }

    public function updateproducto(Request $request, $id){
        $producto = Producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro no encontrado'], 404);
        }
        $producto->update($request->all());
        return Response($producto,200);
    }

    public function deleteproducto($id){
        $producto = Producto::find($id);
        if(is_null($producto)){
            return response()->json(['Mensaje'=>'Registro NO ENCONTRADO'],404);
        }
        $producto->delete();
        return response()->json(['Mensaje'=>'Eliminado'],200);
    }

    public function store(Request $request)//guardar rgistro
    {          
            $producto=new Producto; 
            $producto->vchNombre=$request->input('nombre');
            $producto->intCategoria=$request->input('cbxcategoria');
            $producto->fltPrecio=$request->input('precio');
            $producto->intExistencia=$request->input('existencia');
            $producto->txtDescripcion=$request->input('descripcion');
            $producto->intProveedor=$request->input('iduser');
            $producto->vchFecha=NOW();     
            if($request->hasFile('foto1')){
                $producto['vchFoto1']=$request->file('foto1')
                ->store('uploads','public');
            }
            $producto->save();
            return redirect()->route('producto.index');
    }
    
    public function show($id)
    {
        $categorias=Categoria::all();
        $productos=DB::table('tblproductos')        
        ->join('tblcategorias', 'tblcategorias.intId','=','tblproductos.intCategoria')
        ->join('tblproveedores','tblproveedores.intProv','=','tblproductos.intProveedor')
        ->select('intId','vchNombre','fltPrecio','intExistencia','txtDescripcion','vchFoto1','vchCategoria','vchProveedor','vchTelefono','vchWhatsApp')
        ->where('intId','=',$id)
        ->first();
        return view('producto.index',compact('productos','categorias'));
    }
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        $categorias=Categoria::all();
        return view('producto.edit',compact('producto','categorias'));
    }
    public function actualiza(Request $request, $id)//actualizar datos
    {
        $producto=Producto::findOrFail($id);
        $producto->vchNombre=$request->input('nombre');
        $producto->intCategoria=$request->input('cbxcategoria');
        $producto->fltPrecio=$request->input('precio');
        $producto->intExistencia=$request->input('existencia');
        $producto->txtDescripcion=$request->input('descripcion');
        $producto->vchFecha=NOW();
        //es donde se guarda la actualizacion
        if($request->hasFile('foto1')){
            $producto=Producto::findOrFail($id); 
            Storage::delete('public/'.$producto->vchFoto1);
            $producto['vchFoto1']=$request->file('foto1')
            ->store('uploads','public');
        }    
        $producto->save();
        return redirect('producto')->with('mensaje','Producto editado'); 
       
    }

    public function destroy($id){
        $producto=Producto::findOrFail($id);
        $producto->delete();
        return redirect('producto')->with('mensaje','Producto eliminado');
    }
}
