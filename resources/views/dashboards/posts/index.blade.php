<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Crud</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <a href="{{route("post.create")}}" class="btn btn-primary my-5">Crear</a>
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
          @foreach ($posts as $post)
              <tr>
                <td>
                  {{$post->id}}
                </td>
                <td>
                  {{$post->title}}
                </td>
                <td>
                  {{$post->slug}}
                </td>
                <td>
                  {{$post->created_at->format('d-m-Y')}}
                </td>
                <td>
                  {{$post->updated_at->format('d-m-Y')}}
                </td>
                <td>
                  <a class="btn btn-primary">ver</a>
                  <a class="btn btn-warning">editar</a>
                  <a class="btn btn-danger">eliminar</a>
                </td>
              </tr>
          @endforeach
  
        </thead>
        {{$posts->links()}}
      </table>
    </div>
  </div>
</body>

</html>