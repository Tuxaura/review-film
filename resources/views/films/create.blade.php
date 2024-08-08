<!DOCTYPE html>
<html>
<head>
    <title>Create Film</title>
</head>
<body>
    <h1>Create Film</h1>
    <form action="{{ route('films.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>
        <label for="description">Description:</label>
        <textarea id="description" name="description" required></textarea>
        <label for="genre_id">Genre:</label>
        <select id="genre_id" name="genre_id" required>
            @foreach($genres as $genre)
                <option value="{{ $genre->id }}">{{ $genre->name }}</option>
            @endforeach
        </select>
        <button type="submit">Create</button>
    </form>
</body>
</html>
