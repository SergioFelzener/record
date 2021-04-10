<main class="content">

    <?php
    renderTitle(
        'Cadastro de usuários',
        'Mantenha os dados Atualizados',
        'icofont-users'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>


    <button class="bg-transparent shadow-lg mb-4 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-blue-50 hover:text-blue-700 rounded-lg p-2 border border-gray-400 hover:border-blue-400">
        <a href="save_user.php">Novo usuario</a>
    </button>


    <div class="flex flex-col border border-gray-400">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Nome / E-mail
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Adminssão / Desligamento
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Status
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Role
                                </th>
                                <th scope="col" class="px-6 py-3 text-center text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Ações
                                </th>

                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center">
                                            <div class="flex-shrink-0 h-10 w-10">
                                                <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                                            </div>
                                            <div class="ml-4">
                                                <div class="text-sm font-medium text-gray-900">
                                                    <?= $user->name ?>
                                                </div>
                                                <div class="text-sm text-gray-500">
                                                    <?= $user->email ?>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="text-sm text-center text-gray-900"><?= $user->start_date ?></div>
                                        <div class="text-sm text-center text-red-300"><?= $user->end_date ?></div>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        <?php if (!$user->end_date) : ?>
                                            <span class="px-2 inline-flex text-xs text-center leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                Active
                                            </span>
                                        <?php else : ?>
                                            <span class="px-2 inline-flex text-xs text-center leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                                User OFF
                                            </span>
                                        <?php endif ?>
                                    </td>
                                    <td class="px-6 py-4 text-center whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs text-center leading-5 font-semibold text-blue-800">
                                            <?php if ($user->is_admin == 1) : ?>
                                                Admin
                                        </span>
                                    <?php else : ?>
                                        <span class="px-2 inline-flex text-xs text-center leading-5 font-semibold text-gray-500">
                                            User
                                        </span>
                                    <?php endif ?>
                                    </td>
                                    <td>
                                        <div class="inline-flex mt-4">
                                            <div class="ml-8">
                                                <button class="bg-transparent shadow-lg mb-4 ml-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg p-2 border border-gray-400 hover:border-green-400">
                                                    <a href="save_user.php?update=<?= $user->id ?>">Editar</a>
                                                </button>
                                                <button class="bg-transparent shadow-lg mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border-red-400">
                                                    <a href="?delete=<?= $user->id ?>">Apagar</a>
                                                </button>
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