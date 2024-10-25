<?php
    $host = 'db';
    $usuario = 'php_docker';
    $senha = 'password';
    $database = 'php_docker';

    $mysqli = new mysqli($host, $usuario, $senha, $database);

    if($mysqli->connect_error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli->connect_error);
    }

?>