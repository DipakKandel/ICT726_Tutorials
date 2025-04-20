<?php
abstract class Fruit {
    public $name;
    
    public function __construct($name) {
        $this->name = $name;
    }
    
    abstract public function color();
}

class Apple extends Fruit {
    public function color() {
        echo $this->name . " is red";
    }
}

class Orange extends Fruit {
    public function color() {
        echo $this->name . " is orange";
    }
}

class Grape extends Fruit {
    public function color() {
        echo $this->name . " is purple";
    }
}

$apple = new Apple("Apple");
$orange = new Orange("Orange");
$grape = new Grape("Grape");

$apple->color();
echo "<br>";
$orange->color();
echo "<br>";
$grape->color();
?>