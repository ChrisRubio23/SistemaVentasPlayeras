<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //

    public function compras(){
        return $this->belongsToMany(Compra::class)->whthTimestamps()
        ->withPivot('cantidad', 'precio_compra', 'precio_venta');
    }

    public function ventas(){
        return $this->belongsToMany(Venta::class)->whthTimestamps()
        ->withPivot('cantidad', 'precio_compra', 'descuento');
    }

    public function categorias(){
        return $this->belongsToMany(Categoria::class)->whthTimestamps();
    }

    public function marca(){
        return $this->belongsTo(Marca::class);
    }

    public function presentacione(){
        return $this->belongsTo(Presentacione::class);
    }
}
