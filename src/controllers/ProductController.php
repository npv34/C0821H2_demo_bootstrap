<?php


namespace Src\Controller;


use Src\Models\BillModels;
use Src\Models\ProductModel;

class ProductController
{
    protected $productModel;

    public function __construct()
    {
        $productModel = new ProductModel();
        $this->productModel = $productModel;
    }

    function showList() {
        $products = $this->productModel->all(10);
        include_once "views/products/list.php";
    }
}