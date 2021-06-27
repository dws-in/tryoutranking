<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreTryoutRequest;
use App\Models\Cluster;
use App\Models\Tryout;
use App\Repositories\TryoutRepository;
use App\Repositories\TryoutRepositoryInterface;
use Illuminate\Http\Request;

class TryoutAPIController extends BaseController
{
    private $tryout;

    public function __construct(TryoutRepository $tryout)
    {
        $this->tryout = $tryout;
    }

    public function index()
    {
        //
        $tryout = $this->tryout->index();
        return $this->sendResponse(
            $tryout,
            'success'
        );
    }

    public function create()
    {
        //
        $clusters = Cluster::all();
        return view('tryouts.create')
                ->with('clusters', $clusters);
    }

    public function store(StoreTryoutRequest $request)
    {
        //
        $tryout = $this->tryout->store($request);
        return $this->sendResponse(
            $tryout,
            'success'
        );
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, Tryout $tryout)
    {
        //
        $data = $this->tryout->update($request, $tryout);
        return $this->sendResponse(
            $data,
            'success'
        );
    }

    public function destroy($id)
    {
        //
    }
}
