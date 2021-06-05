<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
    <!-- Hotjar Tracking Code for http://52.152.225.175 -->
<script>
    (function(h,o,t,j,a,r){
        h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
        h._hjSettings={hjid:2438765,hjsv:6};
        a=o.getElementsByTagName('head')[0];
        r=o.createElement('script');r.async=1;
        r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
        a.appendChild(r);
    })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
</script>
</head>



<main class="content">
    <?php

    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto consistente ',
        'done_all'
    );

    include(TEMPLATE_PATH . "/messages.php");

    ?>
    <div class="card-header">
        <h3><?= $today ?></h3>
        <p class="mb-0">Os batimentos efetuados hoje</p>
    </div>

    <div class="max-w-2xl w-full mx-auto py-6 sm:px-6 lg:px-8">
        <div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

                <div class="w-full lg:w-1/2">
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time1 ? 'green-400' : 'red-400' ?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-<?= $workingHours->time1 ? 'blue-500' : 'gray-200' ?> mr-3">
                                <i style="font-size: 40px;" class="material-icons mr-2">logout</i>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"><?= $workingHours->time1 ?? '---' ?></div>
                                <div class="text-sm text-gray-400">Entrada 1</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time2 ? 'green-400' : 'red-400' ?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-<?= $workingHours->time2 ? 'blue-500' : 'gray-200' ?> mr-3">
                                <i style="font-size: 40px;" class="material-icons mr-2">restaurant</i>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"><?= $workingHours->time2 ?? '---' ?></div>
                                <div class="text-sm text-gray-400">Saída 1</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <div class="flex flex-col lg:flex-row w-full lg:space-x-2 space-y-2 lg:space-y-0 mb-2 lg:mb-4">

                <div class="w-full lg:w-1/2">
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time3 ? 'green-400' : 'red-400' ?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-<?= $workingHours->time3 ? 'blue-500' : 'gray-200' ?> mr-3">
                                <i style="font-size: 40px;" class="material-icons mr-2">logout</i>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"><?= $workingHours->time3 ?? '---' ?></div>
                                <div class="text-sm text-gray-400">Entrada 2</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full lg:w-1/2">
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time4 ? 'green-400' : 'red-400' ?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-<?= $workingHours->time4 ? 'blue-500' : 'gray-200' ?> mr-3">
                                <i style="font-size: 40px;" class="material-icons mr-2">home</i>
                            </div>
                            <div class="flex flex-col justify-center">
                                <div class="text-lg"><?= $workingHours->time4 ?? '---' ?></div>
                                <div class="text-sm text-gray-400">Saída 2</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>

    <div class="flex justify-center content-center">
        <div class="">
            <a href="record.php" class="bg-transparent shadow-md mb-4 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg p-2 border border-gray-400 hover:border-blue-400">
                <i class="icofont-check mr-1 ">
                    Registrar Ponto
                </i>
            </a>
        </div>
    </div>
    <form class="form-group mt-8" action="record.php" method="POST">
        <div class="input-group no-border ml-4">
            <input class="border border-gray-400 rounded-md px-2 shadow-md" type="time" step="1" name="forcedTime" placeholder="informe o horário para simular">
            <button class="bg-transparent shadow-md mb-4 px-1 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg ml-2 rounded-mdpx-2 py-1 border border-gray-400 hover:border-blue-400" title="Simulação de ponto para testes / ou registro de ponto em horário diferente do atual.">
                Simular Ponto
            </button>
        </div>
    </form>
</main>