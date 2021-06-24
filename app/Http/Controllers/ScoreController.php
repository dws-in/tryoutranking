<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Score;
use App\Models\Tryout;
class ScoreController extends Controller
{
  public function index($id)
  {
      $tryout = Tryout::find($id);
      $scores = DB::table('scores')
                //->select('id', 'user_id', 'indonesia', 'english', 'mathematic', 'physic', 'biology', 'chemistry', 'geography', 'economy', 'history', 'sociology')
                ->where('tryout_id', $tryout->id)
                ->get();

        return view('scores.index', compact('scores', 'tryout'));
  }

  public function add($id)
  {
      $tryout = Tryout::find($id);
      return view('scores.add', compact('tryout'));
  }

  public function create(Request $request, $id)
  {
    $this->validate($request, [
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
    $tryout = Tryout::find($id);
    $score = new Score();
    $score->user_id = Auth::user()->id;
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
    return redirect()->route('scores.index');
  }

  public function edit(Tryout $tryout, Score $score)
  {
    if (auth()->user()->id == $tryout->user_id) {
      return view('scores.edit', compact('tryout', 'score'));
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

  public function show($id)
  {

  }
}
