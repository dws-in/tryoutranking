<?php
namespace App\Repositories;

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
        return $this->tryout::paginate(10);
    }

    public function store($request)
    {
        $data = $request->validated();
        $data['user_id'] = 1;
        $this->tryout::create($data);
    }

    public function update($request, $tryout)
    {
        $tryout->update($request->validated());
    }
}
