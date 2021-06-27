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
        abort_if(Gate::denies('mytryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        
        $mytryouts = RegisterTryout::all();
        return view('mytryouts.index', compact('mytryouts'));
        
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
