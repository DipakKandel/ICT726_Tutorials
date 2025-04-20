<?php
class Member {
    private $name;
    private $membershipType;
    private $borrowedBooks = [];

    public function __construct($name, $membershipType) {
        $this->name = $name;
        $this->membershipType = $membershipType;
    }

    public function borrowBook(Book $book) {
        $this->borrowedBooks[] = $book;
    }

    public function displayBorrowedBooks() {
        echo "<h3>" . $this->name . "'s Borrowed Books:</h3>";
        foreach ($this->borrowedBooks as $book) {
            echo "<p>" . $book->getInfo() . "</p>";
        }
    }
}
?>