
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
</head>



<main class="content">
    <?php

    renderTitle(
        'Registrar Ponto',
        'Mantenha seu ponto consistente ',
        'icofont-check-alt'
    );

    include(TEMPLATE_PATH . "/messages.php");

    ?>
    <div class="card">
        <div class="card-header">
            <h3><?= $today ?></h3>
            <p class="mb-0">Os batimentos efetuados hj</p>
        </div>
        <div class="card-body">
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 1: <?= $workingHours->time1 ?? '---' ?></span>
                <span class="record">Saída 1: <?= $workingHours->time2 ?? '---' ?></span>
            </div>
            <div class="d-flex m-5 justify-content-around">
                <span class="record">Entrada 2: <?= $workingHours->time3 ?? '---' ?></span>
                <span class="record">Saída 2: <?= $workingHours->time4 ?? '---' ?></span>
            </div>
        </div>
        <div class="card-footer d-flex justify-content-center">
            <a href="record.php" class="btn btn-success btn-lg">
                <i class="icofont-check mr-1 ">
                    Bater Ponto
                </i>
            </a>
        </div>
    </div>
    <?php if ($user->is_admin) : ?>
    <form class="form-group mt-5"action="record.php" method="POST">
    <div class="input-group no-border">
        <input class="form-control col-lg-2 col-md-2" type="time" step="1" name="forcedTime" placeholder="informe o horário para simular">
        <button class="btn btn-sm btn-primary ml-3">
            Simular Ponto
        </button>
    </div>

    </form>
    <?php endif ?>
</main>