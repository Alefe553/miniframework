<?php

namespace App;

class Connection {

    /* Exemplo de conexão */

    public static function getDB() {
        try {
            $conn = new \PDO(
                "mysql:host=localhost;dbname=mvc;charset=utf8",
                'root',
                '',
            );

            return $conn;
        } catch (PDOException $e) {
            /* Implemente aqui sua tratativa de erro!! */
            echo $e;
        }
    }
}

?>