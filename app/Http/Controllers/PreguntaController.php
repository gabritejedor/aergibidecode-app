<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pregunta;

class PreguntaController extends Controller
{
    public function index(){
        $likes = $this->preguntaTopLike();
        $views = $this->preguntaTopViews();
        return view('index',['likes'=>$likes,'views'=>$views]);
    }
    public function viewPregunta($id){
        $pregunta = pregunta::find($id);
        $pregunta->visitas +=1;
        $pregunta->save();
        return view("code",["pregunta"=>$pregunta]);
    }
    public function preguntaByLenguaje($lenguaje){
        $preguntas = pregunta::where("lenguaje",$lenguaje)->get();
        return view("busqueda",["preguntas"=>$preguntas]);
    }
    public function preguntaTopLike(){
        $preguntas = pregunta::orderBy('votos', 'DESC')->limit(3)->get();
        return $preguntas;

    }
    public function preguntaTopViews(){
        $preguntas = pregunta::orderBy('visitas', 'DESC')->limit(3)->get();
        return $preguntas;

    }
    public function preguntaByDesc(Request $request){
        $preguntas = pregunta::where("titulo","like","%".request("buscar")."%")->get();

        return view("busqueda",["preguntas"=>$preguntas]);
    }

    public function addLike($id){
        $pregunta = pregunta::find($id);
        $pregunta->votos +=1;
        $pregunta->save();
    }
    public function viewaddpregunta(){
        return view("newPregunta");

    }
    public function store(Request $request){
        $pregunta = new pregunta();
        $pregunta->titulo = request('titulo');
        $pregunta->descripcion= request('descripcion');
        $pregunta->fecha= date(now());
        $pregunta->imagen= "";
        $pregunta->estado = 0;
        $pregunta->votos = 0;
        $pregunta->visitas = 0;
        $pregunta->lenguaje= request('lenguaje');
        $pregunta->id_user= Auth()->id();
        $pregunta->save();

        if(request("imagen") != "")
        {
            request('imagen')->storeAs("public/imagen/pregunta/".$pregunta->id_pregunta,"pregunta.".request('imagen')->extension());
            $pregunta->imagen = "/storage/imagen/pregunta/".$pregunta->id_pregunta."/pregunta.".request('imagen')->extension();
            $pregunta->save();
        }
        return view("code",["pregunta"=>$pregunta]);


    }
    public function deletePregunta($id){

        $pregunta = pregunta::find($id);
        $pregunta->delete();
    }
}
