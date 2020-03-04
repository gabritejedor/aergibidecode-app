@extends('layouts.master')
@section('title','code')
@section('content')
    <div class="container my-5">
        @foreach($preguntas as $pregunta)
            <div class="row">
                    <div class="col">
                        <div class="card mb-3">
                            <div class="card-header">
                                <ul class="list-inline list-inline">
                                    <li class="list-inline-item border-left">{{$pregunta->user->name}}</li>
                                    <li class="list-inline-item border-left">{{$pregunta->fecha}}</li>
                                    <li class="list-inline-item border-left"><span class="badge badge-success">Likes:{{$pregunta->votos}}</span></li>
                                    <li class="list-inline-item border-left"><span class="badge badge-danger">Visitas:{{$pregunta->visitas}}</span></li>

                                </ul>
                            </div>
                            <div class="card-body">
                                <blockquote class="blockquote mb-0">
                                    <a href="/code/{{$pregunta->id_pregunta}}"><p>{{$pregunta->titulo}}</p></a>
                                </blockquote>
                            </div>
                        </div>
                    </div>
                </div>
           @endforeach
    </div>
@endsection
