<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programas;

class ProgramasController extends Controller
{
       // funcion retorno todos los valores
       public function index()
       {
           $programa=Programas::all();
           foreach($programa as $progra)
           { 
             if($progra->foto!=null)
             {
               $progra->foto=stream_get_contents($progra->foto);
   
             }
   
           }
           return $programa;
       }
       public function store(Request $request)
       {
      
           $nuevo = new Programas();
           $nuevo->nombre = $request->nombre;
           $nuevo->foto = $request->foto;
           $nuevo->contenido_a = $request->contenido_a;
           $nuevo->contenido_b = $request->contenido_b;
           $nuevo->titulo = $request->titulo;
           $nuevo->titulo_desc = $request->titulo_desc;
           $nuevo->compemento = $request->compemento;
           $nuevo->save();
           
           return response()->json(["mensaje"=>"Creado satisfactoriamente"], 201);
       }
   
   
       public function update(Request $request, $id)
       {
           $nuevo = Programas::find($id);
           $nuevo->nombre = $request->nombre;
           $nuevo->foto = $request->foto;
           $nuevo->contenido_a = $request->contenido_a;
           $nuevo->contenido_b = $request->contenido_b;
           $nuevo->titulo = $request->titulo;
           $nuevo->titulo_desc = $request->titulo_desc;
           $nuevo->compemento = $request->compemento;
           $nuevo->save();
           
           return response()->json(["mensaje"=>"Modificado satisfactoriamente"], 201);
       }
   
       public function destroy($id)
       {
           return Programas::destroy($id);
       }
   
}
