<main class="content">

    <?php

    renderTitle(
        'Relatório Mensal',
        'Acompanhe seus batimentos',
        'icofont-look'
    );

    ?>

    <div class="flex items-center justify-center">
        <div class="bg-white p-4 rounded">
            <div class="md:grid md:grid-cols-2 md:gap-4 space-y-4 md:space-y-0 mb-2">
                <div class="shadow border rounded-lg">
                    <div class="flex items-center space-x-4 p-4">
                        <div class="flex items-center p-4 bg-blue-500 text-white rounded-lg">
                            <i class="material-icons">more_time</i>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-500 font-semibold">Horas Trabalhadas</p>
                            <div class="flex items-baseline space-x-4">
                                <h2 class="text-2xl font-semibold">
                                    <?= $sumOfWorkedTime ?>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shadow border rounded-lg">
                    <div class="flex items-center space-x-4 p-4">
                        <div class="flex items-center p-4 bg-blue-500 text-white rounded-lg">
                            <i class="material-icons">restore</i>
                        </div>
                        <div class="flex-1">
                            <p class="text-gray-500 font-semibold">Saldo</p>
                            <div class="flex items-baseline space-x-4">
                                <h3 class="text-2xl font-semibold">
                                    <?= $balance ?>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="antialiased font-sans bg-gray-50">
        <div class="container px-4 sm:px-8">
            <div class="py-8">
                <div class="my-2 flex sm:flex-row flex-col">
                    <div class="flex flex-row sm:mb-0">
                        <div class="relative">
                            <form class="mb-4" action="#" method="post">
                                <div class="input-group">
                                    <?php if ($user->is_admin) : ?>
                                        <div class="input-group-prepend">
                                            <span class="input-group-text mr-0 ml-1" id="inputGroup-sizing-sm">Selecione o usuário</span>
                                        </div>
                                        <select name="user" class="form-control mr-2 border border-gray-300 shadow-xl rounded-lg py-1 pl-2" placeholder="Selecione o usuário...">
                                            <option value="">Selecione o usuário</option>
                                            <?php
                                            foreach ($users as $user) {
                                                $selected = $user->id === $selectedUserId ? 'selected' : '';
                                                echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                                            }
                                            ?>
                                        </select>
                                    <?php endif ?>
                                    <select name="period" class="form-control mr-2 border border-gray-300 shadow-xl rounded-lg py-1 pl-2" placeholder="Selecione o período...">
                                        <?php
                                        foreach ($periods as $key => $month) {
                                            $selected = $key === $selectedPeriod ? 'selected' : '';
                                            echo "<option value='{$key}' {$selected}>{$month}</option>";
                                        }
                                        ?>
                                    </select>
                                    <button class="btn btn-primary bg-gray-50 rounded p-1 ml-2 hover:text-blue-600">
                                        <i class="material-icons">person_search</i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
                    <div class="inline-block min-w-full shadow-xl rounded-lg overflow-hidden border border-gray-200">
                        <table class="min-w-full leading-normal">
                            <thead>
                                <tr>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Dia
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Entrada 1
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Saída 1
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Entrada 2
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Saída 2
                                    </th>
                                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-blue-500 text-center text-xs font-semibold text-white uppercase tracking-wider">
                                        Saldo
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($report as $registry) : ?>
                                    <tr>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <div class="flex items-center">
                                                <p class="text-gray-900 whitespace-no-wrap">
                                                    <?= formatDateWithLocale($registry->work_date, '%A, %d de %B de %Y') ?>
                                                </p>
                                            </div>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 text-center whitespace-no-wrap"><?= $registry->time1 ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 text-center whitespace-no-wrap"><?= $registry->time2 ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 text-center whitespace-no-wrap"><?= $registry->time3 ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 text-center whitespace-no-wrap"><?= $registry->time4 ?></p>
                                        </td>
                                        <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                                            <p class="text-gray-900 text-center whitespace-no-wrap">
                                                <?= $registry->getBalance() ?>
                                            </p>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>