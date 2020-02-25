@extends('layouts.master')
@section('title','index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><span class="badge badge-light mb-3">Top mas vistos</span></h2>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <ul class="list-inline list-inline">
                            <li class="list-inline-item border-left">Gabri</li>
                            <li class="list-inline-item border-left">18/02/2020</li>
                            <li class="list-inline-item border-left"><span class="badge badge-success">Likes:15</span></li>
                            <li class="list-inline-item border-left"><span class="badge badge-danger">Views:200</span></li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>


    </div>
    <div class="container">
        <div class="row">
            <div class="col">
                <h2><span class="badge badge-light mb-3">Top likes</span></h2>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="card mb-3">
                    <div class="card-header">
                        <ul class="list-inline list-inline">
                            <li class="list-inline-item border-left">Gabri</li>
                            <li class="list-inline-item border-left">18/02/2020</li>
                            <li class="list-inline-item border-left"><span class="badge badge-success">Likes:15</span></li>
                            <li class="list-inline-item border-left"><span class="badge badge-danger">Views:200</span></li>

                        </ul>
                    </div>
                    <div class="card-body">
                        <blockquote class="blockquote mb-0">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
