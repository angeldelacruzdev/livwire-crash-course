<?php

namespace App\Livewire;

use App\Models\Entry;
use Livewire\Component;

class BirdForm extends Component
{

    public int $bird_count;
    public string $notes;


    public function submit(){

        $this->validate([
            'bird_count' => 'required|integer',
            'notes' => 'required|string'
        ]);

        Entry::create([
            'bird_count' => $this->bird_count,
            'notes' => $this->notes,
        ]);

        $this->reset();
    }

    public function render()
    {
        return view('livewire.bird-form', [
            'entries' => Entry::all(),
        ]);
    }
}
