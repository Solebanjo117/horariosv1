<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Carrera extends Model
{
    use HasFactory;
    protected $casts = [
        'idCarrera' => 'string',
    ];
    protected $primaryKey = 'idCarrera';
    public $incrementing = false;
    public function alumnos(): HasMany{
        return $this->hasMany(Alumno::class,'carrera_id');
    }
    public function depto():BelongsTo{
        return $this->belongsTo(Depto::class);
    }
}
