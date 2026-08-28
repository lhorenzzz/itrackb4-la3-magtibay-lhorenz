<div>
    <p>Created by: Lhorenz T. Magtibay</p>
    <h1>Books filtered by author: {{ $value }}</h1>

    @foreach ($books as $id => $book)
        <p>{{ $book['title'] }} — {{ $book['author'] }}</p>
    @endforeach

    <a href="{{ route('books.index') }}">Back to list</a>

</div>
