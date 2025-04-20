<?php
class Car {
    // Properties
    private $name;
    private $year;

    // Set the car's name
    public function set_name($name) {
        $this->name = $name;
    }

    // Get the car's name
    public function get_name() {
        return $this->name;
    }

    // Set the car's year
    public function set_year($year) {
        $this->year = $year;
    }

    // Get the car's year
    public function get_year() {
        return $this->year;
    }
}

// Create an instance of Car
$ford = new Car();

// Set properties
$ford->set_name("Ford");
$ford->set_year(2021);

// Get and print properties in "Name - Year" format
echo $ford->get_name() . " - " . $ford->get_year();
?>