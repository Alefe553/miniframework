<?php
    /*
        O método "ini_set" é usado apenas para subir
        o aplicativo para produção, pois o método
        não exibe erros em tempo de execução
    */
    // ini_set('error_reporting', 'E_SCTRICT');

    require_once '../vendor/autoload.php';

    $route = new \App\Route;
?>