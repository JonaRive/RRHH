<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proceso</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('content')


<div class="container ">
  <div class="row">
  
    <div class="col mt-3">
    
    <a href=" {{ url('process/create') }}" class="btn btn-success"> Registrar</a>

    <div class="card mt-3">
        <div class="card-header">
            <h3 class="display-3 text-center">Proceso</h3>
        </div>
        <div class="card-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Fecha</th>
      <th scope="col">Comentario</th>
      <th scope="col">Empleado</th>
      <th scope="col">Status</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach ( $process as $proces )
    <tr>
      <td> {{ $proces->id }} </td>
      <td> {{ $proces->deadline }}</td>
      <td> {{ $proces->comments }}</td>
      <td> {{ $proces->employee_id }}</td>
      <td> {{ $proces->status_id }} </td>
      <td> 
        
      <a href=" {{ url('/process/'.$proces->id.'/edit') }} " class="btn btn-primary">Editar</a>
        
      <form action="{{ url('/process/'.$proces->id ) }}" class="d-inline" method="post">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">Borrar</button>
      </form> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $process->links() }}
    </div>  
    </div>
    </div>
    
</div>
</div>
@endsection    
</body>
</html>