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

<div class="container text-center">
  <div class="row">
    <div class="col text-start">
     <div class="card">
        <div class="card-header">
        <h4> Crear Relacion</h4>
        </div>
        <div class="card-body">

           @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif

        <form action=" {{ url('/relations/')}}" method="POST">
        @csrf    
 
       

        <div class="mb-3">
            <label for="employee_id" class="form-label">Empleado</label>
            <select class="form-select" name="employee_id" id="employee_id" >
            <option selected>Selecciona</option>
            @foreach( $employee as $employe )
            <option value=" {{ $employe->id }}"> {{ $employe->name_employee }}</option>
            @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="address_id" class="form-label">Direccion</label>
            <select class="form-select" name="address_id" id="address_id" >
            <option selected>Selecciona</option>
            @foreach( $address as $adres )
            <option value=" {{ $adres->id }}"> {{ $adres->city }}</option>
            @endforeach
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href=" {{ url('/relations/')}}" class="btn btn-secondary">Regresar</a>

        </form>
        </div>
        
     </div>
    </div>
    <div class="col">
    </div>
   
  </div>
</div>
    
</body>
</html>