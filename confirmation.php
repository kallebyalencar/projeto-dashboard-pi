<?php
include_once 'includes/header2.php';

session_start();

// Checa se existe dados de CEP na sessão
$dados = $_SESSION['dados_cep'] ?? null;

// Se não existir ou estiver vazio, volta para index
if (!$dados || !is_array($dados) || empty($dados['address_name'])) {
    echo "<script>
            alert('CEP inválido ou não encontrado. Por favor, tente novamente.');
            window.location.href='index.php';
          </script>";
    exit;
}

// Se o form foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['decibeis'])) {
    require_once __DIR__ . '/app/db.php';  // db.php redireciona para resultado.php
    exit; // evita que a página continue carregando antes do redirect
}
?>


<header class="head-container">
  <div class="container-flex">
    <div class="logo">
      <div class="logotipo">
        <figure>
          <img src="assets/img/ear.png" alt="Logo">
        </figure>
      </div>
      <div class="text-header">
        <h2>Monitor</h2>
        <h2 class="text-purple">Ruído</h2>
      </div>
    </div>
  </div>
</header>

<main>
  <section>
    <div class="main-explication">
      <h2>Esse é o seu endereço ?</h2>
    </div>
  </section>

  <section class="contact-form">
    <form action="" method="POST">
      <div class="container">
        <div class="title-form">
          <span class="material-symbols-outlined">
            add_location_alt
          </span>
          <h4>Informações do Local</h4>
        </div>
        <div class="form">
          <div class="item-form">
            <label for="rua">Rua:</label>
            <input type="text" name="rua" id="rua" value="<?= htmlspecialchars($dados['address_name']) ?>" disabled>
          </div>
          <div class="item-form">
            <label for="bairro">Bairro:</label>
            <input type="text" name="bairro" id="bairro" value="<?= htmlspecialchars($dados['district']) ?>" disabled>
          </div>
          <div class="item-form">
            <label for="cidade">Cidade:</label>
            <input type="text" name="cidade" id="cidade" value="<?= htmlspecialchars($dados['city']) ?>" disabled>
          </div>
          <div class="item-form">
            <label for="cep">Cep:</label>
            <input type="text" name="cep" id="cep" value="<?= htmlspecialchars($dados['cep']) ?>" disabled>
          </div>
          <div class="item-form">
            <label for="decibeis">Informe o valor do ruído:</label>
            <input type="number" name="decibeis" id="decibeis" placeholder="Decibéis" required>
          </div>

          <!-- latitude e longitude -->
          <input type="hidden" name="lat" value="<?= htmlspecialchars($dados['lat']) ?>">
          <input type="hidden" name="lon" value="<?= htmlspecialchars($dados['lng']) ?>">

        </div>
        <div class="form-button">
          <button type="submit" name="btn-cadastrar" class="btn">Confirmar</button>
          <button type="button" class="try-again" onclick="window.location.href='index.php'">Tentar novamente</button>
        </div>
      </div>
    </form>
  </section>
</main>

<footer>
  <p>&copy; 2025 MonitorRuído. Todos os direitos reservados.</p>
</footer>

</body>

</html>