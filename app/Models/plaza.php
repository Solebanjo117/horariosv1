<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plaza extends Model
{
    use HasFactory;
    protected $PK = 'id';
    protected $casts = [
        'id' => 'string',
    ];
    protected $fillable = ['id', 'nombrePlaza'];
}
