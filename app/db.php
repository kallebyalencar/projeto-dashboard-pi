<?php
// Conexão
require_once __DIR__ . '/../config/config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $latitude = $_POST['lat'] ?? null;
    $longitude = $_POST['lon'] ?? null;
    $decibeis = $_POST['decibeis'] ?? null;

    // Verifica se veio tudo
    if (!$latitude || !$longitude || !$decibeis) {
        echo "<script>alert('Erro: dados incompletos.'); window.location.href='confirmation.php';</script>";
        exit;
    }

    // Conecta ao banco via config.php
    $conn = connectDB();

    // Monta o SQL
    $sql = "INSERT INTO monitoramento_ruido (latitude, longitude, decibeis)
            VALUES ($1, $2, $3)";

    // Executa com parâmetros seguros
    $result = pg_query_params($conn, $sql, [
        $latitude,
        $longitude,
        $decibeis
    ]);

    if ($result) {
        header("Location: resultado.php");
        exit;
    } 
    else {
        echo "<script>alert('Ocorreu um problema ao salvar o registro. Por favor, tente novamente'); window.location.href='confirmation.php';</script>";
    }

    // Fecha conexão
    pg_close($conn);
}