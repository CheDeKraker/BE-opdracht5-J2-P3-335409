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
                        WHERE productAllergy.productId = :productId
                        ORDER BY allergy.name ASC');
        $this->db->bind(':productId', $productId);
        return $this->db->execute(true);
    }
}
