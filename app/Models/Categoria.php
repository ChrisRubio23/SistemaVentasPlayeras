<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function productos(){
        return $this->belongsToMany(Producto::class)->whthTimestamps();
    }
    protected $fillable = ['caracteristica_id'];
}