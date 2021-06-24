<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cluster extends Model
{
    use HasFactory;
    protected $table = 'clusters';
    protected $fillable = [
        'cluster_name',
    ];

    public function majors()
    {
        return $this->hasMany(Major::class);
    }
}
