<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informe extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'numero_de_hojas', 'area', 'estudiante_id'];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }
}
