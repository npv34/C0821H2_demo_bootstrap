<?php
session_start();

$loginStatus = $_SESSION['isLogin'];
if (!isset($loginStatus) || !$loginStatus) {
    header('location: login.php');
}



use Src\Models\BillModels;

require 'vendor/autoload.php';

include_once "src/models/Database.php";
include_once "src/models/Model.php";
include_once "src/models/BillModels.php";
include_once "src/models/ProductModel.php";
include_once "src/models/UserModel.php";
include_once "src/controllers/LoginController.php";
include_once "src/controllers/BillController.php";
include_once "src/controllers/ProductController.php";

$bill = new BillModels();

$bills = $bill->getAll();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<!--    <link rel="stylesheet" href="css/style.css">-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="index.php?page=logout">Logout</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#">Disabled</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="content">
        <div class="row pt-2">
            <div class="col-12 col-md-3">
                <div class="list-group">
                    <button type="button" class="list-group-item list-group-item-action active">
                        Danh mục
                    </button>
                    <a class="list-group-item list-group-item-action" href="index.php?page=bills&action=show-list">Quản lý hoá đơn</a>
                    <a  class="list-group-item list-group-item-action" href="index.php?page=products&action=show-list">Quản lý sản phẩm</a>
                    <a  class="list-group-item list-group-item-action">Quản lý người dùng</a>
                </div>
            </div>
            <div class="col-12 col-md-9">
                <?php
                  include_once ('router.php');
                ?>
            </div>
        </div>


    </div>
    <div class="col-12 col-md-12 footer bg-primary">
        <div class="row">

            <div class="col-12 col-md-3">
                About me
            </div>
            <div class="col-12 col-md-3">
                About me
            </div>
            <div class="col-12 col-md-3">
                About me
            </div>
            <div class="col-12 col-md-3">
                About me
            </div>


        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
