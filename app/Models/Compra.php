<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    //

    public function proveedore(){
        return $this->belongsTo(Proveedore::class);
    }

    public function comprobante(){
        return $this->belongsTo(Comprobante::class);
    }
    
    public function productos(){
        return $this->belongsToMany(Producto::class)->whthTimestamps()
        ->withPivot('cantidad', 'precio_compra', 'precio_venta');
    }
}
