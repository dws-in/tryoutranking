<?php

namespace App\Http\Controllers\API;

use App\Repositories\ScoreRepositoryInterface;
use App\Http\Requests\StoreScoreRequest;
use App\Models\Score;
use App\Models\Tryout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends BaseController
{
    private $scoreRepository;

    public function __construct(ScoreRepositoryInterface $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }

    public function index()
    {
        $scores = $this->scoreRepository->all();

        return $this->sendResponse($scores, 206);
    }

    public function show(Score $score)
    {
        return $this->sendResponse($score, 206);
    }

    public function store(StoreScoreRequest $request)
    {
        $score = $this->scoreRepository->create($request->validate());
        return $this->sendResponse($score, 201);
    }

    public function update(StoreScoreRequest $request, Score $score)
    {
        $score = $this->scoreRepository->update($score->id, $request->validate());
        return $this->sendResponse($score, 201);
    }

    public function destroy(Score $score)
    {
        $score = $this->scoreRepository->deleteById($score->id);

        return $this->sendResponse($score, 204);
    }
}
