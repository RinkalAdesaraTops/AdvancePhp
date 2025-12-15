<?php
require_once('./models/CategoryModel.php');
class CategoryController{
    private $catmodel;
    public function __construct(){
        $this->catmodel = new CategoryModel();
    } 
    public function index()  {
        $data = $this->catmodel->dispAll('category');
        include './views/category/index.php';
    }
    public function disp(){
        include './views/Dashboard/index.php';

    }
}
?>