<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Bookmark extends Component
{


    public string $name = '';
    public string $url = '';


    public function save()
    {
        Auth::user()->bookmarks()->create([
            'name' => $this->name,
            'url' => $this->url
        ]);
        $this->reset();
    }

    public function delete($id)
    {

        $bookmark = \App\Models\Bookmark::find($id);

        $this->authorize('delete', $bookmark);

        Auth::user()->bookmarks()->findOrFail($id)->delete();
    }

    public function mount()
    {
        Auth::loginUsingId(1);
    }

    public function render()
    {
        return view('livewire.bookmark');
    }
}
