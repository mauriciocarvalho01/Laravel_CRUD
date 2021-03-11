<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'cliente';
    protected $filablle = [
        'id',
        'nome',
        'cnpj',
        'status',
        'representante_id'
    ]; 

    public function representante()
    {
        return $this->hasOne(Representante::class, 'id', 'representante_id');
    }
}
