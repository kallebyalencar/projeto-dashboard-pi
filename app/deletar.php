<?php
require_once __DIR__ . '/../config/config.php';

$conn = connectDB();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];

    // Primeiro deletamos o registro
    $sqlDelete = "DELETE FROM monitoramento_ruido WHERE id = $1";
    $result = pg_query_params($conn, $sqlDelete, [$id]);

    if ($result) {
        // Contamos quantos registros ainda existem
        $sqlCount = "SELECT COUNT(*) as total FROM monitoramento_ruido";
        $resCount = pg_query($conn, $sqlCount);
        $rowCount = pg_fetch_assoc($resCount);
        $total = (int)$rowCount['total'];

        if ($total > 0) {
            // Ainda existe registro(s), volta para resultado.php
            header("Location: ../resultado.php?status=deleted");
        } else {
            // Não existe mais registro, volta para index.php
            header("Location: ../index.php?status=deleted");
        }
        exit;
    } else {
        echo "❌ Erro ao excluir o registro. Tente novamente.";
    }
} else {
    echo "ID inválido ou não informado.";
}