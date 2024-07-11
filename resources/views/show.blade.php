@extends('layout')

@section('titulo', 'Listado | ' .$alumno->nombre)


@section('content')
    <table class="table table-striped">
        <tr>
            <th>Alumno</th>
            <th>{{$alumno->nombre}}</th>
        </tr>
        <tr>
            <td>Curso</td>
            <td>{{$alumno->curso}}</td>
        </tr>
        <tr>
            <td >Nota 1</td>
            <td>{{$alumno->nota1}}</td>
        </tr>
        <tr>
            <td>Nota 2</td>
            <td>{{$alumno->nota2}}</td>
        </tr>
        <tr>
            <td>Promedio</td>
            <td>{{$alumno->promedio}}</td>
        </tr>
        <tr>
            <td>Condición</td>
            <td>{{$alumno->condicion}}</td>
        </tr>
        <tr>
            <td>Fecha de registro</td>
            <td>{{$alumno->fechareg}}</td>
        </tr>
        <tr>
            <td>{{$alumno->created_at->diffForHumans()}}</td>
        </tr>

    </table>
@endsection