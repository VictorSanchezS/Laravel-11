<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 | Post Create</title>
</head>
<body>
    <h1>Formulario para crear un nuevo Post</h1>
    
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

    <form action="{{route('posts.store')}}" method="POST">
        @csrf
        <label for="">
            Título
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        {{-- @error('title')
            <p>
                {{ $message }}
            </p>
        @enderror --}}
        <br><br>
        <label for="">
            Slug:
            <input type="text" name="slug" value="{{ old('slug') }}">
        </label>
        {{-- @error('slug')
            <p>
                {{ $message }}
            </p>
        @enderror --}}
        <br><br>
        <label for="">
            Categoria
            <input type="text" name="category" value="{{ old('category') }}">
        </label>
        {{-- @error('category')
            <p>
                {{ $message }}
            </p>
        @enderror --}}
        <br><br>
        <label for="">
            Contenido
            <textarea name="content">{{ old('content') }}</textarea>
        </label>
        {{-- @error('content')
            <p>
                {{ $message }}
            </p>
        @enderror --}}
        <br><br>
        <button type="submit">Crear</button>
    </form>
</body>
</html>