<?php

namespace App\Repositories\Eloquent;

use App\Models\Score;
use App\Repositories\ScoreRepositoryInterface;

class ScoreRepository extends BaseRepository implements ScoreRepositoryInterface
{
    protected $model;

    public function __construct(Score $model)
    {
        $this->model = $model;
    }

}