<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Books</title>
</head>
<body>
    <h1>My Books</h1>
    <p>Created by: Lhorenz T. Magtibay</p>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Year</th>
        </tr>

        @foreach ($books as $book)
            <tr>
                <td>{{ $book['title'] }}</td>
                <td>{{ $book['author'] }}</td>
                <td>{{ $book['year'] }}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
