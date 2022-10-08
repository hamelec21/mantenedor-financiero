<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;

use App\Models\Registro;

class Show extends Component
{




    protected $listeners = ['render' => 'render'];

   
    public function destroy($id)
    {
        Registro::destroy($id);
    }


    
    public function render()
    {

        $registros = Registro::orderBy('fecha','Desc')
        ->paginate(5);

       


        return view('livewire.show',compact('registros'));
    }
}
