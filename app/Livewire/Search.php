<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class Search extends Component
{
    #[Validate('required ')]
    public $searchText = '';
    public $results = [];

    public function updatedSearchText($value) {
        $this->reset('results');

        $searchTerm = "%{$value}%";

        $this->validate();

        $this->results = Article::where('title', 'LIKE', $searchTerm)->get();
    }

    public function clear() {
        $this->reset('searchText', 'results');
    }

    public function render()
    {
        return view('livewire.search');
    }
}
