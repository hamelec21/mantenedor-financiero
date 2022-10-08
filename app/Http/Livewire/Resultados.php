<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Registro;

class Resultados extends Component
{

    public $egresos , $ingresos;

    public function mount()
    {

       


       


        
       
       

    }


    protected $listeners = ['render' => 'render'];

    public function render()
    {


        $this->ingresos = DB::table('registros')
        ->where('tipo_transaccion', 'ingreso')
        ->sum('valor');


        $this->egresos = DB::table('registros')
        ->where('tipo_transaccion', 'egreso')
        ->sum('valor');

        $this->saldo = $this->ingresos - $this->egresos;
        return view('livewire.resultados');
    }
}
