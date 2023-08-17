<?php

class Shape {
    protected $color;
    
    public function __construct($color) {
        $this->color = $color;
    }
    
    public function getColor() {
        return $this->color;
    }
    
    public function getArea() {
        // This method will be overridden by subclasses
    }
}

class Circle extends Shape {
    private $radius;
    
    public function __construct($color, $radius) {
        parent::__construct($color);
        $this->radius = $radius;
    }
    
    public function getRadius() {
        return $this->radius;
    }
    
    public function getArea() {
        return pi() * $this->radius * $this->radius;
    }
}

class Rectangle extends Shape {
    private $width;
    private $height;
    
    public function __construct($color, $width, $height) {
        parent::__construct($color);
        $this->width = $width;
        $this->height = $height;
    }
    
    public function getWidth() {
        return $this->width;
    }
    
    public function getHeight() {
        return $this->height;
    }
    
    public function getArea() {
        return $this->width * $this->height;
    }
}

// Creating instances of shapes
$circle = new Circle("Red", 5);
$rectangle = new Rectangle("Blue", 4, 6);

// Getting information about shapes
echo "Circle color: " . $circle->getColor() . "<br>";
echo "Circle radius: " . $circle->getRadius() . "<br>";
echo "Circle area: " . $circle->getArea() . "<br>";

echo "Rectangle color: " . $rectangle->getColor() . "<br>";
echo "Rectangle width: " . $rectangle->getWidth() . "<br>";
echo "Rectangle height: " . $rectangle->getHeight() . "<br>";
echo "Rectangle area: " . $rectangle->getArea() . "<br>";

?>
