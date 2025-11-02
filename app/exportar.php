<?php
require_once __DIR__ . '/csv.php';

$exportador = new Exportador();

if (isset($_GET['id'])) {
    $exportador->exportarPorId($_GET['id']);
} elseif (isset($_GET['all'])) {
    $exportador->exportarTodos();
} else {
    echo "Parâmetro inválido!";
}