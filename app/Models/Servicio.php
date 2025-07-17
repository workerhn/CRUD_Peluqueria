<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicio extends Model
{

    protected $fillable = ['nombre', 'precio', 'duracion']; // solo los campos reales de tu tabla

    public function citas()
    {
        return $this->hasMany(Cita::class);
    }

}
