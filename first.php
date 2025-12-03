<?php 
// class  - collection of data / collection of member variables & function
// & object - runtime entity 
//inheritance
//polymorphism
//data abstraction & encapsulation
class emp {
    public $name;
    public $age;
    private $salary;
    public function getData($a,$b,$c){
        $this->name = $a;
        $this->age = $b;
        $this->salary = $c;
    }
    public function displayData(){
        echo "Name is ".$this->name."<br>";
        echo "Age is ".$this->age."<br>";
        echo "Salary is ".$this->salary."<br>";
    }
    //member variables & MEMBER FUNCTION 
}
$obj = new emp();
$obj->getData("Test",24,45000);
$obj->displayData();
?>