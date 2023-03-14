<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Responsable extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'responsables';

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
    protected $fillable = ['nombre', 'ci', 'foto'];
    function oficina()
    {
        return $this->hasMany(Oficina::class);
    }
}
