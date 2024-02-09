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
                         ORDER BY product.barcode ASC');
        return $this->db->execute(true);
    }

    public function getProduct(int $productId)
    {
        $this->db->query('SELECT * FROM product
                         WHERE product.id = :productId');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true)[0];
    }
}
