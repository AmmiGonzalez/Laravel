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

    @csrf
    <div class="show-data-container container w-100">
      <div class="info w-25">
        <p>{{$post->title}}</p>
        <p>{{$post->slug}}</p>
        <p>{{$post->content}}</p>
        <p>{{$post->description}}</p>
      </div>
    </div>

    {{-- <div class="formContainer">
      <h2>CRUD</h3>
      <form action="{{route('post.store')}}" method="post">
        @csrf
        <div class="formItem">
          <label for="">Titulo</label>
          <input type="text" name="title" value="{{old('title')}}">
          @error('title')
          <small class="error">{{$message}}</small>
          @enderror
        </div>
        <div class="formItem">
          <label for="">URL corta</label>
          <input type="text" name="slug" value="{{old('slug')}}">
          @error('slug')
          <small class="error">{{$message}}</small>
          @enderror
        </div>
        <div class="formItem">
          <label for="">Contenido</label>
          <textarea name="content" rows="4">{{old('content')}}</textarea>
          @error('content')
          <small class="error">Debe ingresar al menos 5 caracteres en el contenido del post</small>
          @enderror
        </div>
        <div class="formItem">
          <label for="">Descripcion</label>
          <textarea name="description" rows="4">{{old('description')}}</textarea>
        </div>
        @include('Dashboard.Partials.sesion-flash-status')
        <div class="formItem">
          <button type="submit">Enviar</button>
        </div>
      </form>
    </div> --}}



  </div>
</body>

</html>