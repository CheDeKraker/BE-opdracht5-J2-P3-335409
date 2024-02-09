<?php

class LeverancierModel
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getLeverancier(int $productId)
    {
        $this->db->query('SELECT supplier.name, supplier.contactPerson, supplier.supplierNumber, supplier.phone 
                          FROM supplier
                          LEFT JOIN productSupplier ON supplier.id = productSupplier.supplierId
                          WHERE productSupplier.productId = :productId');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true)[0];
    }

    public function getLeverancierProduct(int $productId)
    {
        $this->db->query('SELECT product.name, productSupplier.dateDelivery, productSupplier.amount, productSupplier.dateNextDelivery
                          FROM product
                          LEFT JOIN productSupplier ON product.id = productSupplier.productId
                          WHERE productSupplier.productId = :productId
                          ORDER BY productSupplier.dateDelivery DESC');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true);
    }
}
