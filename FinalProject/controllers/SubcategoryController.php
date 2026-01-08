<?php
require_once('./models/SubcategoryModel.php');
class SubcategoryController{
    private $subcatmodel;
    public function __construct(){
        $this->subcatmodel = new SubcategoryModel();
        $this->catmodel = new CategoryModel();

    } 
    public function index()  {
        $catdata = $this->catmodel->dispAll('category');
        $res = $this->subcatmodel->dispCatWiseData();
        $data = $this->subcatmodel->dispAll('Subcategory');
        include './views/Subcategory/index.php';
    }    
    public function add(){
        $data = $this->subcatmodel->insData("Subcategory",$_POST['catid'],$_POST['subcatname']);
        header('location:index.php?action=subdisp');
    }
    public function delete(){
        $id = $_GET['id'];
        $res = $this->subcatmodel->delData("Subcategory",$id);
        header('location:index.php?action=subdisp');
    }
   
}
?>