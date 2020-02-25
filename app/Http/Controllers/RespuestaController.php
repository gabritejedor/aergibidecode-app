<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    function allRespuestas($id)
    {
        $respuestas = Respuesta::where("id_pregunta",$id)->all();
        return $respuestas;
    }
    function addRespuesta(Request $request)
    {
        $respuesta = new Respuesta();
        $respuesta->descripcion = request('descripcion');
        $respuesta->descripcion = request('imagen');
        $respuesta->destacado = 0;
        $respuesta->fecha = date(now);
        $respuesta->descripcion = request('id_user');
        $respuesta->descripcion = request('id_pregunta');
        $respuesta->save();


    }
    function deleteRespuesta($id)
    {
        $respuesta = Respuesta::find($id);
        $respuesta->delete();

    }
    function updateRespuesta(Request $request)
    {

        $respuesta = Respuesta::find(request('id'));
        $respuesta->descripcion = request('descripcion');
        $respuesta->descripcion = request('imagen');
        $respuesta->destacado = 0;
        $respuesta->fecha = date(now);
        $respuesta->descripcion = request('id_user');
        $respuesta->descripcion = request('id_pregunta');
        $respuesta->save();
    }
    function destacar($id)
    {
        $respuesta = Respuesta::find($id);
        $respuesta->destacado = 1;
        $respuesta->save();

    }
}
