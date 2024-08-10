<!DOCTYPE html>
<html>
<head>
    <title>Show Film</title>
</head>
<body>
    <h1>Film Details</h1>
    <p><strong>Title:</strong> {{ $film->title }}</p>
    <p><strong>Description:</strong> {{ $film->description }}</p>
    <p><strong>Genre:</strong> {{ $film->genre->name }}</p>
    <a href="{{ route('films.index') }}">Back to Films</a>
    @auth
    <a href="{{ route('films.edit', $film->id) }}">Edit</a>
    <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endauth
    </body>
</html>
