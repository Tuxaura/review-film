<!DOCTYPE html>
<html>
<head>
    <title>Films</title>
</head>
<body>
    <h1>Films</h1>
    @auth
    <a href="{{ route('films.create') }}">Add New Film</a>
    @endauth
    <ul>
        @foreach($films as $film)
            <li>
                <a href="{{ route('films.show', $film->id) }}">{{ $film->title }}</a> - <a href="{{ route('genres.index', $film->id) }}">{{ $film->genre->name }}</a>
                @auth
                <a href="{{ route('films.edit', $film->id) }}">Edit</a>
                <form action="{{ route('films.destroy', $film->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
                @endauth
            </li>
        @endforeach
    </ul>
    @auth
    <a href="{{ route('logout') }}">Logout</a>
    @endauth
    @guest
    <a href="{{ route('login') }}">Login</a>
    @endguest
</body>
</html>
