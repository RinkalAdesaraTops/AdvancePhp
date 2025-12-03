<?php
// constructor - it is special member function bcoz it is automatically called when object is created
class user
{
    public $user_id;
    public $username;
    // parameterized constructor
    public function __construct($x, $y)
    {
        $this->user_id = $x;
        $this->username = $y;
    }
    public function __destruct(){
        echo "<br>Destructor called...";
    }
    // default constructor
    // public function __construct()
    // {
    //     $this->user_id = 101;
    //     $this->username = "Testuser";
    //     // $this->user_id = $a;
    //     // $this->username = $b;
    // }
    public function displayUser()
    {
        echo "User ID is " . $this->user_id . "<br>";
        echo "Username is " . $this->username . "<br>";
    }
}
$obj = new user(101,"abcd");
$obj1 = new user(102,"test");
$obj2 = new user(103,"xyz");
$obj->displayUser();
$obj1->displayUser();
$obj2->displayUser();
?>