<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Categories</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <a href="{{route("categories.create")}}" class="btn btn-primary my-5">Crear</a>
    <div class="postsIndex">
      <table class="table">
        <thead>
          <tbody>
            <tr>
              <td>ID</td>
              <td>Titulo</td>
              <td>Ruta</td>
              <td>Creacion</td>
              <td>Actualizado</td>
              <td>Acciones</td>
            </tr>
          </tbody>
          @foreach ($cats as $cat)
              <tr>
                <td>
                  {{$cat->id}}
                </td>
                <td>
                  {{$cat->title}}
                </td>
                <td>
                  {{$cat->slug}}
                </td>
                <td>
                  {{$cat->created_at->format('d-m-Y')}}
                </td>
                <td>
                  {{$cat->updated_at->format('d-m-Y')}}
                </td>
                <td>
                  <a class="btn btn-primary">ver</a>
                  <a class="btn btn-warning">editar</a>
                  <a class="btn btn-danger">eliminar</a>
                </td>
              </tr>
          @endforeach
  
        </thead>
        {{$cats->links()}}
      </table>
    </div>
  </div>
</body>

</html>