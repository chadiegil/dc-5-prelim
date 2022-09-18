<?php

namespace App\Http\Livewire\Movies;

use App\Models\Movies;
use Livewire\Component;

class Create extends Component
{
    public $name,$genra,$company;

    public function addMovies(){

            $this->validate([
                'name'        => ['required','string','max:255'],
                'genra'             => ['required'],
                'company'           => ['required','string','max:255'],
            ]);

            Movies::create([
                'name'        => $this->name,
                'genra'             => $this->genra,
                'company'           => $this->company,
            ]);

            return redirect('/dashboard')->with('message', $this->name . ' added successfully');
    }

    public function updated($propertyEmail)
    {
        // $this->validateOnly($propertyEmail, [
        //     'email'             => ['required','email','unique:students'],
        // ]);
    }

    public function render()
    {
        return view('livewire.movies.create');
    }
}
