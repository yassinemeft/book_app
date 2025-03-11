<!DOCTYPE html>
<html>
<head>
    <title>Add a Book</title>
</head>
<body>
    <h1>Add a Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" required><br><br>

        <label for="author">Author:</label>
        <input type="text" name="author" id="author" required><br><br>

        <label for="publication_date">Publication Date:</label>
        <input type="date" name="publication_date" id="publication_date" required><br><br>

        <button type="submit">Add Book</button>
    </form>
</body>
</html>
