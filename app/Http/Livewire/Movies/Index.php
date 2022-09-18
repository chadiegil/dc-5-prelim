<?php

namespace App\Http\Livewire\Movies;

use App\Models\Movies;
use Livewire\Component;

class Index extends Component
{
    public function loadMovies() {
        $movies = Movies::orderBy('name')->get();

        return compact('movies');
    }

    public function render()
    {
        return view('livewire.movies.index', $this->loadMovies());
    }
}
