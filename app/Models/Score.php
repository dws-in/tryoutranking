<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\RegisterTryout;
use Illuminate\Support\Facades\DB;

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
    'passing_grade',
  ];

  public function registerTryout()
  {
    return $this->belongsTo(RegisterTryout::class, 'register_id');
  }

    public function getPassingGrade()
    {
        return ($this->indonesia + $this->english + $this->mathematic + $this->physic + $this->biology
                    + $this->chemistry + $this->geography + $this->economy + $this->history + $this->sociology)/10;
    }
}
