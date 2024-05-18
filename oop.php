<?php
class Book {
    // Private properties
    private $title;
    private $availableCopies;

    // Constructor to initialize properties
    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Method to get the title of the book
    public function getTitle() {
        return $this->title;
    }

    // Method to get the available copies of the book
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

    // Method to borrow a book (decrease available copies)
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Method to return a book (increase available copies)
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Private properties
    private $name;

    // Constructor to initialize properties
    public function __construct($name) {
        $this->name = $name;
    }

    // Method to get the name of the member
    public function getName() {
        return $this->name;
    }

    // Method to borrow a book
    public function borrowBook($book) {
        if ($book->borrowBook()) {
           // echo $this->name . " successfully borrowed '" . $book->getTitle() . "'.\n";
        } else {
           // echo $this->name . " could not borrow '" . $book->getTitle() . "' because no copies are available.\n";
        }
    }

    // Method to return a book
    public function returnBook($book) {
        $book->returnBook();
        //echo $this->name . " returned '" . $book->getTitle() . "'.\n";
    }
}

// Create 2 books with the specified properties
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members with the specified properties
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Members borrowing books
$member1->borrowBook($book1);  // John Doe borrows "The Great Gatsby"
$member2->borrowBook($book2);  // Jane Smith borrows "To Kill a Mockingbird"


// Print available copies with their names
echo "Available Copies of '" . $book1->getTitle() . "': " . $book1->getAvailableCopies() . "</br>";
echo "Available Copies of '" . $book2->getTitle() . "': " . $book2->getAvailableCopies() . "</br>";





?>
