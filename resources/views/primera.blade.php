@extends('layout')

@section('title', 'Mi titulo')

@section('content')
    <h1>seccion heredada</h1>

    @for($i=1; $i<=10; $i++)
        @if($i%2==0)
            {{$i}} Es par <br>
        @else
            {{$i}} Es inpar <br>
        @endif
    @endfor

    <ul>
    @foreach($elementos as $elemento)
        <li>{{$elemento}}</li>
    @endforeach
    </ul>

@stop 