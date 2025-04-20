<?php
class Car {
    // Properties
    private $name;
    private $year;

    // Constructor (sets name and year)
    public function __construct($name, $year) {
        $this->name = $name;
        $this->year = $year;
        echo "Car object created: $name - $year<br>";
    }

    // Destructor (prints name and year when object is destroyed)
    public function __destruct() {
        echo "Car object destroyed: " . $this->name . " - " . $this->year . "<br>";
    }
}

// Create an instance of Car (constructor runs automatically)
$ford = new Car("Ford", 2021);

// The destructor runs automatically when the script ends or object is unset
?>