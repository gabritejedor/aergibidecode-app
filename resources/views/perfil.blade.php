@extends('layouts.master')
@section('title','perfil')
@section('content')
<div class="container my-5">
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-6">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Cambiar imagen de perfil</h5>
                </div>
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col-md-5">
                            <img width="150" height="150" src="{{Auth()->user()->imagen}}"></img>
                        </div>
                        <div class="col-md-4 text-center">
                            <form enctype="multipart/form-data" method="post" action="changeImg">
                                @csrf
                                <div class="form-group">
                                    <label for="img">Inserte nueva imagen de perfil</label>
                                    <input class="form-control" type="file" name="img" id="img">
                                </div>
                                <input type="submit" class="form-control btn btn-info btn-lg" name="enviar" value="Cambiar imagen"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card mt-4">
                <div class="card-header">
                    <h5>Cambiar contraseña</h5>
                </div>
                <div class="card-body">
                    <div class="row no-gutters">
                        <div class="col text-center">
                            <form method="post" action="changePasword">
                                @csrf
                                <div class="form-group">
                                    <label for="vieja">Inserte contraseña vieja</label>
                                    <input class="form-control" type="password" name="vieja" id="vieja">
                                </div>
                                <div class="form-group">
                                    <label for="nueva">Inserte contraseña nueva</label>
                                    <input class="form-control" type="password" name="nueva" id="nueva">
                                </div>
                                <div class="form-group">
                                    <label for="nueva2">Repita contraseña nueva</label>
                                    <input class="form-control" type="password" name="nueva2" id="nueva2">
                                </div>
                                <input type="submit" class="form-control btn btn-info btn-lg" name="enviar" value="Cambiar contraseña"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Preguntas abiertas:
                </div>
                <table class="card-table table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Lenguaje</th>
                        <th scope="col">Fecha</th>
                    </tr>
                    </thead>
                    <tbody>

                        @foreach($preguntas as $pregunta)
                            <tr>
                            <td>{{$pregunta->id_pregunta}}</td>
                            <td>{{$pregunta->titulo}}</td>
                            <td>{{$pregunta->lenguaje}}</td>
                            <td>{{$pregunta->fecha}}</td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="row mt-5">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    Preguntas respondidas:
                </div>
                <table class="card-table table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Titulo</th>
                        <th scope="col">Fecha</th>
                        <th scope="col">Id pregunta</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($respuestas as $respuesta)
                        <tr>
                        <td>{{$respuesta->id_respuesta}}</td>
                        <td>{{$respuesta->descripcion}}</td>
                        <td>{{$respuesta->fecha}}</td>
                        <td>{{$respuesta->id_pregunta}}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
