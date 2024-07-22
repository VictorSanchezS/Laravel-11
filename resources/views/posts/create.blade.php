<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 | Post Create</title>
</head>
<body>
    <h1>Formulario para crear un nuevo Post</h1>
    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">
            Título
            <input type="text" name="title">
        </label>
        <br><br>
        <label for="">
            Slug:
            <input type="text" name="slug">
        </label>
        <br><br>
        <label for="">
            Categoria
            <input type="text" name="category">
        </label>
        <br><br>
        <label for="">
            Contenido
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>