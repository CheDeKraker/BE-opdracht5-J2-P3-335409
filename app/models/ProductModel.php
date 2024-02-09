<?php

class ProductModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getProducts()
    {
        $this->db->query('SELECT * FROM product
                         LEFT JOIN storage ON product.id = storage.productId
                         ORDER BY product.barcode');
        return $this->db->execute(true);
    }
}
