<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buzon extends Model
{
    protected $table='tblbuzon';
    protected $primaryKey='intId';

    protected $fillable=[
        'vchNombre','vchOperacion'.'txtComentario'
    ];

    public $timestamps=false;
}
?>