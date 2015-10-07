

<?php
// Write teh class Circle.
// A circle has a center point and a radius.
// A circle should know how to calculate its area and perimeter.
// How many variables will your class need? What are their types?
// How many funcitons will your class need? What will they return?
        // center X = 10
        // center Y = 10
        // Radius   = 50
// function translate ($deltaX, $deltaY) {....}
// function ptInCircle ($x, $y){....} true if it's inside the circle
class Circle
{
    public $centerx;
    public $centery;
    public $radius;

    function __construct($centerx, $centery, $radius)
    {
        $this->centerx = $centerx;
        $this->centery = $centery;
        $this->radius = $radius;
    }

    function area()
    {
        return ($this->radius * $this->radius * 3.14);
    }

    function perimeter()
    {
        return (2 * $this->radius * 3.14);
    }

    function translate($deltaX, $deltaY)
    {
        $this->centerx += $deltaX;
        $this->centery += $deltaY;
        return "X axis is now at " . ($this->centerx) . " and Y axis is now at " . ($this->centery);
    }

    function ptInCircle ($x, $y)
    {$dx = $this->centerx - $x;
     $dy = $this->centery - $y;

        if (pow($dx, 2) + pow($dy,2) < pow($this->radius,2)){
        return "true";
    }
        else return "false";}
}

$circle = new Circle(10,10,50);
echo $circle->area()."<br>";
echo $circle->perimeter()."<br>";
echo $circle->translate(15,15)."<br>";//will move x and y by 15
echo $circle->ptInCircle (11,11)."<br>";
echo $circle->ptInCircle(70,70)."<br>";
?>
