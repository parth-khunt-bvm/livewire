<?php

namespace App\Http\Livewire;

use Livewire\Component;

class IncrementDecrement extends Component
{
    public $counter = 0;
    public  function increment(){
        $this->counter++;
    }

    public  function decrement(){
        $this->counter--;
    }

    public function render()
    {
        // $data['counter'] = $this->counter;
        return view('livewire.increment-decrement');
    }
}
