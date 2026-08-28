Q1. Explain the order you placed your featured route and your detail route in, and what would happen if you swapped them.

Answer: I noticed that the /books/featured comes first before /books/{id}. When i ran the code, it takes me to my desired url and it doesn't have an error but when i try to swapped it, i can't find the data on that url. On what i understand, i need to place the specific route first and last is the one with with parameter.

Q2. What happens when someone visits an id that does not exist in your data, and what did you write to make that happen?

Answer: No data if we type /books/99 but it will show the page 404 because what i did was in function show(), was write:
 public function show($id){
    $books = $this->getBooks();
    if (!isset($books[$id])) {
        abort(404);
    }
Therefore, it will only display with an id, and goes to 404 if not.

Q3. Why do your links use route names instead of typed URLs? Give one concrete thing that would break if they did not.

Answer: I used route names instead of hardcoded url in my links because it's safer if the url changes later. When i hardcoded the url like href="/books" and changed my route's url to /library in web.php, the 'back to list' link is broken and gave me a 404 error since it still pointed to the old /books path. But when i used route('books.index'), the link still works and took me to /library without any problem.
