@extends('layouts.mi-tema')
@section('contenido')

<h1
    Listado de materias
</h1>

<a href="{{ action('MateriaController@create') }}">Nueva Materia </a>

<table class='table'>
  <thead>
    <tr>
      <th>Materia</th>
      <th>NRC</th>
      <th>horario</th>
      <th>ultima actualizacion</th>
    </tr>
  </thead>
  <body>
    @foreach($materias as $materia)
    <tr>
       <td>{{ $materia->materia }}</td>
       <td>{{ $materia->nrc }}</td>
       <td>{{ $materia->hora_inicio }}</td>
       <td>{{ $materia->updated_at }}</td>
    </tr>
    @endforeach
  </body>
</table>

@endsection