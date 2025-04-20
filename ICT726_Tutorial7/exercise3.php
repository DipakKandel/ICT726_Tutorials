<?php
// Parent class
class Car {
    public $name;
    
    // Constructor sets the name
    public function __construct($name) {
        $this->name = $name;
    }
    
    // Method to print car details
    public function printDetails() {
        echo "Car Name: " . $this->name;
    }
}

// Child class extending Car
class Ford extends Car {
    public $country;
    
    // Override constructor to take country parameter
    public function __construct($name, $country) {
        parent::__construct($name); // Call parent constructor
        $this->country = $country;
    }
    
    // Override printDetails method
    public function printDetails() {
        echo "Car Name: " . $this->name . " - Country: " . $this->country;
    }
}

// Create instance of Ford
$ford = new Ford("Ford", "USA");

// Call printDetails method
$ford->printDetails();
?>