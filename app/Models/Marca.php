<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    //
    protected $table = "marca";

    protected $fillable = [
        "id",
        "descrição",
        "status",
    ];

    public function produto(){
        return $this->belongsTo(Produto::class, 'id'); 
    }
}
