<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenidos</h1>
<form action="{{route('post.store')}}" method = "post">
        @csrf

        <label for="">Título</label>
        <input type="text" name="title">

        <label for="">URL Corta</label>
        <input type="text" name="slug">

        <label for="">Contenido</label>
        <!-- El input es un textbox mientras que el textarea brinda un espacio para textos largos. -->
        <textarea name="content"></textarea>

        <label for="">Descripción</label>
        <textarea name="description"></textarea>

    <button type = "submit">Enviar</button>
    </form>
</body>
</html>