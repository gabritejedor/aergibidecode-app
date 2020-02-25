<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PreguntaController extends Controller
{
    public function preguntaByLenguaje($lenguaje){
        $preguntas = Pregunta::where("lenguaje",$lenguaje)->get();
        return $preguntas;
    }
    public function preguntaTopLike(){
        $preguntas = Pregunta::all()->orderBy('likes', 'DESC')->take(3);
		return $preguntas;

	}
    public function preguntaTopViews(){
        $preguntas = Pregunta::all()->orderBy('views', 'DESC')->take(3);
		return $preguntas;

	}
    public function preguntaByDesc($desc){
        $preguntas = Pregunta::where("descripcion","like","%".$desc."%")->get();
        return $preguntas;
    }
    public function addView($id){
        $pregunta = Pregunta::find($id);
        $pregunta->view +=1;
        $pregunta->save();


    }
    public function addLike($id){
        $pregunta = Pregunta::find($id);
        $pregunta->like +=1;
        $pregunta->save();
    }
    public function store(Request $request){
        $pregunta = new pregunta();
        $pregunta->titulo = request('titulo');
        $pregunta->descripcion= request('descripcion');
        $pregunta->fecha= date(now);
        $pregunta->imagen= request('imagen');
        $pregunta->estado = 0;
		$pregunta->votos = 0;
		$pregunta->visitas = 0;
		$pregunta->lenguaje= request('lenguaje');
		$pregunta->id_user= request('id_user');
		$pregunta->save();

}
    public function deletePregunta($id){

        $pregunta = Pregunta::find($id);
        $pregunta->delete();
    }
}
