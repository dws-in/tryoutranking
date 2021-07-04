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
        $data = $request->validated();
        $data['password'] = bcrypt($request->password);
        $this->user->create($data);
    }

    public function read($id)
    {
        return $this->user->findOrFail($id);
    }

    public function update($request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->validated());
        $user->save();
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
    }
}
