<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>

<body>
    <h1>My Book List</h1>
    <p>Created by: Lhorenz T. Magtibay</p>

    <h4>Book Titles:</h4>
    @foreach ($books as $id => $book)
        <p>
            <a href="{{ route('books.show', $id) }}">{{ $book['title'] }}</a>
        </p>
    @endforeach
</body>

</html>
