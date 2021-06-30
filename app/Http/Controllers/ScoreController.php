<?php

namespace App\Http\Controllers;

use App\Repositories\ScoreRepositoryInterface;
use App\Http\Requests\StoreScoreRequest;
use App\Models\Score;
use App\Models\Tryout;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ScoreController extends Controller
{
    private $scoreRepository;

    public function __construct(ScoreRepositoryInterface $scoreRepository)
    {
        $this->scoreRepository = $scoreRepository;
    }

    public function index(Tryout $tryout)
    {
        $scores = $this->scoreRepository->all();
        return view('scores.index')->with('scores', $scores);
    }

    public function create()
    {
        return view('scores.create');
    }

    public function store(Request $request)
    {
        $this->scoreRepository->create($request->validate());
        return redirect()->route('scores.index');
    }

    public function show($id)
    {
        //
        $score = Score::where('register_id', $id)
                        ->first();

        return view('scores.show')
                ->with('score', $score);
    }

    public function edit($id)
    {
        //
        $score = Score::find($id);
        return view('scores.edit', compact('score'));
    }

    public function update(StoreScoreRequest $request, $id)
    {
        //
        $score = Score::findOrFail($id);
        $input = $request->validated();
        $score->update($input);
        $score->save();
        return redirect()->route('scores.index');
            // $score->indonesia = $request->indonesia;
            // $score->english = $request->english;
            // $score->mathematic = $request->mathematic;
            // $score->physic = $request->physic;
            // $score->biology = $request->biology;
            // $score->chemistry = $request->chemistry;
            // $score->geography = $request->geography;
            // $score->economy = $request->economy;
            // $score->history = $request->history;
            // $score->sociology = $request->sociology;
            // $score->save();
            //return redirect('/dashboard');
        // $this->validate($request, [
        //     'indonesia' => 'required',
        //     'english' => 'required',
        //     'mathematic' => 'required',
        //     'physic' => 'required',
        //     'biology' => 'required',
        //     'chemistry' => 'required',
        //     'geography' => 'required',
        //     'economy' => 'required',
        //     'history' => 'required',
        //     'sociology' => 'required'
        // ]);
        // $score = Score::where('id', $id);
        // $score = new Score();
        // $score->indonesia = $request->indonesia;
        // $score->english = $request->english;
        // $score->mathematic = $request->mathematic;
        // $score->physic = $request->physic;
        // $score->biology = $request->biology;
        // $score->chemistry = $request->chemistry;
        // $score->geography = $request->geography;
        // $score->economy = $request->economy;
        // $score->history = $request->history;
        // $score->sociology = $request->sociology;
        // $score->save();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
