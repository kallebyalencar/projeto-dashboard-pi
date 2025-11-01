<?php
include_once 'includes/header2.php';
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
            <label for="name">Rua:</label>
            <input type="text" name="rua" id="rua" disabled>
          </div>
          <div class="item-form">
            <label for="name">Bairro:</label>
            <input type="text" name="bairro" id="bairro" disabled>
          </div>
          <div class="item-form">
            <label for="name">Cep:</label>
            <input type="text" name="cep" id="cep" disabled>
          </div>
          <div class="item-form">
            <label for="name">Informe o valor do ruído:</label>
            <input type="text" name="decibeis" id="decibeis" placeholder="Decibéis" required>
          </div>
        </div>
        <div class="form-button">
          <button type="submit" name="btn-cadastrar" class="btn"><a href="#">Confirmar</a></button>
          <button type="submit" name="btn-cadastrar" class="try-again"><a href="../projeto-dashboard-pi/index.php">Tentar novamente</a></button>
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