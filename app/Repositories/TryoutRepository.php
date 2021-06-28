<?php
namespace App\Repositories;

use App\Models\Cluster;
use App\Models\Tryout;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class TryoutRepository
{
    private $tryout;
    public function __construct(Tryout $tryout)
    {
        $this->tryout = $tryout;
    }

    public function  index()
    {
        return Tryout::all();
    }

    public function create()
    {
        return Cluster::all();
    }

    public function store($request)
    {
        $user = Auth::user()->id;
        $data = $request->validated();
        $data['user_id'] = $user;
        $this->tryout->create($data);
    }

    public function show($id)
    {
        $tryout = Tryout::findOrFail($id);
        return $tryout;
    }

    public function edit($id)
    {
        return Tryout::findOrFail($id);
    }

    public function update($request, $id)
    {
        $tryout = Tryout::findOrFail($id);
        $tryout->update($request->validated());
    }

    public function delete()
    {

    }
}
