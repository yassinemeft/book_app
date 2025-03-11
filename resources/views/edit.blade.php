<!DOCTYPE html>
<html>
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $book->title }}" required><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" value="{{ $book->author }}" required><br><br>

        <label for="publication_date">Publication Date:</label>
        <input type="date" name="publication_date" id="publication_date" value="{{ $book->publication_date }}" required><br><br>

        <button type="submit">Update Book</button>
    </form>
</body>
</html>
