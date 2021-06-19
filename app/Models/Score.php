<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Tryout;
use App\Models\User;

class Score extends Model
{
  use HasFactory;

  protected $table = 'scores';
  protected $fillable = [
    'user_id',
    'tryout_id',
    'indonesia',
    'english',
    'mathematic',
    'physic',
    'biology',
    'chemistry',
    'geography',
    'economy',
    'history',
    'sociology',
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
