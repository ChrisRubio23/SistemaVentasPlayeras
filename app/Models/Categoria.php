<?php

namespace App\Models;

<<<<<<< HEAD
use Illuminate\Database\Eloquent\Factories\HasFactory;
=======
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //

    public function productos(){
<<<<<<< HEAD
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }

    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);
    }
    
=======
        return $this->belongsToMany(Producto::class)->whthTimestamps();
    }
>>>>>>> f3276e4e0b05889e00cf43765ba30cd6ff0cd19f
    protected $fillable = ['caracteristica_id'];
}
