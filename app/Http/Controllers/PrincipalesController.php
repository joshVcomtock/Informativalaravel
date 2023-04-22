<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Principales;

class PrincipalesController extends Controller
{
    // funcion retorno todos los valores
    public function index()
    {
        $principales = Principales::all();
        foreach ($principales as $pri) {
            if ($pri->foto != null) {
                $pri->foto = stream_get_contents($pri->foto);
            }
        }
        return $principales;
    }
    public function store(Request $request)
    {
        $nuevo = new Principales();
        $nuevo->titulo = $request->titulo;
        $nuevo->foto = $request->foto;
        $nuevo->descripcion = $request->descripcion;
        $nuevo->save();

        return response()->json(["mensaje" => "Creado satisfactoriamente"], 201);
    }


    public function update(Request $request, $id)
    {
        $nuevo = Principales::find($id);
        $nuevo->titulo = $request->titulo;
        $nuevo->descripcion = $request->descripcion;
        $nuevo->foto = $request->foto;
        $nuevo->save();

        return response()->json(["mensaje" => "Modificado satisfactoriamente"], 201);
    }

    public function destroy($id)
    {
        return Principales::destroy($id);
    }
}
