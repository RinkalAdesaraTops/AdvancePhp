<?php
class Manager
{
    //method overriding
    public function __construct()
    {
        echo '<br>Parent class called..';
    }
    public function disp()
    {
        echo '<br>DIsplay func - Parent class called..';
    }
}
class Employee extends Manager
{
    public function __construct()
    {
        parent::__construct();
        echo '<br>Child class called..';

    }
    public function disp()
    {
        parent::disp();
        echo '<br>DIsplay func - Child class called..';

    }
}
$obj = new Employee();
$obj->disp();
?>