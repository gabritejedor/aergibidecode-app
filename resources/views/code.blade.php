@extends('layouts.master')
@section('title','code')
@section('content')
    <div class="container my-5">
        <div class="card mt-4">
            <div class="card-header">
                <h5>{{$pregunta->titulo}}</h5>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <p class="card-text" rows='5' cols='100'>{{$pregunta->descripcion}}</p>
                        <div >
                            <img width="500" height="300" src="{{$pregunta->imagen}}"/>
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row">
                            <div class="col text-center mt-2">
                                <button id="like" value="{{$pregunta->id_pregunta}}" class="btn btn-info btn-lg">
                                    <span class="fas fa-heart"></span><span id="spanLikes" value="{{$pregunta->votos}}">Likes:{{$pregunta->votos}}</span>
                                </button>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col text-center mt-2">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="far fa-eye"></span>Views:{{$pregunta->visitas}}
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <h2>Respuestas: {{count($pregunta->respuestas)}}</h2>

        @foreach($pregunta->respuestas as $resp)
            <div  class="card mt-4">
                <div id="card{{$resp->id_respuesta}}" class="card-header" @if($resp->destacado == 1) style="background-color:#CCFFE5;" @endif>
                    <div class="row">
                        <div class="col col-md-10">
                            <h5>03/03/2020</h5>
                        </div>
                        @if(Auth::check() && Auth::id() == $pregunta->id_user || Auth::check() && Auth::user()->rol == 1 )
                        <div class="col col-md-2 float-right"></i>
                            <a class="btn btn-info btn-lg" href="/delRespuesta/{{$pregunta->id_pregunta}}/{{$resp->id_respuesta}}"><i class="fas fa-trash"></i></a>
                            <button class="btn btn-info btn-lg"  value="{{$resp->id_respuesta}}" id="destacar" ><i class="fas fa-star"></i></button>
                        </div>
                        @endif
                    </div>
                </div>
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-md-9">
                            <p class="card-text" rows='5' cols='100'>{{$resp->descipcion}}</p>
                            <div class="jumbotron jumbotron-fluid">
                                {{$resp->codigo}}
                            </div>
                            <div>

                                    <img width="500" height="300" src="{{$resp->imagen}}"/>

                            </div>
                        </div>
                        <div class="col-md-3 text-center">
                            <div class="row">
                                <div class="col text-center">
                                    <img width="100" height="100" src="{{$resp->user->imagen}}" alt="Imagen usuario">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col text-center mt-2">
                                    <spam>{{$resp->user->name}}</spam>
                                </div>
                            </div>
                            <div class="row ">
                                <div class="col text-center mt-2">
                                    <button id="like" onclick="addLike(3)" class="btn btn-info"><i class="far fa-eye">Like:{{$resp->user->agradecimientos}}</i></button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        @endforeach
        @if(Auth::check())
        <div class="card mt-4">
            <div class="card-header">
                <h5>Tu respuesta:</h5>
            </div>
            <div class="card-body">
                <form enctype="multipart/form-data" method="post" action="/addRespuesta">
                    @csrf
                    <div class="form-group">
                        <textarea class="form-control" name="descripcion" placeholder="Aqui su explicacion"></textarea>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="codigo" placeholder="Aqui su codigo"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="img">Inserte imagenes</label>
                        <input type="file" name="img" id="img">
                    </div>
                    <input type="hidden" name="id" value="{{$pregunta->id_pregunta}}"/>
                    <input type="submit" class="btn btn-info btn-lg" name="enviar" value="Enviar respuesta"/>
                </form>
            </div>
        </div>
        @endif
    </div>


@endsection
