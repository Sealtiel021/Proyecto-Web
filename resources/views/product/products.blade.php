<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <div>

    <h2>{{$titulo}}</h2>

    <table class="egt">
      @foreach ($productos as $product)
      <tr>
        <p>This is user {{ $product->name }}</p>
        <p>This is user {{ $product->provider->nameProvider }}</p>
      </tr>
      @endforeach


<div class="container">
    <div class="row">
      <div class="col-md-6 mx-auto shadow-lg p-4 mb-4 bg-white">

        <form action="/products" method="POST">

            @csrf

              <input type="text" class="form-control" placeholder="Introduce X" value="agregar" name="agregar" />

              <input type="submit" class="btn btn-primary" value="Agregar" />


  </form>
      </div>

    </div>
<div class="row">
  <div class="col-md-6 mx-auto">
  <table id="tableNews" class="table table-hover">
  <thead class="thead-dark">
    <tr >
      <th scope="col">#</th>
      <th scope="col">Nombre</th>
      <th scope="col">Eliminar</th>
      <th scope="col">Modificar</th>
    </tr>
  </thead>
  <tbody>
  @forelse ($all as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->name}}</td>
      <td>
            <button type="button" class="btn btn-danger elimina" value="{{$item->id}}" >Eliminar</button>


      </td>
      <td>  <button type="button" class="btn btn-primary modalJq" value="{{$item->id}}" data-toggle="modal" data-target="#exampleModal">
             Modificar
      </button></td>
    </tr>
  @empty

  @endforelse



  </tbody>
</table>

  </div>
</div>
  </div>



  </table>
  </div>
</body>
</html>
