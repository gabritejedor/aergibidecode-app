<?php

namespace App\Http\Controllers;

use App\pregunta;
use Illuminate\Http\Request;
use App\respuesta;
use Illuminate\Support\Facades\Auth;

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
        $respuesta->codigo = request('codigo');
        $respuesta->imagen = "";
        $respuesta->destacado = 0;
        $respuesta->fecha = date(now());
        $respuesta->id_user = Auth::id();
        $respuesta->id_pregunta = request('id');
        $respuesta->save();
        if(request('img') != "")
        {
            request('img')->storeAs("public/imagen/pregunta/".request('id')."/",$respuesta->id_respuesta.".".request('img')->extension());
            $respuesta->imagen = "/storage/imagen/pregunta/".request('id')."/".$respuesta->id_respuesta.".".request('img')->extension();
            $respuesta->save();
        }

        return redirect()->route("code",[request('id')]);


    }
    function delRespuesta($idpregunta,$idrespuesta)
    {
        $respuesta = Respuesta::find($idrespuesta);
        $respuesta->delete();
        return redirect()->route("code",$idpregunta);

    }
    function updateRespuesta(Request $request)
    {

        $respuesta = Respuesta::find(request('id'));
        $respuesta->descripcion = request('descripcion');
        $respuesta->codigo = request('codigo');
        $respuesta->imagen = request('img');
        $respuesta->destacado = 0;
        $respuesta->fecha = date(now());
        $respuesta->id_user = request('id_user');
        $respuesta->id_pregunta = request('id_pregunta');
        $respuesta->save();
    }
    function destacar($id)
    {
        $respuesta = Respuesta::find($id);
        $respuesta->destacado = 1;
        $respuesta->save();

    }
}
