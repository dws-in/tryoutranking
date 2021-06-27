<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Tryout;

class RegisterTryout extends Model
{
    use HasFactory;

    protected $table = 'register_tryouts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'tryout_id',
        'user_name',
        'school_name',
        'graduation_date',
        'phone_number',
        'cluster_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tryout()
    {
        return $this->belongsTo(Tryout::class,'tryout_id');
    }

    public function cluster()
    {
        return $this->hasOne(Cluster::class, 'cluster_id');
    }

    public function scores()
    {
        return $this->hasOne(Score::class);
    }

}
