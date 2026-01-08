<?php
require_once('./models/CategoryModel.php');
class CategoryController{
    private $catmodel;
    public function __construct(){
        $this->catmodel = new CategoryModel();
    } 
    public function index()  {
        $data = $this->catmodel->dispAll('category');
        $res='';
        include './views/category/index.php';
    }
    public function disp(){
        include './views/Dashboard/index.php';       
    }
    public function add(){
        $id = $_POST['catid'];
        if($id!=''){
            $data = $this->catmodel->updData("category",$_POST);
        } else {
            $data = $this->catmodel->insData("category",$_POST['name']);

        }
        header('location:index.php?action=disp');
    }
    public function delete(){
        $id = $_GET['id'];
        $res = $this->catmodel->delData("category",$id);
        header('location:index.php?action=disp');
    }
    public function edit() {
         $id = $_GET['id'];
         $res = $this->catmodel->editData("category",$id);
         $data = $this->catmodel->dispAll('category');
         include './views/category/index.php';
    }
}
?>