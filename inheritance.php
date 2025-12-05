<?php
class parentClass{
    public function __construct($n,$a){
        $this->name = $n;
        $this->age = $a;
        echo '<br>ParentClass COnstructor called..';
    }
    public function add($a,$b){
        echo "<br>Addition is ".$a+$b;
        echo "<br>Name is ".$this->name;
        echo "<br>Age is ".$this->age;
    }
}
class childClass extends parentClass{
    public function __construct($a,$b,$c){
        $this->salary = $c;
        parent::__construct($a,$b);
        echo '<br>Child Class COnstructor called..';
    }
    public function minus($a,$b){
        echo "<br>Minus is ".$a-$b;
        echo "<br>Salary is ".$this->salary;
    }
}
$obj = new childClass("test",25,45000);
$obj->add(10,20);
$obj->minus(45,12);

?>