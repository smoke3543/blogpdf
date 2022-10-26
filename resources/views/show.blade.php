<!--<html>
    <head>
        <title>

         </title>
    </head>
    <body>
       <p>Hola mundo desde mi primer vista Ricardo Aldair Puente Reyes</p>
    </body>
</html> -->
<!-- Añadido el 27-09-22 -->
@extends('layouts.app')
@section('title','Trainers')
@section('content')
            <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" src="../images/{{$trainer->Avatar}}" alt="Imagen del Card...">
            <h5 class="text-center">{{$trainer->name}}</h5>
            <div class="text-center">
                <p>Texto de ejemplo.</p>
                <a href="/delete/{{$trainer->id}}" class="btn btn-primary">
                    Delete... </a>
                <a href="/trainers/{{$trainer->id}}" class="btn btn-secondary">
                Mostrar... </a>
                <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">
                Editar... </a>
            </div>
@endsection