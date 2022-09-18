<?php

namespace App\Http\Livewire\Movies;
use App\Models\Movies;
use Livewire\Component;

class Delete extends Component
{

    public $movieId;



    public function getMovieProperty(){
        return Movies::find($this->movieId);
    }

    public function render()
    {
        return view('livewire.movies.delete');
    }
    public function delete() {
        $this->movie->delete();

        return redirect('/dashboard')->with('message', $this->movie->name . ' deleted successfully');
    }

    public function back() {
        return redirect('/dashboard');
    }
}
