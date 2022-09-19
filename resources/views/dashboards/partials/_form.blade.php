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
        <input type="text" name="title" value="{{old('title', $posts->title)}}">
        <br>
        @error('title') 
        <small class="error">{{$message}}</small>
        @enderror
    </div>
    <br>
    <div class="grupo">
        <label class="uno" for="">URL Corta</label>
        <input type="text" name="slug" value="{{old('slug', $posts->slug)}}">
        <br>
        @error('slug') 
        <small class="error">{{$message}}</small>
        @enderror
    </div>
    <br>
    <div class="grupo">
        <!-- El input es un textbox mientras que el textarea brinda un espacio para textos largos. -->
        <label class="dos" for="">Contenido</label>
        <textarea name="content" rows="4">{{old('content', $posts->content)}}</textarea>
        <br>
        @error('content') 
        <small class="error">{{$message}}</small>
        @enderror
    </div>
    <br>
    <div class="grupo">
        <label class="dos" for="">Descripción</label>
        <textarea name="description" rows="4">{{old('description', $posts->description)}}</textarea>
        <br>
        @error('description') 
        <small class="error">{{$message}}</small>
        @enderror
    </div>
    <br>
    <button type = "submit">Enviar</button>
</div>