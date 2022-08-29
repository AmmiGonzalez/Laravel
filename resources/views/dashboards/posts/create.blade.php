<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('/formulario.css')}}" rel="stylesheet">
    <title>Mi proyecto</title>
</head>
<body>
    <form action="{{route('post.store')}}" method = "post" id="form">
   <!--  @if ($errors->any())
      @foreach ($errors->all() as $error)
      <div class="alert alert-danger">
        {{$error}}
      </div>
      @endforeach
        @endif     -->
        @csrf
        <div class="form">
            <h1>F O R M U L A R I O</h1>
            <div class="grupo">
                <input type="text" name="title">
                <label class="uno" for="">Título</label> <br>
                @error('title') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <input type="text" name="slug">
                <label class="uno" for="">URL Corta</label>
                <br>
                @error('slug') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <!-- El input es un textbox mientras que el textarea brinda un espacio para textos largos. -->
                <textarea name="content"></textarea>
                <label class="dos" for="">Contenido</label>
                <br>
                @error('content') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <textarea name="description"></textarea>
                <label class="dos" for="">Descripción</label>
                <br>
                @error('description') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <button type = "submit">Enviar</button>
        </div>
    </form>
</body>
</html>