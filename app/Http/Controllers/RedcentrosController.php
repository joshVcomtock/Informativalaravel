<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redcentros;

class RedcentrosController extends Controller
{
    public function index()
    {
        return Redcentros::all();
    }
    public function store(Request $request)
    {
        $redcentro = new Redcentros();
        $redcentro->red = $request->red;
        // $redcentro->id_detallecentros = $request->id_detallecentros;
        $redcentro->save();

        return response()->json(["mensaje" => "creado satisfactoriamente"], 201);
    }
    public function update(Request $request, $id)
    {
        $redcentro = Redcentros::find($id);
        $redcentro->red = $request->red;
        $redcentro->save();
        return response()->json(["mensaje" => "Modificado satisfactoriamente"], 201);
    }
    public function destroy($id)
    {
        return Redcentros::destroy($id);
    }
}
