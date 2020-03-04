@extends('layouts.master')
@section('title','Pregunta nueva')
@section('content')
            <div class="container mt-5">
                <div class="row">
                    <div class="col">
                        <form method ="post" enctype="multipart/form-data" action="/addpregunta">
                            @csrf
                            <div class="form-group">
                                <label for="resumen">Resumen:</label>
                                <textarea class="form-control" id="resumen" name="titulo" rows="1"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descipción:</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                            </div>
                            <div class="form-row">
                                <div class="col">
                                    <label for="lenguaje">Lenguaje:</label>
                                    <select class="form-control" id="lenguaje" name="lenguaje">
                                        <option value="php">PHP</option>
                                        <option value="C">C#</option>
                                        <option value="JS">JS</option>
                                        <option value="html">HTML</option>
                                        <option value="css">CSS</option>
                                        <option value="sql">SQL</option>
                                        <option value="python">PYTHON</option>
                                    </select>
                                </div>
                                <div class="col mx-3">
                                    <label for="img">Inserte imagenes:</label>
                                    <input type="file" name="imagen" id="img">
                                </div>
                                <div class="col mx-3 text-center">
                                    <label ></label>
                                    <input class="btn btn-outline-success my-2" type="submit" name="guardar" value="Generar pregunta"/>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>
            </div>
@endsection
