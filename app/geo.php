<?php

class CepService {
    private string $baseUrl = "https://cep.awesomeapi.com.br/json/";

    public function buscarCep(string $cep): ?array {
        // Limpa o CEP (mantém apenas números)
        $cep = preg_replace('/[^0-9]/', '', $cep);
        $url = $this->baseUrl . $cep;

        // Inicializa e executa a requisição cURL
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        if (!$response) return null;

        $dados = json_decode($response, true);

        // Se a API retornou erro explícito (ex: {"status":400})
        if (isset($dados['status']) && $dados['status'] == 400) {
            return null;
        }

        // Aceita CEPs genéricos (sem rua/bairro), mas exige cidade e estado
        if (empty($dados['city']) || empty($dados['state'])) {
            return null;
        }

        // Substitui campos vazios por mensagens amigáveis
        $dados['address_name'] = $dados['address_name'] ?: 'Endereço não disponível';
        $dados['district'] = $dados['district'] ?: 'Bairro não disponível';

        return $dados;
    }
}
