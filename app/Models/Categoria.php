<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    // //
    protected $table = 'categoria';
    protected $fillable = [
        "id",
        "descrição",
        "status",
    ];

    public function produto()
    {
        return $this->belongsToMany(Produto::class);
    }
}
