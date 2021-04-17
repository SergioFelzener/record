<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<main class="content">
    <?php
    renderTitle(
        'Nova Notificação',
        'Selecione o usuário a ser notificado',
        'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>
    <div class="antialiased font-sans bg-gray-50">
        <div class="container sm:px-8">

            <form action="#" method="post">
              
                    <input type="text" name="id" value="<?= $id ?>">
               
                <div class="input-group col-md-4">
                    <?php if ($user->is_admin) : ?>
                        <select name="user" class="form-control mr-2 mb-4 border border-gray-300 shadow-xl rounded-lg py-1 pl-2" placeholder="Selecione o usuário...">
                            <option value="">Selecione o usuário</option>
                            <?php
                            foreach ($users as $user) {
                                $selected = $user->id === $selectedUserId ? 'selected' : '';
                                echo "<option value='{$user->id}' {$selected}>{$user->name}</option>";
                            }
                            ?>
                        </select>
                    <?php endif ?>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="title">Titulo</label>
                        <input type="text" id="title" name="title" value="<?= $title ?>" placeholder="Informe Título" class="shadow form-control <?= $errors['title'] ? 'is-invalid' : '' ?> " value="<?= $title ?>">
                        <div class="invalid-feedback">
                            <?= $errors['title'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-10">
                        <label for="msg">Mensagem</label>
                        <textarea id="msg" name="msg" placeholder="Digite a mensagem" class="shadow form-control <?= $errors['msg'] ? 'is-invalid' : '' ?> " rows="4"></textarea>
                        <div class="invalid-feedback">
                            <?= $errors['msg'] ?>
                        </div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="flex justify-center w-full mt-5 mb-3">
                        <div class="flex justify-between">
                            <div class="">
                                <button class="shadow text-sm font-medium bg-gray-50 text-gray-600 hover:bg-blue-100 hover:text-blue-700 rounded-lg p-2 border-1 border-gray-400 hover:border-1 hover:border-blue-400">Enviar</button>
                                <a href="/notifications.php" style="text-decoration: none;" class="no-underline shadow mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border hover:border-red-400">desistir</a>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</main>