<x></x><?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controllers;

$productController = new Controllers\ProductController();
$userController = new Controllers\UserController();
$page = $_GET['page'] ?? "";
include "src/Views/layout/header.php";
switch ($page) {
    case 'product-list':
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->list();
        }
        break;
    case 'product-create':
        $productController->create();
        break;
    case 'product-delete':
        $id = $_GET['id'];
        $productController->delete($id);
        break;
    case "product-update":
        $id = $_GET['id'];
        $productController->update($id);
        break;
    case "product-detail":
        $id = $_GET['id'];
        $productController->detail($id);
        break;
    case "user-list":
        if (isset($_GET['search'])) {
            $userController->search($_GET['search']);
        } else {
            $userController->index();
        }
        break;
    case "register":
        $userController->register();
        break;
    case "login":
        $userController->showLogin();
        break;
    case "logout":
        $userController->logout();
        break;
    default:
        if (isset($_GET['search'])) {
            $productController->search($_GET['search']);
        } else {
            $productController->index();
        }
}
include "src/Views/layout/footer.php";