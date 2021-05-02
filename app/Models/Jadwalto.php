<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwalto extends Model
{
    use HasFactory;
    protected $fillable = [
        'namato',
        'organizer',
        'rumpunmapel',
    ];
}
