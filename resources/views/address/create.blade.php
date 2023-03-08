<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direccion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<div class="container text-center">
  <div class="row">
    <div class="col text-start">
      <div class="card">
        <div class="card-header">
          <h4> Crear Direccion</h4>
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
     
        <form action=" {{ url('/address/') }}" method="POST">
        @csrf 
            <div class="mb-3">
                <label for="country" class="form-label">Pais</label>
                <input type="text" class="form-control" name="country" id="country"  placeholder="Escribe tu Pais">
            </div>

            <div class="mb-3">
                <label for="city" class="form-label">Ciudad</label>
                <input type="text" class="form-control" name="city" id="city"  placeholder="Escribe tu ciudad">
            </div>

            <div class="mb-3">
                <label for="state" class="form-label">Estado</label>
                <input type="text" class="form-control" name="state" id="state"  placeholder="Escribe tu estado">
            </div>


            <button type="submit" class="btn btn-primary">Agregar</button>
            <a href=" {{ url('/address/')}} " class="btn btn-secondary ">Regresar</a>

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