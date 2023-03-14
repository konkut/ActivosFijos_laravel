<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Activo extends Model
{
    protected $table = 'activos';
    protected $primaryKey = 'id';
    protected $fillable = [
        'codigo',
        'descrip',
        'precio',
        'fechaadq',
        'foto',
        'grupo_id',
        'estado_id',
        'oficina_id',
    ];

    function grupo()
    {
        return $this->belongsTo(Grupo::class);
    }
    function oficina()
    {
        return $this->belongsTo(Oficina::class);
    }
    function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
