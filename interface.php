<?php
interface Area{
    public function calculateArea();
}
class Circle implements Area{
    public function __construct(){
        $this->pi=3.14;
        $this->r=2.5;
    }
    public function calculateArea(){
        $area = $this->pi*$this->r**2;
        echo "<br> Area of circle is $area";
    }

}
$obj = new Circle();
$obj->calculateArea();

?>