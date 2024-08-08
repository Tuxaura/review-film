<!DOCTYPE html>
<html>
<head>
    <title>Show Genre</title>
</head>
<body>
    <h1>Genre Details</h1>
    <p><strong>Name:</strong> {{ $genre->name }}</p>
    <a href="{{ route('genres.index') }}">Back to Genres</a>
    <a href="{{ route('genres.edit', $genre->id) }}">Edit</a>
    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</body>
</html>
