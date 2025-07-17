<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    protected $fillable = ['nombre', 'especialidad', 'telefono'];

    public function citas() {
        return $this->hasMany(Cita::class);
    }

}
