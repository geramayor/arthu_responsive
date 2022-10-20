<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //use HasFactory;
    protected $table='tblcategorias';
    protected $primaryKey='intCat';

    protected $fillable=[
        'vchCategoria'
    ];

    public $timestamps=false;

    public static function igualcategoria($id){
        $result=Categoria::join('tblcategorias', 'tblcategorias.intId','=','tblproductos.intCategoria') 
        ->select('vchCategoria')
        ->where('intId',$id); 

        return $result;
    } 
}
