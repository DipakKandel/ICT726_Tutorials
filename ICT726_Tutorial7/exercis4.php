<?php
// Define the constant PI
define("PI", 3.14);

class CircleArea {
    public $radius;
    
    // Constructor - runs when we create the object
    public function __construct($r) {
        $this->radius = $r;
        $area = PI * $this->radius * $this->radius;
        echo "Circle created with radius $r. Area is: $area<br>";
    }
    
    // Destructor - runs when the object is destroyed
    public function __destruct() {
        echo "Circle with radius $this->radius is being removed.<br>";
    }
}

// Create a circle with radius 5
$r = new CircleArea(5);

// The destructor will run automatically when the script ends
?>