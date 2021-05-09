<head>
    <meta charset="UTF-8">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css"> -->
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
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time1 ? 'green-400' : 'gray-200'?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-gray-400 mr-3">
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
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time2 ? 'green-400' : 'gray-200'?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-gray-400 mr-3">
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
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time3 ? 'green-400' : 'gray-200'?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-gray-400 mr-3">
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
                    <div class="widget w-full p-4 rounded-lg bg-white border border-<?= $workingHours->time4 ? 'green-400' : 'gray-200'?> shadow-md">
                        <div class="flex items-center justify-items-center">
                            <div class="items-center text-gray-400 mr-3">
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
            <a href="record.php" class="bg-transparent shadow-lg mb-4 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg p-2 border border-gray-400 hover:border-blue-400">
                <i class="icofont-check mr-1 ">
                    Registrar Ponto
                </i>
            </a>
        </div>
    </div>
    <!-- <?php if ($user->is_admin) : ?> -->
        <form class="form-group mt-5" action="record.php" method="POST">
            <div class="input-group no-border mb-4">
                <input class="form-control col-lg-2 col-md-2" type="time" step="1" name="forcedTime" placeholder="informe o horário para simular">
                <button class="btn btn-sm btn-primary ml-3">
                    Simular Ponto
                </button>
            </div>
        </form>
    <!-- <?php endif ?> -->
</main>