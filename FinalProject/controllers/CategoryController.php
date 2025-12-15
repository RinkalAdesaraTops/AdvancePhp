<?php
require_once('../models/CategoryModel.php');
class CategoryController{
    private $catmodel;
    public function __construct(){
        $this->catmodel = new CategoryModel();
    }   
}
?>