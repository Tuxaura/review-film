<!DOCTYPE html>
<html>
<head>
    <title>Create Genre</title>
</head>
<body>
    <h1>Create Genre</h1>
    <form action="{{ route('genres.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <button type="submit">Create</button>
    </form>
</body>
</html>
