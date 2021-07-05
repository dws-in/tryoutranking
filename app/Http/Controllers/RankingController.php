<?php

namespace App\Http\Controllers;

use App\Models\RegisterTryout;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
        // $rankings = RegisterTryout::with('scores')
        //                         ->where('tryout_id', $id)
        //                         ->orderByDesc('scores.passing_grade')
        //                         ->get();

        $rankings =  DB::table('register_tryouts')
                            ->join('scores', 'register_tryouts.id', '=', 'scores.register_id')
                            ->join('tryouts', 'register_tryouts.tryout_id', '=', 'tryouts.id')
                            ->where('tryout_id', $id)
                            ->orderBy('passing_grade', 'DESC')
                            ->get();
        return view('ranking.show', compact('rankings'));
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
