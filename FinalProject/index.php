<?php

require_once "controllers/CategoryController.php";
require_once "controllers/SubcategoryController.php";
// Create controller object
$controller = new CategoryController();
$controller1 = new SubcategoryController();
// Get action from URL (default = index)
$action = isset($_GET['action']) ? $_GET['action'] : 'index';
// Routing
switch ($action) {
    case 'disp':
        $controller->index();
        break;
    case 'subdisp':
        $controller1->index();
        break;
    case 'add':
        $controller->add();
        break;
    case 'subadd':
        $controller1->add();
        break;
    case 'edit':
        $controller->edit();
        break;
    case 'delete':
        $controller->delete();
        break;
case 'subdelete':
        $controller1->delete();
        break;
    default:
        $controller->disp();
        break;
}
?>