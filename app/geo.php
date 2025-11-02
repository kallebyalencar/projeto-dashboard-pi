<?php

class CepService {
    private string $baseUrl = "https://cep.awesomeapi.com.br/json/";

    public function buscarCep(string $cep): ?array {
        $cep = preg_replace('/[^0-9]/', '', $cep);
        $url = $this->baseUrl . $cep;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($ch);
        curl_close($ch);

        if (!$response) return null;

        $dados = json_decode($response, true);
        if (isset($dados['status']) && $dados['status'] == 400) return null;

        return $dados;
    }
}
