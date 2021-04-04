<aside class="sidebar inset-y-0 left-0 w-64 px-8 py-2 bg-gray-900 border-r overflow-auto">
    <img class="" src="../assets/img/bluegray100.png">
    <nav class="menu ml-6">
        <div class=" -mx-7">
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
            <i class="material-icons mr-2 text-blue-600">query_builder</i>
            <div class="info">
                <span class="text-blue-700" id="time"></span>
                <span class="label text-muted">Data e Hora Atual</span>
            </div>
        </div>
        <div class="division my-2"></div>
        <div class="sidebar-widget">
            <i class="material-icons mr-2 text-green-600">hourglass_top</i>
            <div class="info">
                <span class="main text-green-600" <?= $activeClock == 'workedInterval' ? 'active-clock' : '' ?>><?= $workedInterval ?></span>
                <span class="label text-muted">Horas Trabalhadas</span>
            </div>
        </div>
        <div class="division my-2"></div>
        <div class="sidebar-widget">
        <i class="material-icons mr-2 text-red-600">timer_off</i>
            <div class="info">
                <span class="main text-red-600" <?= $activeClock == 'exitTime' ? 'active-clock' : '' ?>><?= $exitTime ?></span>
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