<?php
include_once 'includes/header.php';
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
      <h1>Sobre o Sistema</h1>
      <p>O Sistema de Monitoramento de Ruído Urbano tem como função registrar e apresentar informações sobre os níveis sonoros em diferentes regiões da cidade. Ao acessar o sistema, o usuário informa o seu CEP e visualiza automaticamente a localização correspondente. Em seguida, ele confere se as informações exibidas estão corretas e, caso não estejam, pode retornar e corrigir antes de prosseguir.</p>
      <p>Após confirmar o local, o usuário pode cadastrar o valor de ruído medido, que é registrado junto com a data e o horário da coleta. No final, o sistema permite fazer o download de uma tabela com todos os resultados obtidos, reunindo as medições e suas respectivas localizações. Dessa forma, o projeto oferece uma maneira simples e eficiente de acompanhar e analisar os níveis de ruído presentes na cidade.</p>
    </div>
  </section>

  <section class="contact-form">
    <form action="app/location.php" method="POST">
      <div class="container">
        <div class="title-form">
          <span class="material-symbols-outlined">
            add_location_alt
          </span>
          <h4>Informe o seu local</h4>
        </div>
        <div class="form">
          <div class="item-form">
            <label for="name">Cep:</label>
            <input type="text" name="cep" id="cep" placeholder="12.345-123" required>
          </div>
        </div>
        <div class="form-button">
          <button type="submit" name="btn-cadastrar" class="btn">Confirmar</button>
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