<?php
// Conexão
require_once __DIR__ . '/../config/config.php';

function register() {
    $conn = connectDB();

    if(isset($_POST['btn-cadastrar'])) {
        $rua = pg_escape_string($conn, $_POST['rua']);
        $bairro = pg_escape_string($conn, $_POST['bairro']);
        $numero = pg_escape_string($conn, $_POST['numero']);
        $cep = pg_escape_string($conn, $_POST['cep']);
    }

    $sql = "INSERT INTO monitoramento_ruido ()";
}
