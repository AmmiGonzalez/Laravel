<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("dashboards.partials.bootstrap-import")
    <link href="{{asset('/formulario.css')}}" rel="stylesheet">
    <title>Mi proyecto</title>
</head>
<body>
    @include('dashboards.partials.nav-header-main')
    <h1>Actualizar Post</h1> <br>
    <form action="{{route('post.update', $posts->id)}}" method = "post" id="form">
        @method('PUT')
    @include("dashboards.partials._form")
    </form>
</body>
</html>