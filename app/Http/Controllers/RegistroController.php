<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Registro;

class RegistroController extends Controller
{
    
    public function index()
    {
        

        $registro = Registro::all();
        
        return \response($registro);
    }

    public function test(Request $request) {
        $tipo = $request['tipo'];
        $mes = $request['mes'];
        $datos = Registro::whereMonth('fecha', $mes )
                        ->where('tipo_transaccion', $tipo)
                        ->get();
        return $datos;
    }

    
        
    



        













    public function store(Request $request)
    {
      $request->validate([
          'items'=>'required',
          'tipo_transaccion'=>'required|max:255',
          'valor'=>'required',
          'fecha'=>'required'
         
      ]);
      $registro =Registro::create($request->all());
      return \response($registro);
    }


    public function show($id)
    {
        $registro =Registro::findOrFail($id);
        return \response($registro);
    }


    public function update(Request $request, $id)
    {
        $registro =Registro::findOrFail($id)
             ->update($request->all());
        return \response("Registro Actualizado");
    }


    public function destroy($id)
    {
       Registro::destroy($id);
        return \response("EL Registro Fue eliminado con el id:${id}");
    }




}
