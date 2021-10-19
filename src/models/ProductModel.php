<?php


namespace Src\Models;


class ProductModel extends Model
{
    public $table = 'products';

    public function __construct()
    {
        parent::__construct($this->table);
    }
}