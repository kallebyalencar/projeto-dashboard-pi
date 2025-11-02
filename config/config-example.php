<?php

// Define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('DB_HOST', 'localhost'); // Servidor
define('DB_USER', 'usuario_aqui'); // Usuário
define('DB_PASS', 'senha_aqui'); // Senha
define('DB_NAME', 'cidades-silenciosas'); // Nome do banco

function connectDB() {
    $conn_string = "host=" . DB_HOST . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASS;
    $connect = pg_connect($conn_string);

    if (!$connect) {
        die("Falha na conexão: não foi possível conectar ao PostgreSQL");
    } 
    return $connect;
}