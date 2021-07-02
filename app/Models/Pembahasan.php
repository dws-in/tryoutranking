<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembahasan extends Model
{
    use HasFactory;

    protected $table = 'pembahasans';
     protected $fillable = [
        'file',
    ];

    public function tryout()
    {
        return $this->belongsTo(User::class, 'tryout_id');
    }

}
