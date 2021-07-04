<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Repositories\ScoreRepository;
use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use App\Repositories\TryoutRepository;

class ScoreController extends Controller
{
    private $scoreRepository;

    public function __construct(TryoutRepository $tryoutRepository, ScoreRepository $scoreRepository)
    {
        $this->tryoutRepository = $tryoutRepository;
        $this->scoreRepository = $scoreRepository;
    }

    public function index($tryout_id)
    {
        $scores = $this->scoreRepository->index($tryout_id);

        return view('scores.index')->with('tryout_id', $tryout_id)->with('scores', $scores);
    }

    public function show($tryout_id, $id)
    {
        $score = $this->scoreRepository->show($id);
        return view('scores.show')->with('tryout_id', $tryout_id)->with('score', $score);
    }

    public function create($tryout_id)
    {
        return view('scores.create')->with('tryout_id', $tryout_id);
    }

    public function store($tryout_id, StoreScoreRequest $request)
    {
        $this->scoreRepository->store($request->validated());
        return redirect()->route('scores.index')->with('tryout_id', $tryout_id);
    }

    public function edit($tryout_id, $id)
    {
        $score = $this->scoreRepository->show($id);
        return view('scores.edit')->with('tryout_id', $tryout_id)->with('score', $score);
    }

    public function update($tryout_id, $id, UpdateScoreRequest $request)
    {
        $this->scoreRepository->update($request->validated(), $id);

        return redirect()->route('scores.index')->with('tryout_id', $tryout_id);
    }

    public function destroy($tryout_id, $id)
    {
        $this->scoreRepository->destroy($id);

        return redirect()->route('scores.index')->with('tryout_id', $tryout_id);
    }
}
