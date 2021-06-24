<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTryoutRequest;
use App\Http\Requests\UpdateTryoutRequest;
use Illuminate\Http\Request;
use App\Models\Tryout;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class TryoutController extends Controller
{
    public function index()
    {
    //  abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $user = Auth::user()->id;
        $tryouts = Tryout::all();
        return view('tryouts.index', compact('tryouts'));
    }

    public function create()
    {
        //abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('tryouts.create');
    }

    public function store(StoreTryoutRequest $request)
    {
        $user = Auth::user()->id;
        $data = $request->validated();
        $data['user_id'] = $user;
        Tryout::create($data);

        return redirect()->route('tryouts.index');
    }

    public function show(Tryout $tryout)
    {
    //   abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tryouts.show', compact('tryout'));
    }

    public function edit(Tryout $tryout)
    {
        abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('tryouts.edit', compact('tryout'));
    }

    public function update(UpdateTryoutRequest $request, Tryout $tryout)
    {
        $tryout->update($request->validated());

        return redirect()->route('tryouts.index');
    }

    public function destroy(Tryout $tryout)
    {
        abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tryout->delete();

        return redirect()->route('tryouts.index');
    }
}
