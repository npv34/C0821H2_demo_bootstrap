<?php
namespace Src\Controller;

use Src\Models\BillModels;

class BillController
{
    protected $billModel;

    public function __construct()
    {
        $billModel = new BillModels();
        $this->billModel = $billModel;
    }

    function showList() {
        $bills = $this->billModel->getAll();
        include_once "views/bills/list.php";
    }

    function getDetail($id) {
        $bill = $this->billModel->getById($id);
        include_once "views/bills/billDetail.php";
    }
}