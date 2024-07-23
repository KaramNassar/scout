<?php

namespace App\Livewire;

use App\Models\Admin;
use Illuminate\Support\Collection;
use Livewire\Component;

class SpotlightSearch extends Component
{
    public $query = '';
    public $results;

    public function updatedQuery()
    {
        $this->results = new Collection();
        $this->results = Admin::where('firstname', 'like', '%'.$this->query.'%')->take(10)->get();
    }

    public function render()
    {
        return view('livewire.spotlight-search');
    }
}
