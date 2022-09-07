<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @include("Dashboard.Partials.bootstrap-import")
  <link rel="stylesheet" href="{{ asset('styles.css') }}">
  <title>Crear categoria</title>
</head>

<body>
  @include('Dashboard.Partials.nav-header-main')
  <div class="bodyContainer">
    <div class="formContainer">
      <h2>Categoria nueva</h3>
      
      <form action="{{route('categories.store')}}" method="post">
        @csrf
        <div class="formItem">
          <label for="">Titulo</label>
          <input type="text" name="title">
          @error('title')
            <small class="error">{{$message}}</small>
          @enderror
        </div>
        <div class="formItem">
          <label for="">URL corta</label>
          <input type="text" name="slug">
          @error('slug')
            <small class="error">{{$message}}</small>
          @enderror
        </div>
  
        @if (session('status'))
          <small class="success">{{session('status')}}</small>
        @endif
  
        <div class="formItem">
          <button type="submit">Enviar</button>
        </div>
      </form>
      
    </div>
  </div>

</body>

</html>