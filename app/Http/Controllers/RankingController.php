<?php

namespace App\Http\Controllers;

use App\Models\RegisterTryout;
use App\Models\Score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RankingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
