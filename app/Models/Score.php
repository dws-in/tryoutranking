<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\Tryout;

class Score extends Model
{
  use HasFactory;

  protected $table = 'scores';
  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function tryout()
  {
    return $this->belongsTo(Tryout::class);
  }
}
