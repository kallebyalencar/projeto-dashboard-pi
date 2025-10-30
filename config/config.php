<?php

// Define o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// conexão com o banco de dados
define('DB_HOST', 'localhost'); // Servidor
define('DB_USER', 'postgres'); // Usuário
define('DB_PASS', 'Arrozcomfeij@o123'); // Senha do PostgreSQL
define('DB_NAME', 'cidades-silenciosas'); // Nome do banco

function connectDB() {
    // string das constantes
    $conn_string = "host=" . DB_HOST . " dbname=" . DB_NAME . " user=" . DB_USER . " password=" . DB_PASS;

    // Tenta conectar
    $connect = pg_connect($conn_string);

    // Verifica se a conexão deu certo
    if (!$connect) {
        die("Falha na conexão: não foi possível conectar ao PostgreSQL");
    } 

    return $connect;
    
    // else {
    //     echo "Conexão realizada com sucesso!";
    //     $result = pg_query($connect, 'SELECT * FROM public.monitoramento_ruido');
    // }

}