<?php

namespace App\Http\Controllers;

use App\pregunta;
use App\respuesta;
use App\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

    public function showPerfil(){

        $preguntas = pregunta::where('id_user',Auth::id())->get();
        $respuestas = respuesta::where('id_user',Auth::id())->get();
        return view("perfil",['preguntas'=>$preguntas,'respuestas'=>$respuestas]);
    }
    public function changeImg(Request $request){
        $user = users::find(Auth::id());

       request('img')->storeAs("public/imagen/".Auth::id(),"user.".request('img')->extension());
        $user->imagen = "/storage/imagen/".Auth::id()."/user.".request('img')->extension();
        $user->save();
        return redirect()->route('perfil');
    }
    public function changePasword(Request $request){
        if (!(Hash::check(request('vieja'), Auth::user()->password))) {
            return redirect()->back()->with("error","Tu contraseña actual no coincide con la introducida.");
        }
        if(request("nueva2") != request("nueva"))
            return redirect()->back()->with("error","Las contraseñas no coinciden.");

        $user = Auth::user();
        $user->password = bcrypt($request->get('nueva'));
        $user->save();

        return redirect()->route("perfil");

    }
}
