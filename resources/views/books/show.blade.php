<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>

<body>
    <p>Created by: Lhorenz T. Magtibay</p>

    <h1>{{ $book['title'] }}</h1>
    <p>Author: {{ $book['author'] }}</p>
    <p>Year: {{ $book['year'] }}</p>
    <p>Genre: {{ $book['genre'] }}</p>

    <a href="{{ route('books.index') }}">Back to list</a>
</body>

</html>
