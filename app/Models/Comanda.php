<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comanda extends Model
{
    use HasFactory;

    protected $primaryKey = 'id';

    public function espai()
    {
        return $this->belongsTo(Espai::class, 'Espais_idEspais', 'id');   
    }

    public function serveis()   
    {
        return $this->belongsToMany(Servei::class, 'Comanda_has_Serveis', 'Comanda_idComanda', 'Serveis_idServeis')->withPivot('quantitat');
    }
}
