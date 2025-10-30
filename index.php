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
      <p>O sistema de monitoramento de ruído tem como objetivo coletar e exibir informações sobre os níveis sonoros em
        diferentes regiões da cidade. O usuário pode informar sua localização, e o sistema registra automaticamente as
        coordenadas, o nível de ruído e o horário da medição.</p>
    </div>
  </section>

  <section class="contact-form">
    <form action="app/db.php" method="POST">
      <div class="container">
        <div class="title-form">
          <span class="material-symbols-outlined">
            add_location_alt
          </span>
          <h4>Informações do Local</h4>
        </div>
        <div class="form">
          <div class="item-form">
            <label for="surname">Latitude:</label>
            <input type="text" name="latitude" id="latitude" placeholder="51.507351">
          </div>
          <div class="item-form">
            <label for="name">Longitude:</label>
            <input type="text" name="longitude" id="longitude" placeholder="-0.127758">
          </div>
          <div class="item-form">
            <label for="country">Decibéis:</label>
            <input type="text" name="decibeis" id="decibeis" placeholder="85">
          </div>
        </div>
        <div class="form-button">
          <button type="submit" name="btn-cadastrar" class="btn">Enviar dados</button>
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