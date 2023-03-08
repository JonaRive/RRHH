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

<div class="container text-center">
  <div class="row">
    <div class="col text-start">
      <div class="card">
        <div class="card-header">
          <h4 class="dislpay-3"> Editar Empleado</h4>
        </div>
        <div class="card-body ">

           @if ($errors->any())
           <div class="alert alert-danger">
           <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
            @endif
     
        <form action=" {{ url('/employee/'.$employee->id ) }}" method="POST">
        @csrf 
        {{ method_field('PATCH') }}
            <div class="mb-3">
                <label for="name_employee" class="form-label">Nombre</label>
                <input type="text" class="form-control" name="name_employee" id="name_employee"  placeholder="Escribe tu nombre">
            </div>

            <div class="mb-3">
                <label for="surname_employee" class="form-label">Apellido</label>
                <input type="text" class="form-control" name="surname_employee" id="surname_employee"  placeholder="Escribe tu apellido">
            </div>

            <div class="mb-3">
                <label for="dpi" class="form-label">Dpi</label>
                <input type="number" class="form-control" name="dpi" id="dpi"  placeholder="Escribe tu dpi">
            </div>

            <div class="mb-3">
                <label for="phone_number" class="form-label">Celular</label>
                <input type="number" class="form-control" name="phone_number" id="phone_number"  placeholder="Escribe tu celular">
            </div>

            <div class="mb-3">
                <label for="salary_employee" class="form-label">Salario</label>
                <input type="number" class="form-control" name="salary_employee" id="salary_employee"  placeholder="Escribe tu salario">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" class="form-control" name="email" id="email"  placeholder="Escribe tu email">
            </div>

            <div class="mb-3">
                <label for="date_birth" class="form-label">Fecha de nacimiento</label>
                <input type="date" class="form-control" name="date_birth" id="date_birth"  >
            </div>

            <div class="mb-3">
                <label for="cs_id" class="form-label">Estado Civil</label>
                <select class="form-select" name="cs_id" id="cs_id" >
                <option selected>Selecciona</option>
                @foreach( $civil_states as $civil_state )
                <option value=" {{ $civil_state->id }}"> {{ $civil_state->description_sc }}</option>
                @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="department_id" class="form-label">Departamento</label>
                <select class="form-select" name="department_id" id="department_id" >
                <option selected>Selecciona</option>
                @foreach( $departments as $department )
                <option value=" {{ $department->id }}"> {{ $department->name_department }}</option>
                @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href=" {{ url('/employee/')}} " class="btn btn-secondary ">Regresar</a>

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