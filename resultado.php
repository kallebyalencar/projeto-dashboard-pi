<?php
    include_once 'includes/hd-second.php';
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
                <h1>Registros de Monitoriamento</h1>
                <p>Esta página apresenta todos os registros de monitoramento de ruído coletados pelo sistema MonitorRuído.
                    Os dados incluem informações detalhadas sobre localização (endereço, latitude e longitude), níveis de
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
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </thead>
    
                    <tbody>
                        <tr>
                            <td>51.507351</td>
                            <td>-0.127758</td>
                            <td>85</td>
                            <td>26-10-2025</td>
                            <td>12:54</td>
                            <td>
                                <a href="#">
                                    <span class="material-symbols-outlined download">download</span>
                                </a>
                            </td>
                            <td>
                                <a href="#">
                                    <span class="material-symbols-outlined delete">delete</span>
                                </a>
                            </td>
                        </tr>

                    </tbody>
    
                </table>
            </div>
    
        </section>
    </main>

    <footer class="site-footer">
        <p>&copy; 2025 <a href="index.php">MonitorRuído</a>. Todos os direitos reservados.</p>
    </footer>

</body>
</html>