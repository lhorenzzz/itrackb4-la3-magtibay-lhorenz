<div>
    <p>Created by: Lhorenz T. Magtibay</p>
    <h1>Books filtered by: {{ $value }}</h1>

    @foreach ($books as $id => $book)
        <p>
            ID: {{ $id }}
            <br>
            {{ $book['title'] }} — {{ $book['author'] }}
            <br>
            Year: {{ $book['year'] }}
            <br>
            Genre: {{ $book['genre'] }}
        </p>

    @endforeach
    <a href="{{ route('books.index') }}">Back to list</a>

</div>
