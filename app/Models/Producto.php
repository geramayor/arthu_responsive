<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //use HasFactory;
    protected $table='tblproductos';
    protected $primaryKey='intId';

    protected $fillable=[
        'vchNombre', 'vchCategoria','fltPrecio','intExistencia','txtDescripcion','vchFoto1','vchFoto2',
        'vchFoto3','intProveedor','intTelProveedor','vchFecha'
    ];

    public $timestamps=false;
}
