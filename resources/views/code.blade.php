@extends('layouts.master')
@section('title','code')
@section('content')
    <div class="container">
        <div class="card mt-4">
            <div class="card-header">
                <h5>Este es el titulo</h5>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <p class="card-text" rows='5' cols='100'>Esto es una descipcion</p>
                        <div class="jumbotron jumbotron-fluid">
                            Esto es el codigo
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row">
                            <div class="col text-center">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="fas fa-heart"></span> Likes
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center mt-2">
                                <button href="#" onclick="addLike(1)" class="btn btn-info btn-lg">
                                    <span class="fas fa-heart"></span>Likes
                                </button>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col text-center mt-2">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="far fa-eye"></span>  Views
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <h2>Respuestas:</h2>
        <div class="card mt-4">
            <div class="card-header">
                <h5>Este es el titulo</h5>
            </div>
            <div class="card-body">
                <div class="row no-gutters">
                    <div class="col-md-8">
                        <p class="card-text" rows='5' cols='100'>Esto es una descipcion</p>
                        <div class="jumbotron jumbotron-fluid">
                            Esto es el codigo
                        </div>
                    </div>
                    <div class="col-md-4 text-center">
                        <div class="row">
                            <div class="col text-center">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="fas fa-heart"></span> Likes
                                </a>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col text-center mt-2">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="fas fa-heart"></span>Likes
                                </a>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col text-center mt-2">
                                <a href="#" class="btn btn-info btn-lg">
                                    <span class="far fa-eye"></span>  Views
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="card mt-4">
            <div class="card-header">
                <h5>Tu respuesta:</h5>
            </div>
            <div class="card-body">
                <form method="post" action="">
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
                    <input type="submit" class="btn btn-info btn-lg" name="enviar" value="Enviar respuesta"/>
                </form>
            </div>
        </div>
    </div>
@endsection
