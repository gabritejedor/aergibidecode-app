@extends('layouts.master')
@section('title','index')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col">
                <h2><span class="badge badge-light mb-3">Top mas vistos</span></h2>
            </div>
        </div>
    @foreach($views as $view)
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <ul class="list-inline list-inline">
                            <li class="list-inline-item border-left">{{$view->user->name}}</li>
                            <li class="list-inline-item border-left">{{$view->fecha}}</li>
                            <li class="list-inline-item border-left"><span class="badge badge-success">Likes:{{$view->votos}}</span></li>
                            <li class="list-inline-item border-left"><span class="badge badge-danger">Visitas:{{$view->visitas}}</span></li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <a href="/code/{{$view->id_pregunta}}"><p>{{$view->titulo}}</p></a>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
        @endforeach


    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><span class="badge badge-light mb-3">Top likes</span></h2>
            </div>
        </div>
        @foreach($likes as $like)
            <div class="row">
                <div class="col">
                    <div class="card mb-3">
                        <div class="card-header">
                            <ul class="list-inline list-inline">
                                <li class="list-inline-item border-left">{{$like->user->name}}</li>
                                <li class="list-inline-item border-left">{{$like->fecha}}</li>
                                <li class="list-inline-item border-left"><span class="badge badge-success">Likes:{{$like->votos}}</span></li>
                                <li class="list-inline-item border-left"><span class="badge badge-danger">Visitas:{{$like->visitas}}</span></li>

                            </ul>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <a href=""><p>{{$like->titulo}}</p></a>
                            </blockquote>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>

@endsection
