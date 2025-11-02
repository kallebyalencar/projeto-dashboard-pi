<?php
require_once __DIR__ . '/../config/config.php';

class Exportador {
    private $conn;

    public function __construct() {
        $this->conn = connectDB();
    }

    // Baixa um único registro
    public function exportarPorId($id) {
        $sql = "SELECT id, latitude AS point_latitude, longitude AS point_longitude, 
                       decibeis AS value, 
                       data_registro || ' ' || hora_registro AS start_time
                FROM monitoramento_ruido
                WHERE id = $1";
        $result = pg_query_params($this->conn, $sql, [$id]);
        $dados = pg_fetch_all($result);
        $this->gerarCSV($dados, "registro_{$id}.csv");
    }

    // Baixa todos os registros
    public function exportarTodos() {
        $sql = "SELECT id, latitude AS point_latitude, longitude AS point_longitude, 
                       decibeis AS value, 
                       data_registro || ' ' || hora_registro AS start_time
                FROM monitoramento_ruido
                ORDER BY id ASC";
        $result = pg_query($this->conn, $sql);
        $dados = pg_fetch_all($result);
        $this->gerarCSV($dados, "monitoramento_completo.csv");
    }

    // Função genérica que cria o CSV
    private function gerarCSV($dados, $nomeArquivo) {
        if (!$dados) {
            die("Nenhum dado encontrado para exportar.");
        }

        header('Content-Type: text/csv; charset=utf-8');
        header("Content-Disposition: attachment; filename=$nomeArquivo");

        $saida = fopen('php://output', 'w');

        // Cabeçalhos (pega as chaves da primeira linha)
        fputcsv($saida, array_keys($dados[0]));

        // Linhas
        foreach ($dados as $linha) {
            fputcsv($saida, $linha);
        }

        fclose($saida);
        exit;
    }
}