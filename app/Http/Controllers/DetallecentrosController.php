<?php

namespace App\Http\Controllers;

use App\Models\Detallecentros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DetallecentrosController extends Controller
{
    public function index()
    {
    return DB::select(' select detalle.id ,red.red,detalle.nombre,detalle.telefono,detalle.direccion,detalle.horario_atencion,detalle.mapa,red.id as idred from redcentros as red, detallecentros as detalle where detalle.id_redcentros=red.id 
    ');
       
    }
    public function store(Request $request)
    {
        $detallecentro = new Detallecentros();
        $detallecentro->nombre = $request->nombre;
        $detallecentro->direccion = $request->direccion;
        $detallecentro->telefono = $request->telefono;
        $detallecentro->horario_atencion = $request->horario_atencion;
        $detallecentro->mapa = $request->mapa;
        $detallecentro->id_redcentros = $request->id_redcentros;
        $detallecentro->save();
        return response()->json(["mensaje" => "creado satisfactoriamente"], 201);
    }
    public function update(Request $request, $id)
    {
        $detallecentro = Detallecentros::find($id);
        $detallecentro->nombre = $request->nombre;
        $detallecentro->direccion = $request->direccion;
        $detallecentro->telefono = $request->telefono;
        $detallecentro->horario_atencion = $request->horario_atencion;
        $detallecentro->mapa = $request->mapa;
        $detallecentro->id_redcentros = $request->id_redcentros;
        $detallecentro->save();
        return response()->json(["mensaje" => "Modificado satisfactoriamente"], 201);
    }
    public function destroy($id)
    {
        return Detallecentros::destroy($id);
    }
}
