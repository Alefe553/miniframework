<?php

namespace App\Models;

use MF\Model\Model;

class Product extends Model {

    public function getProducts() {
        $query = 'select id, descricao, preco from tb_produtos';
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }

}

?>