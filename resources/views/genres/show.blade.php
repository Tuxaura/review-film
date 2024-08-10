<!DOCTYPE html>
<html>
<head>
    <title>Show Genre</title>
</head>
<body>
    <h1>Genre Details</h1>  

    <p><strong>Genre Film:</strong> {{ $genre->name }}</p>
    <h5>Film-film pada Genre ini</h5>
    <ul>
        @forelse($films as $film)
            <li><a href="{{ route('films.show', $film->id) }}">{{ $film->title }}</a></li>
        @empty
            <li>No films found in this genre.</li>
        @endforelse
    </ul>
    <a href="{{ route('genres.index') }}">Back to Genres</a>
    @auth
    <a href="{{ route('genres.edit', $genre->id) }}">Edit</a>
    <form action="{{ route('genres.destroy', $genre->id) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
    @endauth
</body>
</html>
