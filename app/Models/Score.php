<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RegisterTryout;

class Score extends Model
{
  use HasFactory;

  protected $table = 'scores';
  protected $primaryKey = 'id';

  protected $fillable = [
    'register_id',
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

  public function registerTryout()
  {
    return $this->belongsTo(RegisterTryout::class, 'register_id');
  }
}
