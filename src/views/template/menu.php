<aside class="sidebar">
    <nav class="menu mt-3">
        <ul class="nav-list">
            <li class="nav-item">
                <a href="day_records.php">
                    <i class="icofont-ui-check mr-2"></i>
                    Registro
                </a>
            </li>
            <li class="nav-item">
                <a href="monthly_report.php">
                    <i class="icofont-chart-histogram  mr-2"></i>
                    Relatorio
                </a>
            </li>
            <?php if ($user->is_admin) : ?>
                <li class="nav-item">
                    <a href="manager_report.php">
                        <i class="icofont-chart-histogram mr-2"></i>
                        Relatorio gerencial
                    </a>
                </li>

                <li class="nav-item">
                    <a href="users.php">
                        <i class="icofont-user mr-2"></i>
                        Usuários
                    </a>
                </li>
            <?php endif ?>
            <li class="nav-item">
                <a href="notification.php">
                    <i class="icofont-ui-message mr-2"></i>
                    Notificações
                </a>
            </li>
        </ul>
    </nav>
    <div class="sidebar-widgets">
        <div class="sidebar-widget">
            <i class="icon icofont-clock-time text-primary"></i>
            <div class="info">
                <span class="text-primary" id="time"></span>
                <span class="label text-muted">Data e Hora Atual</span>
            </div>
        </div>
        <div class="division my-3"></div>
        <div class="sidebar-widget">
            <i class="icon icofont-hour-glass text-success"></i>
            <div class="info">
                <span class="main text-primary" <?= $activeClock == 'workedInterval' ? 'active-clock' : '' ?>><?= $workedInterval ?></span>
                <span class="label text-muted">Horas Trabalhadas</span>
            </div>
        </div>
        <div class="division my-3"></div>
        <div class="sidebar-widget">
            <i class="icon icofont-exit text-danger"></i>
            <div class="info">
                <span class="main text-primary" <?= $activeClock == 'exitTime' ? 'active-clock' : '' ?>><?= $exitTime ?></span>
                <span class="label text-muted">Hora de Saída</span>
            </div>
        </div>

    </div>

</aside>

<script>
    var timeDisplay = document.getElementById("time");

    function refreshTime() {
        var dateString = new Date().toLocaleString("PT-BR", {
            timeZone: "America/Sao_Paulo"
        });
        var formattedString = dateString.replace(", ", " - ");
        timeDisplay.innerHTML = formattedString;
    }
    setInterval(refreshTime, 1000);
</script>