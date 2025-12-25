<?php
require_once('./models/SubcategoryModel.php');
class SubcategoryController{
    private $subcatmodel;
    public function __construct(){
        $this->subcatmodel = new SubcategoryModel();
    } 
    public function index()  {
        $data = $this->subcatmodel->dispAll('Subcategory');
        include './views/Subcategory/index.php';
    }
    
    public function add(){
        $data = $this->subcatmodel->insData("Subcategory",$_POST['catid'],$_POST['name']);
        header('location:index.php?action=subdisp');
    }
    public function delete(){
        $id = $_GET['id'];
        $res = $this->subcatmodel->delData("Subcategory",$id);
        header('location:index.php?action=subdisp');
    }
}
?>