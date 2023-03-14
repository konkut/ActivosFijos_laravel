<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Oficina extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'oficinas';

    /**
     * The database primary key value.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo', 'nombre', 'piso', 'responsable_id'];
    function activo()
    {
        return $this->hasMany(Activo::class);
    }
    function responsable()
    {
        return $this->belongsTo(Responsable::class);
    }
}
