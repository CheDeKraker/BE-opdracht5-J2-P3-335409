
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
            'title' => 'Overzicht Magazijn Jamin',
            'products' => $this->model->getProducts()
        ];

        $this->view('Product/index', $data);
    }

    public function Leverancier(int $productId)
    {
        $data = [
            'title' => 'Leveranciers Informatie',
            'leverancierInfo' => $this->model('LeverancierModel')->getLeverancier($productId),
            'levernacierProduct' => $this->model('LeverancierModel')->getLeverancierProduct($productId)
        ];

        $this->view('Leverancier/index', $data);
    }



    public function Allergeen(int $productId)
    {
        $data = [
            'title' => 'Overzicht allergenen',
            'allergeens' => $this->model('AllergeenModel')->getAllergies($productId),
            'allergeenProduct' => $this->model->getProduct($productId)
        ];

        $this->view('Allergeen/index', $data);
    }
}
