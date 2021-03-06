<!-- <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head> -->

<main class="content">
    <?php
    renderTitle(
        'Nova Notificação',
        'Selecione o usuário a ser notificado',
        'forward_to_inbox',

    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="antialiased font-sans bg-gray-50">
        <div class="container sm:px-8">

            <form action="#" method="post">
                <?php if ($id) : ?>
                    <input type="hidden" name="id" value="<?= $id ?>">
                <?php endif ?>
                <div class="input-group col-md-4">
                    <span for="user_id">Usuário : </span>
                    <?php if ($user->is_admin) : ?>
                        <select name="user_id" id="user_id" class="form-control mr-2 mb-4 border border-gray-300 shadow-md rounded-lg py-1 pl-2" placeholder="Selecione o usuário..." required>
                            <option value="">Selecione</option>
                            <?php
                            foreach ($users as $user) {
                                $selected = $user->id === $selectedUserId ? 'selected' : '';
                                echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                            }
                            ?>
                        </select>
                    <?php endif ?>
                </div>
                <div class="grid grid-cols-6 gap-2">
                    <div class="col-span-6 sm:col-span-2">
                        <span for="title">Titulo</span>
                        <input type="text" id="title" name="title" value="<?= $title ?>" placeholder="Informe Título" class="shadow-md form-control <?= $errors['title'] ? 'is-invalid' : '' ?> p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full border border-gray-200 sm:text-sm rounded-md" required>
                        <div class="invalid-feedback">
                            <?= $errors['title'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10 mt-4">
                        <label for="msg">Mensagem</label>
                        <textarea id="msg" name="msg" placeholder="Digite a mensagem" class="w-full <?= $errors['msg'] ? 'is-invalid' : '' ?> px-3 py-2 mt-1 text-gray-700 border rounded-lg focus:outline-none shadow-md" rows="4" required></textarea>
                        <div class="invalid-feedback">
                            <?= $errors['msg'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="flex justify-center w-full mt-5 mb-3">
                        <div class="flex justify-between">
                            <div class="">
                                <button class="shadow-md text-sm font-medium bg-gray-50 text-gray-600 hover:bg-blue-100 hover:text-blue-700 rounded-lg p-2 border border-gray-400 hover:border-1 hover:border-blue-400">Enviar</button>
                                <a href="/notifications.php" style="text-decoration: none;" class="no-underline shadow-md mb-4 mr-3 text-sm font-medium border border-gray-400 bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border hover:border-red-400">desistir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>