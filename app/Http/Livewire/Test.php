<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registro;

class Test extends Component
{
    public function render()
    {
        $test = Registro::all();
        return view('livewire.test',compact('test'));
    }
}
