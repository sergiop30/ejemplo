@extends('layouts.mi-tema')
@section('contenido')

<h1
    Listado de Alumnos
</h1>

<a href="{{ action('AlumnoController@create') }}">Nuevo Alumno </a>

<table class='table'>
  <thead>
    <tr>
      <th>ID</th>
      <th>Alumno</th>
      <th>Codigo</th>
      <th>Carrera</th>
      <th>Ultima actualizacion</th>
    </tr>
  </thead>
  <body>
    @foreach($alumnos as $alumno)
    <tr>
       <td>{{ $alumno->nombre }}</td>
       <td>{{ $alumno->codigo }}</td>
       <td>{{ $alumno->carrera }}</td>
       <td>{{ $alumno->updated_at }}</td>
    </tr>
    @endforeach
  </body>
</table>

@endsection