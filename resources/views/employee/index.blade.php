<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleado</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('content')    
<div class="container ">
  <div class="row">
    
  <div class="col mt-3 ">

  <a href=" {{ url('employee/create') }}" class="btn btn-success ">Registrar</a>

      <div class="card mt-3">
        <div class="card-header text-center ">
            <h3 class="display-3"> Empleados</h3>
        </div>
        <div class="card-body">

        <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Dpi</th>
      <th scope="col">Celular</th>
      <th scope="col">Salario</th>
      <th scope="col">Correo</th>
      <th scope="col">Fecha de Nacimiento</th>
      <th scope="col">Estado Civil</th>
      <th scope="col">Departamento</th>
      <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach( $employee as $employe )  
    <tr>
      <td>{{ $employe->id }}</td>
      <td>{{ $employe->name_employee }}</td>
      <td>{{ $employe->surname_employee }}</td>
      <td>{{ $employe->dpi }} </td>
      <td>{{ $employe->phone_number }} </td>
      <td>{{ $employe->salary_employee }} </td>
      <td>{{ $employe->email }}</td>
      <td>{{ $employe->date_birth }} </td>
      <td>{{ $employe->cs_id}}</td>
      <td>{{ $employe->department_id }} </td>
      <td> 

      <a href=" {{ url('/employee/'.$employe->id.'/edit') }}" class="btn btn-primary">Editar</a>

      <form action=" {{ url( '/employee/'.$employe->id ) }}" class="d-inline" method="post">
      @csrf
      {{ method_field('DELETE') }}  
      <button type="submit" class="btn btn-danger">Borrar</button>
      </form>
      
      </td>
    </tr>
    @endforeach
    </tbody>
    </table>
    {{ $employee->links() }}
  </div>
  </div>
  </div>
      
  </div>
  </div>
@endsection    
</body>
</html>