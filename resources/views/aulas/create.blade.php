@extends('layout')

@if ($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{route('aulas.store')}}" method="post">
    {{@csrf_field()}}
    <input type="text" name="nombre" id="nombre">
    <input type="text" name="capacidad" id="capacidad">

    <select name="id_edificio" id="id_edificio">
        @foreach($edificios as $edificio)
            <option value="{{$edificio->id}}">{{$edificio->nombre}}</option>
        @endforeach
    </select>

    <input type="submit" value="Guardar">

</form> 