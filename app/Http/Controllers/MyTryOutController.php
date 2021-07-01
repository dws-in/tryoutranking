<?php

namespace App\Http\Controllers;

use App\Models\RegisterTryout;
use App\Models\Tryout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class MyTryoutController extends Controller
{
    public function index()
    {
      
//         abort_if(Gate::denies('mytryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
//         $mytryouts = RegisterTryout::all();
//         return view('mytryouts.index', compact('mytryouts'));
                //
        $user = Auth::user()->id;
        $role = Auth::user()->role_id;
        if ($role == 3){
            $tryouts = RegisterTryout::where('user_id', $user)
                    ->get();

            return view('myTryout.index-register', ['tryouts' => $tryouts]);
        }
        elseif (($role == 1) or ($role == 2)) {
            $tryouts = Tryout::where('user_id', $user)
                    ->get();

            return view('myTryout.index-show', ['tryouts' => $tryouts]);
        }
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
