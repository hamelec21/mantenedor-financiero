<?php

namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\Registro;

class Crear extends Component
{

    public $open_crear=false;

    public $items, $tipo_transaccion,$valor,$fecha,$observacion,$referencia;
    
    protected $rules = [
        'items' => 'required',
        'tipo_transaccion' => 'required',
        'valor' => 'required',
        'fecha' => 'required',
        'observacion' => 'required',
        'referencia' => 'required',
        
    ];



    public function save()
    {
        $this-> validate();
       
        Registro::create([
            'items' => $this->items,
            'tipo_transaccion' => $this->tipo_transaccion,
            'valor' => $this->valor,
            'fecha' => $this->fecha,
            'observacion' =>$this->observacion,
            'referencia' =>$this->referencia,
        ]);
        $this->reset(['open_crear','items','tipo_transaccion','valor','fecha','observacion','referencia']);
        $this->emit('render');
        
        $this->emit('insert');

    }





    public function render()
    {
        return view('livewire.crear');
    }
}
