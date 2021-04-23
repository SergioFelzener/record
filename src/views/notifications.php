<main class="content">
    <?php
    renderTitle(
        'Notificações',
        'Notificações Ativas',
        'icofont-notification'
    );
    ?>

    <?php if($user->is_admin == 1) : ?>
    <button class="bg-transparent shadow-lg mb-4 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg p-2 border border-gray-400 hover:border-blue-400">
        <a class="p-2" href="new_notification.php">Nova Notificação</a>
    </button>
    <?php endif ?>

    <div class="flex flex-col border border-gray-400">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Remetente / Destinatário
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Menssagem
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ações
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($notifications as $notification) : ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 shadow-lg border border-gray-200 rounded-full" src="../assets/img/robot.jpg" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                   De: Administrador do Sistema
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    Para : <?= $user->email ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-center text-gray-900"><?= $notification->title ?></div>
                                    </td>
                                    <td class="px-8 py-6 text-center whitespace-nowrap">
                                        <?php if ($notification->active == 1) : ?>
                                            <span class="px-4 py-1 inline-flex border border-green-200 shadow-md text-xs text-center leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        <?php else : ?>
                                            <span class="px-4 py-1 inline-flex text-xs border border-blue-200 shadow-md text-center leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                Lida
                                            </span>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <div class="inline-flex mt-4">
                                            <div class="ml-8">
                                                <button class="">
                                                    <a href="notifications.php?update=<?= $notification->id ?>" class="p-2 bg-transparent shadow-lg mb-4 ml-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg border border-gray-400 hover:border-blue-400">Marcar como Lida</a>
                                                
                                                    <a href="?delete=<?= $notification->id ?>" class="bg-transparent shadow-lg mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border-red-400">Apagar</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>