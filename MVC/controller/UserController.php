<?php
require_once './model/UserModel.php';
class UserController
{
    public function getInfo()
    {
        $obj = new UserModel();
        $data = $obj->getUser();

        include './views/Userview.php';
    }
}
?>