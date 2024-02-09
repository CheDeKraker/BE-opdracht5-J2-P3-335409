<?php

class AllergeenModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getAllergies(int $productId)
    {
        $this->db->query('SELECT allergy.name, allergy.description
                        FROM allergy
                        LEFT JOIN productAllergy ON allergy.id = productAllergy.allergyId
                        WHERE productAllergy.productId = :productId');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true);
    }

    public function getProducts(int $productId)
    {
        $this->db->query('SELECT product.name, product.barcode
                        FROM product
                        LEFT JOIN productAllergy ON product.id = productAllergy.productId
                        WHERE productAllergy.productId = :productId');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true);
    }
    
}
