<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Capsulas;

class CapsulasController extends Controller
{
    public function index()
    {
        $capsula=Capsulas::all();
       foreach($capsula as $cap)
        { 
          if($cap->foto!=null)
          {
            $cap->foto=stream_get_contents($cap->foto);
          }
        }

return $capsula;
    }

    public function store(Request $request)
    {
        $capsulas = new Capsulas();
        $capsulas->titulo = $request->titulo;
        $capsulas->foto = $request->foto;
        $capsulas->descripcion = $request->descripcion;
        $capsulas->mas_detalles = $request->mas_detalles;

        $capsulas->save();
        
        return response()->json(["mensaje"=>"Creado satisfactoriamente"], 201);
    }
    public function update(Request $request, $id)
    {
        $capsulas = Capsulas::find($id);
        $capsulas->titulo = $request->titulo;
        $capsulas->foto = $request->foto;
        $capsulas->descripcion = $request->descripcion;
        $capsulas->mas_detalles = $request->mas_detalles;

        $capsulas->save();
        
        return response()->json(["mensaje"=>"Modificado satisfactoriamente"], 201);
    }

    public function destroy($id)
    {
        return Capsulas::destroy($id);
    }



}
