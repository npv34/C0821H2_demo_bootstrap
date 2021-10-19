<?php
$page = $_REQUEST['page'] ?? null;
$action = $_REQUEST['action'] ?? null;
switch ($page) {
    case "bills":
        $billController = new \Src\Controller\BillController();
        switch ($action) {
            case "show-list":
                $billController->showList();
                break;
            case "show-detail":
                $id = $_REQUEST['id'];
                $billController->getDetail($id);
                break;
        }
        break;
    case "products":
        $productController  = new \Src\Controller\ProductController();
        switch ($action) {
            case "show-list":
                $productController->showList();
                break;
        }
        break;

}