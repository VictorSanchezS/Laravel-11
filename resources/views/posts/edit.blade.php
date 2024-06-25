<x-app-layout>
    <h1>Formulario para editar un nuevo Post</h1>
    <br>
    <form action="{{route('posts.update',$post)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">
            Título
            <input type="text" name="title" value="{{ $post->title }}">
        </label>
        <br><br>
        <label for="">
            Categoria
            <input type="text" name="category" value="{{ $post->category }}">
        </label>
        <br><br>
        <label for="">
            Contenido
            <textarea name="content">{{ $post->content }}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>