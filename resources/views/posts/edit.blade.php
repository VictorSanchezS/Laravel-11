<x-app-layout>
    <h1>Formulario para editar un nuevo Post</h1>
    @if ($errors->any())
        <div>
            <h2>Errores</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif
    <br>
    <form action="{{route('posts.update',$post)}}" method="POST">
        @method('PUT')
        @csrf
        <label for="">
            Título
            <input type="text" name="title" value="{{ old('title',$post->title) }}">
        </label>
        <br><br>
        <label for="">
            Slug
            <input type="text" name="slug" value="{{ old('slug',$post->slug) }}">
        </label>
        <br><br>
        <label for="">
            Categoria
            <input type="text" name="category" value="{{ old('category',$post->category) }}">
        </label>
        <br><br>
        <label for="">
            Contenido
            <textarea name="content">{{ old('content',$post->content) }}</textarea>
        </label>
        <br><br>
        <button type="submit">Actualizar Post</button>
    </form>
</x-app-layout>