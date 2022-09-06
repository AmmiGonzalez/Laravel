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
        @if(session('status'))
        <div class="alert alert-success">
            {{session('status')}}
        </div>
        @endif
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
                <label class="uno" for="">Título</label>
                <input type="text" name="slug">
                <br>
                @error('slug') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <label class="uno" for="">URL Corta</label>
                <input type="text" name="slug">
                <br>
                @error('slug') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <!-- El input es un textbox mientras que el textarea brinda un espacio para textos largos. -->
                <label class="dos" for="">Contenido</label>
                <textarea name="content"></textarea>
                <br>
                @error('content') 
                <small class="error">{{$message}}</small>
                @enderror
            </div>
            <div class="grupo">
                <label class="dos" for="">Descripción</label>
                <textarea name="description"></textarea>
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