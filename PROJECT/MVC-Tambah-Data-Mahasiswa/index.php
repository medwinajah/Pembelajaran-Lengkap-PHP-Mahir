<?php
require 'config/database.php';
require 'controller/mahasiswacontroller.php';

// routing action yang dikirim dan diterima
$action = isset($_GET['action'])? $_GET['action'] : '';
$controller = new mahasiswacontroller();
switch($action){
    case "create":
    $controller->create();
    break;

    case "store":
    $controller->save();
    break;

    case 'edit':
    $controller->edit($_GET['id']);
    break;
    
    case 'update':
    $controller->update($_GET['id']);
    break;

    case 'delete':
    $controller->delete($_GET['id']);
    break;

    default:
    $controller->index();
    break;  
}

?>