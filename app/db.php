<?php
// Conexão
require_once __DIR__ . '/../config/config.php';

function register() {
    $conn = connectDB();

    if(isset($_POST['btn-cadastrar'])) {
        $latitude = pg_escape_string($conn, $_POST['latitude']);
        $longitude = pg_escape_string($conn, $_POST['longitude']);
        $decibeis = pg_escape_string($conn, $_POST['decibeis']);
    }

    $sql = "INSERT INTO monitoramento_ruido ()";
}
