<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreScoreRequest;
use App\Http\Requests\UpdateScoreRequest;
use Illuminate\Http\Request;
use App\Models\Score;
use App\Models\Tryout;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class ScoreController extends Controller
{
  public function index(Tryout $tryout)
  {
    // abort_if(Gate::denies('scores_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

    $scores = Score::all();

    return view('scores.index', compact('scores'));
  }

  public function store(StoreScoreRequest $request)
  {
    Score::create($request->validated());

    return redirect()->route('scores.index');
  }

  public function show(Score $score)
  {
      // abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

      return view('scores.show', compact('score'));
  }

  public function add(Tryout $tryout)
  {
    return view('score-add', compact('tryout'));
  }

  public function create(Request $request, Tryout $tryout)
  {
    $this->validate($request, [
      'user_id' => 'required',
      'indonesia' => 'required',
      'english' => 'required',
      'mathematic' => 'required',
      'physic' => 'required',
      'biology' => 'required',
      'chemistry' => 'required',
      'geography' => 'required',
      'economy' => 'required',
      'history' => 'required',
      'sociology' => 'required'
    ]);
    $score = new Score();
    $score->user_id = $request->user_id;
    $score->tryout_id = $tryout->id;
    $score->indonesia = $request->indonesia;
    $score->english = $request->english;
    $score->mathematic = $request->mathematic;
    $score->physic = $request->physic;
    $score->biology = $request->biology;
    $score->chemistry = $request->chemistry;
    $score->geography = $request->geography;
    $score->economy = $request->economy;
    $score->history = $request->history;
    $score->sociology = $request->sociology;
    $score->save();
    return redirect('/dashboard');
  }

  public function edit(Tryout $tryout, Score $score)
  {
    if (auth()->user()->id == $tryout->user_id) {
      return view('score-edit', compact('tryout', 'score'));
    } else {
      return redirect('/dashboard');
    }
  }

  public function update(Request $request, Tryout $tryout, Score $score)
  {
    if (isset($_POST['delete'])) {
      $score->delete();
      return redirect('/dashboard');
    } else {
      $this->validate($request, [
        'user_id' => 'required'
      ]);
      $score->user_id = $request->user_id;
      $score->indonesia = $request->indonesia;
      $score->english = $request->english;
      $score->mathematic = $request->mathematic;
      $score->physic = $request->physic;
      $score->biology = $request->biology;
      $score->chemistry = $request->chemistry;
      $score->geography = $request->geography;
      $score->economy = $request->economy;
      $score->history = $request->history;
      $score->sociology = $request->sociology;
      $score->save();
      return redirect('/dashboard');
    }
  }
}
