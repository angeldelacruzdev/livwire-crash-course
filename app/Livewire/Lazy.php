<?php

namespace App\Livewire;

use Livewire\Component;

class Lazy extends Component
{

    public  function  mount()
    {
        sleep(3);
    }

    public function placeholder()
    {
        return <<<'HTML'
        <div>
            <img style="height: 45px" src="{{asset('original-f76a7593386d57a5a7db910f5555f91d.gif')}}" alt="">
        </div>
        HTML;
    }

    public function render()
    {
            return view('livewire.lazy');
    }
}
