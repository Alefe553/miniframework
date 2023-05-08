<?php

namespace App\Models;

use MF\Model\Model;

class Info extends Model {

    public function getInfo() {
        $query = 'select titulo, descricao from tb_info';
        $stmt = $this->db->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

?>