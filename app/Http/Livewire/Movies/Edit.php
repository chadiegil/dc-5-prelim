<?php

namespace App\Http\Livewire\Movies;
use App\Models\Movies;
use Livewire\Component;

class Edit extends Component
{

    public $movieId;
    public $name,$company,$genra;


    public function mount(){

        // the this->movie come from the model Movies

        $this->name = $this->movie->name;
        $this->company = $this->movie->company;
        $this->genra = $this->movie->genra;

    }

    public function editMovie()
    {
        $this->validate([
            'name'        => ['required','string','max:255'],
            'genra'             => ['required'],
            'company'           => ['required','string','max:255'],
        ]);

        $this->movie->update([
            'name'=> $this->name,
            'company'=> $this->company,
            'genra'=> $this->genra,
        ]);
        return redirect('/dashboard')->with('message', $this->movie->name .' updated successfully');
    }


    public function getMovieProperty(){
        return Movies::find($this->movieId);
    }

    public function render()
    {
        return view('livewire.movies.edit');
    }
}
