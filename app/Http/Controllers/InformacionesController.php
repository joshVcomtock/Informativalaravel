<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;

class InformacionesController extends Controller
{
  public function index()
  {
    $informacion = Informaciones::all();
    foreach ($informacion as $info) {
      if ($info->foto != null) {
        $info->foto = stream_get_contents($info->foto);
      }
       if ($info->foto_v != null) {
        $info->foto_v = stream_get_contents($info->foto_v);
      } 
       if ($info->foto_m != null) {
        $info->foto_m = stream_get_contents($info->foto_m);
      }
    }

    return $informacion;
  }

  public function store(Request $request)
  {
    $info = new Informaciones();
    $info->nombre = $request->nombre;
    $info->foto = $request->foto;
    $info->descripcion = $request->descripcion;
    $info->mision = $request->mision;
    $info->foto_m = $request->foto_m;
    $info->vision = $request->vision;
    $info->foto_v = $request->foto_v;
    $info->save();
    return response()->json(["mensaje" => "Creado satisfactoriamente"], 201);
  }
  public function update(Request $request, $id)
  {
    $info = Informaciones::find($id);
    $info->nombre = $request->nombre;
    $info->foto = $request->foto;
    $info->descripcion = $request->descripcion;
    $info->mision = $request->mision;
    $info->foto_m = $request->foto_m;
    $info->vision = $request->vision;
    $info->foto_v = $request->foto_v;

    $info->save();

    return response()->json(["mensaje" => "Creado satisfactoriamente"], 201);
  }

  public function destroy($id)
  {
    return Informaciones::destroy($id);
  }
}
