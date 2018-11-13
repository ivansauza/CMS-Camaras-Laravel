<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    protected $table = 'sucursales';

    protected $fillable = ([
    	'nombre', 
    	'direccion', 
    	'moneda',
    	'localidad', 
    	'direccion',
    	'cp', 
    	'telefono'
    ]);


    public function paquetes()
    {
        return $this->belongsToMany('App\Paquete');
    }
    /*
    public function proveedores()
    {
        return $this->belongsToMany('App\Proveedor')
    }
    */
}
