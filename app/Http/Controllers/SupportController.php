<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use App\Models\Support;
use App\Mail\SupportMail;
use App\Http\Requests\StoreSupportRequest;
use Symfony\Component\HttpFoundation\Response;

class SupportController extends Controller
{

    public function index(){
        return view('support.create');
    }

    public function create()
    {


        return view('support.create');
    }

    public function store(StoreSupportRequest $request)
    {
        $support = Support::create($request->validated());

        Mail::to($request->input('email'))->send(new SupportMail($request->input('id'), $request->input('email'), $request->input('description')));

        return redirect()->route('support.create')->with('alert', 'Email sent successfully!');
    }
    // Mail::to('adm.tryout.tor@gmail.com')->send(new SupportMail($request->input('id'), $request->input('email'), $request->input('description'));

}
