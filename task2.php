<?php
class Product{
    public $name;
    public $price;
    public function __construct($a="jdfhg",$b=101){
        echo "<br>default constructor called..";
        echo "<br>a = $a && b=$b";
    }
}
// constructor overloading
$p1 = new Product();
$p2 = new Product("test");
$p3 = new Product("abc",25);
?>