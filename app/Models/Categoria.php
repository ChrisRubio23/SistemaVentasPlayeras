<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    public function productos(){
        return $this->belongsToMany(Producto::class)->withTimestamps();
    }

    public function caracteristica(){
        return $this->belongsTo(Caracteristica::class);   
        return $this->belongsToMany(Producto::class)->whthTimestamps();
    }
    protected $fillable = ['caracteristica_id'];
}