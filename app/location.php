<?php
require_once __DIR__ . '/geo.php'; // caminho correto se ambos estão em app/

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $cep = $_POST['cep'] ?? '';

    $cepService = new CepService();
    $dados = $cepService->buscarCep($cep);

    if ($dados) {
        session_start();
        $_SESSION['dados_cep'] = $dados;
        header('Location: ../confirmation.php'); // volta para a raiz
        exit;
    } else {
        echo "<script>alert('CEP inválido ou não encontrado.'); window.location.href='../index.php';</script>";
    }
}
