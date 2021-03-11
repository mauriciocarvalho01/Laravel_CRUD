<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Representante extends Model
{
    //
    protected $table = "representante"; 
    protected $fillable = [ 
        'id',
        'nome',
        'cpf',
        'status'
    ]; 

    public function cliente(){
        return $this->belongsTo(Cliente::class, 'id'); 
    }
}
