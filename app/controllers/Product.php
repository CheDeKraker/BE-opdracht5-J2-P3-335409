
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
            'title' => 'Product Table',
            'products' => $this->model->getProducts()
        ];

        $this->view('Product/index', $data);
    }
}
