<?php

namespace App\Http\Livewire;

use App\Models\Tryout;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;
class Search extends Component
{
    use WithPagination;
    public $searchTerm;

    public function render()
    {
        $searchTerm = '%'.$this->searchTerm.'%';
        return view('livewire.search',[
            'tryouts' => Tryout::with('clusters')
                        ->whereHas('clusters', function($q) use($searchTerm){
                            $q->where('cluster_name','LIKE', $searchTerm);
                        })
                        ->orWhere('organizer_name', 'LIKE', $searchTerm)
                        ->orWhere('name', 'LIKE', $searchTerm)
                        ->orWhere('held', 'LIKE', $searchTerm)
                        ->paginate(10)
        ]);
    }
}
