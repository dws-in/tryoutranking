<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Collection;
use App\Repositories\EloquentRepositoryInterface;

interface UserRepositoryInterface
{
    public function getAll(array $columns = ['*'], array $relations = []): Collection;
}