<?php

namespace App\Http\Controllers;

use App\Models\RegisterTryout;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ParticipantController extends Controller
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

    public function show($tryout_id)
    {
        $user = Auth::user()->id;
        $participants = DB::table('register_tryouts')
            ->join('scores', 'register_tryouts.id', 'scores.register_id')
            ->select('user_id', 'user_name', 'school_name', 'graduation_date', 'scores.id as score_id')
            ->where('tryout_id', '=', $tryout_id)
            ->get();
        // $participants = RegisterTryout::where('tryout_id', $tryout_id)
        //                 ->get();
        
        return view('participant.show')
                ->with('participants', $participants)
                ->with('user', $user);
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
