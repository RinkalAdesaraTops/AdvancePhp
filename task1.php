<?php 
class Student{
    // encapsulation - wrapping up of data into single unit
    public $std_id;
    public $std_name;
    public $std_class;
    public function setDetails($a,$b,$c) {
        $this->std_id = $a;
        $this->std_name = $b;
        $this->std_class = $c;
    }
    public function getDetails(){
        echo "Student id is ".$this->std_id;
        echo "<br> Student Name is ".$this->std_name;
        echo "<br> Student Class is ".$this->std_class;
    }
}
$s1 = new Student();
$s1->setDetails(111,"TEstee","6");
$s1->getDetails();
?>