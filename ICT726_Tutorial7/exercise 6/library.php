<?php
class Library {
    private $books = [];

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function displayBooks() {
        echo "<h3>Library Books:</h3>";
        foreach ($this->books as $book) {
            echo "<p>" . $book->getInfo() . "</p>";
        }
    }
}
?>