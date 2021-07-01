<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    
    public function index()
    {
        return $this->user->all();
    }

    public function create($request)
    {
        $this->user->create($request);
    }

    public function read($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($request, $id)
    {
        $this->user->findOrFail($id);
        $this->user->update($request);
    }

    public function delete($id)
    {
        $this->user->findOrFail($id);
        $this->user->delete();
    }
}