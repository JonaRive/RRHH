<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Estado Civil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
@extends('layouts.app')
@section('content')    
<div class="container text-center ">
  <div class="row">
    
  <div class="col mt-3 ">


      <div class="card mt-3">
        <div class="card-header text-center ">
            <h3 class="display-3"> Estado Civil</h3>
        </div>
        <div class="card-body">

        <table class="table">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripccion</th>
      
   
    </tr>
    </thead>
    <tbody>
    @foreach( $civilstates as $cs ) 
    <tr>
      <td>{{ $cs->id }}</td>
      <td>{{ $cs->description_sc }}</td>
     
    </tr>
    @endforeach
    </tbody>
    </table>

  </div>
  </div>
  </div>
      
  </div>
  </div>
@endsection    
</body>
</html>