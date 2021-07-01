<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Repositories\ScoreRepository;
use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;

class ScoreController extends Controller
{
    private $scoreRepository;

    public function __construct(ScoreRepository $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }

    public function index()
    {
        $scores = $this->scoreRepository->index();

        return view('scores.index')->with('scores', $scores);
    }

    public function show($id)
    {
        $score = $this->scoreRepository->read($id);

        return view('scores.show', compact('score'));
    }

    public function create()
    {
        return view('scores.create');
    }

    public function store(StoreScoreRequest $request)
    {
        $this->scoreRepository->create($request->validated());

        return redirect()->route('scores.index');
    }

    public function edit($id)
    {
        $score = $this->scoreRepository->read($id);
        return view('scores.edit', compact('score'));
    }

    public function update(UpdateScoreRequest $request, Score $score)
    {
        $this->scoreRepository->update($request->validated(), $score->id);

        return redirect()->route('scores.index');
    }

    public function destroy($id)
    {
        $this->scoreRepository->delete($id);

        return redirect()->route('scores.index');
    }
}
