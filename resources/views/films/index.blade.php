<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
</head>
<body>
    <h1>Films</h1>
    <a href="{{ route('films.create') }}">Add New Film</a>
    <ul>
        @foreach($films as $film)
            <li>
                <a href="{{ route('films.show', $film->id) }}">{{ $film->title }}</a> - {{ $film->genre->name }}
                <a href="{{ route('films.edit', $film->id) }}">Edit</a>
                <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
</body>
</html>
