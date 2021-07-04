<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $users = $this->userRepository->index();

        return view('users.index')->with('users', $users);
    }

    public function show($id)
    {
        $user = $this->userRepository->read($id);

        return view('users.show', compact('user'));
    }

    public function create()
    {
        $roles = Role::pluck('title', 'id');

        return view('users.create', compact('roles'));
    }

    public function store(StoreUserRequest $request)
    {
        $this->userRepository->create($request);
        return redirect()->route('users.index');
    }

    public function edit(User $user)
    {
        $roles = Role::all();
        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UpdateUserRequest $request, $id)
    {
        $this->userRepository->update($request, $id);
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $this->userRepository->delete($id);
        return redirect()->route('users.index');
    }
}
