<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Espai extends Model
{
    use HasFactory;

    protected $primaryKey = 'idEspais';

    public function serveis()
    {
        return $this->belongsToMany(Servei::class, 'Espais_has_Serveis', 'Espais_idEspais', 'Serveis_idServeis')
            ->withPivot('preu');
    }

    public function comandes()
    {
        return $this->belongsToMany(Comanda::class, 'Comanda', 'Espais_idEspais', 'idComanda')
            ->withPivot('lletra_espai', 'Nom', 'cognom', 'email', 'telèfon', 'num d\'atendents', 'data_entrada', 'data_sortida', 'estat');
    }
}
