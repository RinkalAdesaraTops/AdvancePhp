<?php
abstract class abc{
    abstract public function dispData();
}
class xyz extends abc{
    public function __construct(){
        echo '<br>constructor called.';
    }
    public function dispData(){
        echo "<br>Display methods called..";
    }
}
$a = new xyz();
$a->dispData();

?>