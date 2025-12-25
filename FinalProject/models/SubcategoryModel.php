<?php
require_once './config/Database.php';
class SubcategoryModel
{
    public function __construct()
    {
        $this->conn = Database::connect();
    }
    public function dispAll($table)
    {
        return $this->conn->query("SELECT * from $table");
    }
    public function insData($tbl, $cid,$name)
    {
        return $this->conn->query("INSERT INTO $tbl(`subcatid`,`catid`,`name`) VALUES('',$cid,'$name')");
    }
    public function delData($tbl, $id)
    {
        return $this->conn->query("DELETE FROM $tbl where subcatid = ".$id);
    }
}


?>