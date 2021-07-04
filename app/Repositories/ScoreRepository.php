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

    public function index($id)
    {
        $totals = DB::table('scores')
            ->join('register_tryouts', 'scores.register_id', '=', 'register_tryouts.id')
            ->join('users', 'register_tryouts.user_id', '=', 'users.id')
            ->select('scores.id','users.name','indonesia','english','mathematic','physic','biology','chemistry','geography','economy','history','sociology',
                DB::raw('indonesia + english + mathematic + physic + biology + chemistry + geography + economy + history + sociology as total'))
            ->where('tryout_id',$id)
            ->orderByDesc('total')
            ->get();
        return $totals;
    }

    public function store($request)
    {
        $score = DB::table('scores')
            ->insertGetId([
                'register_id' => $request->register_id,
                'indonesia' => $request->indonesia,
                'english' => $request->english,
                'mathematic' => $request->mathematic,
                'physic' => $request->physic,
                'biology' => $request->biology,
                'chemistry' => $request->chemistry,
                'geography' => $request->geography,
                'economy' => $request->economya,
                'history' => $request->history,
                'sociology' => $request->sociology,
            ]);
    }

    public function show($id)
    {
        $score = DB::table('scores')->find($id);
        return $score;
    }

    public function update($request, $id)
    {
        $score = DB::table('scores')
            ->where('id', $id)
            ->update([
                'register_id' => $request->register_id,
                'indonesia' => $request->indonesia,
                'english' => $request->english,
                'mathematic' => $request->mathematic,
                'physic' => $request->physic,
                'biology' => $request->biology,
                'chemistry' => $request->chemistry,
                'geography' => $request->geography,
                'economy' => $request->economya,
                'history' => $request->history,
                'sociology' => $request->sociology,
            ]);
    }

    public function destroy($id)
    {
        $score = DB::table('scores')
            ->find($id)
            ->delete();
    }
}