<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Alumno extends Model
{
    use HasFactory;
    protected $casts = [
        'id' => 'string',
    ];
    protected $fillable = ['id','nombre','email','apellido'];
    public function carreras():BelongsTo{
        return $this->belongsTo(Carrera::class,'idCarrera');
    }
}
