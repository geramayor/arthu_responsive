<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comprador extends Model
{
    protected $table='users';
    protected $primaryKey='id';

    protected $fillable=[
        'name', 'email','password','curp','codigopostal','estado','municipio','colonia',
        'telefono','whatsapp','foto','tipo_usuario'
    ];

    public $timestamps=false;
}
