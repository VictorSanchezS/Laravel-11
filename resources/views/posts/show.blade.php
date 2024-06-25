<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel | Posts</title>
</head>
<body>
    <a href="{{route('posts.index')}}">Volver a posts</a>
    <h1>Titulo: {{ $post->title }}</h1>
    <p>Categoria: {{ $post->category }} </p>
    <p>Contenido: {{ $post->content }} </p>
    <a href="{{route('posts.edit',$post)}}">
        Editar Post
    </a>
    <form action="{{route('posts.destroy',$post)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar Post</button>
    </form>
</body>
</html>