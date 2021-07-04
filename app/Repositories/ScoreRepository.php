<?php

namespace App\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Score;

class ScoreRepository
{
    protected $score;

    public function __construct(Score $score)
    {
        $this->score = $score;
    }

    public function indexBy()
    {
        $scores = DB::table('scores')->get();
        return $scores;

        // return $this->score->all();
    }

    public function index()
    {
        $totals = DB::table('scores')->select('id','register_id','indonesia','english','mathematic','physic','biology','chemistry','geography','economy','history','sociology', DB::raw('SUM(
            CASE
              WHEN indonesia IS NULL
              THEN 0
              ELSE indonesia
            END
            +
            CASE
              WHEN english IS NULL
              THEN 0
              ELSE english
            END
            +
            CASE
              WHEN mathematic IS NULL
              THEN 0
              ELSE mathematic
            END
          ) as subtotal'))->orderBy('subtotal')->get();
        $scores = DB::table('scores')->orderBy('total');
        return $totals;

        // return $this->score->all();
    }

    public function create($request)
    {
        $this->score->create($request);
    }

    public function read($id)
    {
        $score = DB::table('scores')->find($id);
        return $score;

        // return $this->score->findOrFail($id);
    }

    public function update($request, $id)
    {
        $score = Score::findOrFail($id);
        $input = $request->validated();
        $score->update($input);
        $score->save();
    }

    public function delete($id)
    {
        $this->score->findOrFail($id);
        $this->score->delete();
    }
}
