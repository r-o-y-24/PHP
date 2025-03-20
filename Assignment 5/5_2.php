<?php
class Fruit {
    private $name;
    private $shape;
    private $colour;
    private $price;

    public function __construct($name, $shape, $colour, $price) {
        $this->name = $name;
        $this->shape = $shape;
        $this->colour = $colour;
        $this->price = $price;
    }

    public function __destruct() {
        echo "Name: " . $this->name . "\n";
        echo "Shape: " . $this->shape . "\n";
        echo "Colour: " . $this->colour . "\n";
        echo "Price: " . $this->price . "\n";
        echo "\n";
    }
}

$fruits = array(
    new Fruit("Apple", "Round", "Red", 2.5),
    new Fruit("Banana", "Crescent", "Yellow", 1.2),
    new Fruit("Orange", "Round", "Orange", 1.8),
    new Fruit("Mango", "Oval", "Yellow", 3.0),
    new Fruit("Grapes", "Cluster", "Purple", 2.0),
    new Fruit("Pineapple", "Oval", "Yellow", 4.0),
    new Fruit("Peach", "Round", "Pink", 2.2)
);

for ($i = 0; $i < 7; $i++) {
    unset($fruits[$i]);
}
?>
