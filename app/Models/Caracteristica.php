<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Caracteristica extends Model
{
    //

    public function categoria(){
        return $this->hasOne(Categoria::class);
    }
    
    public function marca(){
        return $this->hasOne(Marca::class);
    }
    
    public function Presentacione(){
        return $this->hasOne(Presentacione::class);
    }

    protected $fillable = ['nombre', 'descripcion'];
}
