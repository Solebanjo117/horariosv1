<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Depto extends Model
{
    use HasFactory;
    
    protected $primaryKey = 'idDepto';
    protected $casts = [
        'idDepto' => 'string',
    ];
    public $incrementing = false;
    public function carreras(): HasMany{
        return $this->hasMany(Carrera::class,'idDepto');
    }
}
