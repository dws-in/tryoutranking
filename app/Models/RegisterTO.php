<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Tryout;

class RegisterTO extends Model
{
    use HasFactory;
    
    protected $table = 'register_tryouts';
    protected $fillable = [
        'user_name',
        'school_name',
        'graduation_date',
        'phone_number'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function tryout()
    {
        return $this->belongsTo(Tryout::class);
    }
}
