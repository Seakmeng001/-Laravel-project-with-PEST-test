<!DOCTYPE html>
<html>
<head>
    <title>Create Book</title>
</head>
<body>
    <h1>Create Book</h1>
    <form action="/books" method="POST">
        @csrf
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title">
        </div>
        <div>
            <label for="author">Author:</label>
            <input type="text" id="author" name="author">
        </div>
        <div>
            <label for="isbn">ISBN:</label>
            <input type="text" id="isbn" name="isbn">
        </div>
        <button type="submit">Create Book</button>
    </form>
</body>
</html>
