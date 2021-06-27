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
        $clusters =$this->tryout->create();
         return $this->sendResponse(
            $clusters,
            'success'
        );
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
        $tryout = $this->tryout->show($id);
        return $this->sendResponse(
            $tryout,
            'success'
        );
    }

    public function edit($id)
    {
        //
        $tryout = $this->tryout->edit($id);
        $clusters = Cluster::all();
        return $this->sendResponse(
            $tryout,
            'success'
        );
    }

    public function update(Request $request, $id)
    {
        //
        $data = $this->tryout->update($request, $id);
        return $this->sendResponse(
            $data,
            'success'
        );
    }

    public function destroy(Tryout $tryout)
    {
        //
        $tryout->delete();
        return $this->sendResponse(
            $tryout,
            'success'
        );
    }
}
