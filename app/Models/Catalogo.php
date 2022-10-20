<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalogo extends Model
{
    //use HasFactory;
    protected $table='tblproductos';
    protected $primaryKey='intId';

    protected $fillable=[
        'vchNombre','fltPrecio','intExistencia','txtDescripcion','vchFoto1'
    ];

    public $timestamps=false;
}
