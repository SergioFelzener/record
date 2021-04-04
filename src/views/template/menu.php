<aside class="sidebar inset-y-0 left-0 w-64 px-8 py-4 bg-gray-900 border-r overflow-auto">
    <img class="" src="../assets/img/gray100pink.png">
    <nav class="menu ml-6">
        <div class="mt-2 -mx-7">
            <ul class="nav-list">
                <li class="nav-item">
                    <a class="flex text-sm font-medium text-gray-700 bg-gray-100 hover:bg-green-50 hover:text-green-700 rounded-lg p-2" href="day_records.php">
                        <i class="material-icons mr-2">done_all</i>
                        Registro
                    </a>
                </li>
                <li class="nav-item">
                    <a class="flex text-sm font-medium text-gray-700 bg-gray-100 hover:bg-green-50 hover:text-green-700 rounded-lg p-2" href="monthly_report.php">
                    <i class="material-icons mr-2">trending_up</i>
                        Relatorio
                    </a>
                </li>
                <?php if ($user->is_admin) : ?>
                    <li class="nav-item">
                        <a class="flex text-sm font-medium text-gray-700 bg-gray-100 hover:bg-green-50 hover:text-green-700 rounded-lg p-2" href="manager_report.php">
                        <i class="material-icons mr-2">trending_up</i>
                            Relatorio gerencial
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="flex text-sm font-medium text-gray-700 bg-gray-100 hover:bg-green-50 hover:text-green-700 rounded-lg p-2" href="users.php">
                        <i class="material-icons mr-2">trending_up</i>
                            Usuários
                        </a>
                    </li>
                <?php endif ?>
                <li class="nav-item">
                    <a class="flex text-sm font-medium text-gray-700 bg-gray-100 hover:bg-green-50 hover:text-green-700 rounded-lg p-2" href="notification.php">
                    <i class="material-icons mr-2">trending_up</i>
                        Notificações
                    </a>
                </li>
            </ul>
        </div>
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