<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'apellido', 'mail', 'carrera'];

    public function informes()
    {
        return $this->hasMany(Informe::class);
    }
}
