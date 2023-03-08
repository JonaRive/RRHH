<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('content')

<div class="container ">
  <div class="row">
  
    <div class="col mt-3">
    
    <a href=" {{ url('relations/create') }}" class="btn btn-success"> Registrar</a>

    <div class="card mt-3">
        <div class="card-header">
            <h3 class="display-3 text-center">Relacion</h3>
        </div>
        <div class="card-body">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Empleado</th>
      <th scope="col">Direccion</th>
      <th scope="col">Acciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach ( $relations as $relation )
    <tr>
      <td> {{ $relation->id }} </td>
      
      <td> {{ $relation->employee_id }}</td>
      <td> {{ $relation->address_id }} </td>
      <td> 
        
      <a href=" {{ url('/relations/'.$relation->id.'/edit') }} " class="btn btn-primary">Editar</a>
        
      <form action="{{ url('/relations/'.$relation->id ) }}" class="d-inline" method="post">
        @csrf
        {{ method_field('DELETE') }}
        <button type="submit" class="btn btn-danger">Borrar</button>t
      </form> 
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
{{ $relations->links() }}
    </div>  
    </div>
    </div>
    
</div>
</div>
@endsection      
</body>
</html>