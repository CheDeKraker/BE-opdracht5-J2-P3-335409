
<?php

class Product extends BaseController
{
    private $model;

    public function __construct()
    {
        $this->model = $this->model('ProductModel');
    }

    public function index()
    {
        $data = [
            'title' => 'Product'
        ];

        $this->view('Product/index', $data);
    }
}