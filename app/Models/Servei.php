<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servei extends Model
{
    use HasFactory;

    protected $primaryKey = 'idServeis';

    public function espais()
    {
        return $this->belongsToMany(Servei::class, 'Espais_has_Serveis', 'Espais_idEspais', 'Serveis_idServeis');
    }

    public function comandes()
    {
        return $this->hasMany(Comanda::class, 'Espais_idEspais');
    }
}
