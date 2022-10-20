<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    //use HasFactory;
    protected $table='tblproveedores';
    protected $primaryKey='intProv';

    protected $fillable=[
        'vchProveedor', 'vchCorreo','vchPassword','vchrfcProveedor','vchCodigop','vchEstado','vchMunicipio','vchColonia',
        'vchTelefono','vchWhatsApp','vchFoto','intRol'
    ];

    public $timestamps=false;
}
