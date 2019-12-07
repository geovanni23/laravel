@extends('layout')

@section('content')

<table border="1">
    <th>Id</th>
    <th>Nombre</th>
    <th>Capacidad</th>
    <th>Acciones</th>


@foreach($aulas as $aula)
    <tr>
        <td>{{$aula->id}}</td>
        <td>{{$aula->nombre}}</td>
        <td>{{$aula->capacidad}}</td>
        <td><a href="{{route('aulas.edit', $aula)}}">Editar</a>
        
        <form action="{{route('aulas.destroy', $aula)}}" method="post">
            {{@csrf_field()}}
            {{@method_field('DELETE')}}
            <input type="submit" value="Eliminar">
        </form>   
        </td>
    </tr>
@endforeach
</table>

<br>

<a href="{{route('aulas.create')}}"><input type="submit" value="Agregar aula"></a>

@stop