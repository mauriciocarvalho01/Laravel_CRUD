<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produto';
    protected $fillble = [
        "id",
        "nome",
        "especificacao",
        "status"
    ]; 
    public function marca(){
        return $this->hasMany(Marca::class); 
    }

    public function categoria(){
        return $this->belongsToMany(Categoria::class); 
    }
    
}
