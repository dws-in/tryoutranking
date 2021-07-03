<?php

namespace App\Repositories;

use App\Models\Score;

class ScoreRepository
{
    protected $score;

    public function __construct(Score $score)
    {
        $this->score = $score;
    }

    public function index()
    {
        return $this->score->all();
    }

    public function create($request)
    {
        $this->score->create($request);
    }

    public function read($id)
    {
        return $this->score->findOrFail($id);
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
