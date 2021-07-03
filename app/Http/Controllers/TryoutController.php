<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTryoutRequest;
use App\Http\Requests\UpdateTryoutRequest;
use App\Models\Cluster;
use App\Models\Pembahasan;
use Illuminate\Http\Request;
use App\Models\Tryout;
use App\Repositories\TryoutRepository;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class TryoutController extends Controller
{
    private $tryout;
    public function __construct(TryoutRepository $tryout)
    {
        $this->tryout = $tryout;
    }

    public function index()
    {
        //abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        // $user = Auth::user()->id;
        // $tryouts = Tryout::all();
        $tryouts = $this->tryout->index();
        return view('tryouts.index', compact('tryouts'));
    }

    public function create()
    {
        //abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        //$clusters = Cluster::all();
        $clusters = $this->tryout->create();
        return view('tryouts.create')
                ->with('clusters', $clusters);
    }

    public function store(StoreTryoutRequest $request)
    {

        $user = Auth::user()->id;
        $data = $request->validated();
        $data['user_id'] = $user;
        Tryout::create($data);
        //$this->tryout->store($request);
        

        return redirect()->route('tryouts.index');
    }

    public function show($id)
    {
    //   abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $tryout = $this->tryout->show($id);
        return view('tryouts.show', compact('tryout'));
    }

    public function edit($id)
    {
        abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tryout = $this->tryout->edit($id);
        $clusters = Cluster::all();
        return view('tryouts.edit', compact('tryout', 'clusters'));
    }

    public function update(UpdateTryoutRequest $request, $id)
    {
        $this->tryout->update($request, $id);
        return redirect()->route('tryouts.index');
    }

    public function destroy(Tryout $tryout)
    {
        abort_if(Gate::denies('tryouts_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tryout->delete();
        return redirect()->route('tryouts.index');
    }
}
