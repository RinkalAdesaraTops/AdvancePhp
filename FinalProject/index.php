<?php 

require_once "controllers/CategoryController.php";

// Create controller object
$controller = new CategoryController();

// Get action from URL (default = index)
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

// Routing
switch ($action) {
    case 'disp':
        $controller->index();
        break;
    case 'add':
        $controller->add();
        break;

    case 'edit':
        $controller->edit();
        break;

    case 'delete':
        $controller->delete();
        break;

    default:
        $controller->disp();
        break;
}

?>
