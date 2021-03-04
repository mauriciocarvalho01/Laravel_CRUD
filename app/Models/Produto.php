<?php

namespace App\Models;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    //
    protected $table = 'produto';
    protected $fillable = [
        "id",
        "nome",
        "especificacao",
        "status",
        "marca_id",
    ];
    public function marca()
    {
        return $this->hasOne(Marca::class, 'id', 'marca_id');
    }

    public function categoria()
    {
        return $this->belongsToMany(Categoria::class);
    }

}
