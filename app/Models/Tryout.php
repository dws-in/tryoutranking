<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Score;

class Tryout extends Model
{

  use HasFactory;

  protected $table = 'tryouts';

  protected $fillable = [
    'name',
    'description',
    'held',
    'user_id',
  ];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function registerTryout()
  {
      return $this->hasMany(RegisterTO::class);
  }

  public function score()
  {
    return $this->hasMany(Score::class);
  }
}
