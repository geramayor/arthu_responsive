<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modopago extends Model
{
 
    
    //use HasFactory;
    protected $table='tbltarjetadebito';
    protected $primaryKey='Id';

    protected $fillable=[
        'vchNombre', 'numTarjeta', 'Fecha', 'ccv'
    ];

    public $timestamps=false;
}
