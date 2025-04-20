<?php
require_once 'Book.php';
require_once 'Library.php';
require_once 'Member.php';

// Create some books
$book1 = new Book("The Great Gatsby", "F. Scott Fitzgerald");
$book2 = new Book("To Kill a Mockingbird", "Harper Lee");
$book3 = new Book("1984", "George Orwell");

// Create library and add books
$library = new Library();
$library->addBook($book1);
$library->addBook($book2);
$library->addBook($book3);

// Display all books in library
$library->displayBooks();

// Create members
$member1 = new Member("Dipak Kandel", "Premium");
$member2 = new Member("Bhandari Nabin", "Standard");

// Members borrow books
$member1->borrowBook($book1);
$member1->borrowBook($book3);
$member2->borrowBook($book2);

// Display borrowed books for each member
$member1->displayBorrowedBooks();
$member2->displayBorrowedBooks();
?>