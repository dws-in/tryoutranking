<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterTryoutRequest;
use Illuminate\Http\Request;
use App\Models\RegisterTryout;
use Symfony\Component\HttpFoundation\Response;

class RegisterController extends Controller
{
    //
    public function index(){

        return view('register-tryout');
    }

    public function create(){
        return view('register-tryout');
    }

    public function store(RegisterTryoutRequest $request){
        $Register = RegisterTryout::create($request->validated());

        return redirect()->route('registerto.create');
    }
}
