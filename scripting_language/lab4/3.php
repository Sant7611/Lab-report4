<?php
class Circle
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * $this->radius ** 2;
    }
}

$circle = new Circle(5);
echo "Area of the circle is: {$circle->area()} square units";
