<?php
trait empTraits{
    public function dispMsg($msg){
        echo "<br>Message is -- $msg";
    }
}
class emp
{
    use empTraits;
    public function __construct(){
        echo '<br>constructor called..';
    }
    public function dispEmp($a){
        $this->dispMsg($a);
    }
}
$obj = new emp();
$obj->dispEmp("Good Morning..!!");

?>