<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Registro;

class Editar extends Component
{

    public $open_editar =false;

    public $registro;
    public $items, $tipo_transaccion,$valor,$fecha,$observacion,$referencia;
    
    protected $rules =[


        'registro.items'=>'required',
        'registro.tipo_transaccion'=>'required',
        'registro.valor'=>'required',
        'registro.fecha'=>'required',
        'registro.observacion'=>'required',
        'registro.referencia'=>'required'
       
    ];



    public function mount( Registro $registro)
    {
        $this->registro = $registro;
        
    }

    public function save()

    {
        
        $this->registro->save();
        $this->reset(['open_editar','items', 'tipo_transaccion','valor','fecha','observacion','referencia']);
        $this->emit('render');
        $this->emit('editar'); //mensaje
    }

    

    public function render()
    {
        return view('livewire.editar');
    }
}
