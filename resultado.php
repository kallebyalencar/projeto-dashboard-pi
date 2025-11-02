<?php
include_once 'includes/hd-second.php';
require_once 'app/db.php'; // Conexão com o banco

$conn = connectDB();

// Busca todos os registros
$sql = "SELECT * FROM monitoramento_ruido ORDER BY id ASC";
$result = pg_query($conn, $sql);

$registros = pg_fetch_all($result); // retorna array ou false

if (!$registros) {
    $registros = []; // garante que o foreach não quebre
}
?>
<header class="head-container">
    <div class="container-flex">
        <div class="logo">
            <div class="logotipo">
                <figure>
                    <a href="index.php"><img src="assets/img/ear.png" alt="Logo"></a>
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
    <!-- 🚨 Aviso de exclusão -->     
    <?php if (isset($_GET['status']) && $_GET['status'] === 'deleted') { ?>
        <div class="alert-success">
            ✅ Registro removido com sucesso!
        </div>
    <?php } ?>

    <section>
        <div class="main-explication">
            <h1>Registros de Monitoriamento</h1>
            <p>Esta página apresenta todos os registros de monitoramento de ruído coletados pelo sistema MonitorRuído.
                Os dados incluem informações detalhadas sobre localização (latitude e longitude), níveis de
                decibéis medidos, data e hora de cada medição. Estes registros são essenciais para análise de poluição
                sonora urbana e podem ser utilizados para estudos ambientais, planejamento urbano e fiscalização.</p>

        </div>
    </section>

    <section class="table-display">
        <div class="container">
            <div class="title-table">
                <span class="material-symbols-outlined">
                    table_eye
                </span>
                <h4>Visualização dos Dados Coletados</h4>
            </div>
        </div>

        <div class="data-view">
            <table>
                <thead>
                    <th scope="col">Latitude</th>
                    <th scope="col">Longitude</th>
                    <th scope="col">Decibéis</th>
                    <th scope="col">Data</th>
                    <th scope="col">Hora</th>
                    <th scope="col">Download</th>
                    <th scope="col">Deletar</th>
                </thead>

                <tbody>
                    <?php foreach ($registros as $r) { ?>
                        <tr>
                            <td><?= htmlspecialchars($r['latitude']) ?></td>
                            <td><?= htmlspecialchars($r['longitude']) ?></td>
                            <td><?= htmlspecialchars($r['decibeis']) ?></td>
                            <td class="date-register"><?= htmlspecialchars($r['data_registro']) ?></td>
                            <td><?= htmlspecialchars($r['hora_registro']) ?></td>
                            <td>
                                <a href="app/exportar.php?id=<?= $r['id'] ?>">
                                    <span class="material-symbols-outlined download">download</span>
                                </a>
                            </td>
                            <td>
                                <a href="app/deletar.php?id=<?= $r['id'] ?>" onclick="return confirm('Tem certeza que deseja deletar este registro?');">
                                    <span class="material-symbols-outlined delete">delete</span>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <div class="action-btns">
            <div class="btn-table">
                <a href="app/exportar.php?all=true">Fazer download de toda a tabela</a>
            </div>
            <a href="index.php" class="btn-add">&#x2795; Adicionar mais locais</a>
        </div>
    </section>
</main>

<footer class="site-footer">
    <p>&copy; 2025 <a href="index.php">MonitorRuído</a>. Todos os direitos reservados.</p>
</footer>

<script>
    const alertBox = document.querySelector('.alert-success');
    if (alertBox) {
        setTimeout(() => {
            alertBox.style.transition = 'opacity 0.5s ease';
            alertBox.style.opacity = '0';
            setTimeout(() => alertBox.remove(), 500);
        }, 3000); // desaparece após 3 segundos
    }
</script>

</body>

</html>