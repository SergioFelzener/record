<main class="content">
    <?php
    renderTitle(
        'Relatório Gerencial',
        'Resumo das horas trabalhadas dos funcionários',
        'icofont-chart-histogram'
    );
    ?>

    <style>
        @import url(https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css);
    </style>

    <div class=" bg-gray-50 flex items-center justify-center px-5 py-5">
        <div class="w-full max-w-3xl">
            <div class="-mx-2 md:flex">
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg border border-gray-200 shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Quantidade de Funcionários</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3"><?= $activeUsersCount ?></h3>
                                <h3 class="value"></h3>
                                <!-- <p class="text-xs text-green-500 leading-tight">▲ 9.1%</p> -->
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart1" height="25"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg border border-gray-200 shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Faltas do Dia</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3"><?= count($absentUsers) ?></h3>
                                <!-- <p class="text-xs text-red-500 leading-tight">▼ 42.8%</p> -->
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart2" height="<?= count($absentUsers) * 5 ?>"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/3 px-2">
                    <div class="rounded-lg border border-gray-200 shadow-sm mb-4">
                        <div class="rounded-lg bg-white shadow-lg md:shadow-xl relative overflow-hidden">
                            <div class="px-3 pt-8 pb-10 text-center relative z-10">
                                <h4 class="text-sm uppercase text-gray-500 leading-tight">Horas no Mês</h4>
                                <h3 class="text-3xl text-gray-700 font-semibold leading-tight my-3"><?= $hoursInMonth ?></h3>
                                <!-- <p class="text-xs text-green-500 leading-tight">▲ 8.2%</p> -->
                            </div>
                            <div class="absolute bottom-0 inset-x-0">
                                <canvas id="chart3" height="<?=($hoursInMonth / 10)?>"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php if (count($absentUsers) > 0) : ?>
        <div class="flex items-center px-4">
            <div class='overflow-x-auto w-full'>
                <table class='mx-auto max-w-4xl w-full whitespace-nowrap rounded-lg bg-white divide-y divide-gray-300 overflow-hidden'>
                    <thead class="bg-blue-400">
                        <tr class="text-white text-left">
                            <th class="font-semibold text-sm uppercase px-6 py-4">
                                Nome do Funcionário
                            </th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        <?php foreach ($absentUsers as $name) : ?>
                            <tr>
                                <td class="px-6 py-4">
                                    <div class="flex items-center space-x-3">
                                        <div class="inline-flex w-10 h-10">
                                            <img class='w-10 h-10 object-cover rounded-full' alt='User avatar' src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60">
                                        </div>
                                        <div>
                                            <p class="">
                                                <?= $name ?>
                                            </p>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>

            </div>
        </div>
    <?php endif ?>
</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
<script>
    const chartOptions = {
        maintainAspectRatio: false,
        legend: {
            display: false,
        },
        tooltips: {
            enabled: false,
        },
        elements: {
            point: {
                radius: 0
            },
        },
        scales: {
            xAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false
                }
            }],
            yAxes: [{
                gridLines: false,
                scaleLabel: false,
                ticks: {
                    display: false,
                    suggestedMin: 0,
                    suggestedMax: 10
                }
            }]
        }
    };
    //
    var ctx = document.getElementById('chart1').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [1, 2, 1, 3, 5, 4, 7],
            datasets: [{
                backgroundColor: "rgba(101, 116, 205, 0.1)",
                borderColor: "rgba(101, 116, 205, 0.8)",
                borderWidth: 2,
                data: [1, 2, 1, 3, 5, 4, 7],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart2').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 3, 2, 9, 7, 7, 4],
            datasets: [{
                backgroundColor: "rgba(246, 109, 155, 0.1)",
                borderColor: "rgba(246, 109, 155, 0.8)",
                borderWidth: 2,
                data: [2, 3, 2, 9, 7, 7, 4],
            }, ],
        },
        options: chartOptions
    });
    //
    var ctx = document.getElementById('chart3').getContext('2d');
    var chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: [2, 5, 1, 3, 2, 6, 7],
            datasets: [{
                backgroundColor: "rgba(246, 153, 63, 0.1)",
                borderColor: "rgba(246, 153, 63, 0.8)",
                borderWidth: 2,
                data: [2, 5, 1, 3, 2, 6, 7],
            }, ],
        },
        options: chartOptions
    });
</script>