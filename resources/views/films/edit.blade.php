<!DOCTYPE html>
<html>
<head>
    <title>Edit Film</title>
</head>
<body>
    <h1>Edit Film</h1>
    
    <!-- Formulir untuk mengedit film -->
    <form action="{{ route('films.update', $film->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="title">Title:</label>
        <input type="text" id="title" name="title" value="{{ old('title', $film->title) }}" required>
        <br><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" required>{{ old('description', $film->description) }}</textarea>
        <br><br>

        <label for="genre_id">Genre:</label>
        <select id="genre_id" name="genre_id" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}" {{ $film->genre_id == $genre->id ? 'selected' : '' }}>
                    {{ $genre->name }}
                </option>
            @endforeach
        </select>
        <br><br>

        <button type="submit">Update Film</button>
    </form>

    <!-- Link untuk kembali ke daftar film -->
    <a href="{{ route('films.index') }}">Back to Films</a>
</body>
</html>
