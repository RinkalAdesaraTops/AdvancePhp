<?php
// static - class variable methods
// create a single copy in memory
// without object we can access 
class emp{
    static $emp_id = 101;
    static $name;
    static $age;
    public function  __construct($a,$b){
        self::$name = $a;
        self::$age = $b;
    }
    static public function dispInfo(){
        echo "<br>Name is ".self::$name;
        echo "<br>Age is ".self::$age;
    }
}
echo "<br> Employee id is ".emp::$emp_id;
$a1 = new emp("Test",25);
emp::dispInfo();
?>