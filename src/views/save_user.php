<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>

<main class="content">
    <?php
    renderTitle(
        'Cadastro de Usuário',
        'Crie e atualize o usuário',
        'icofont-user'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>

    <form action="#" method="post">
        <?php if ($id) : ?>
            <input type="hidden" name="id" value="<?= $id ?>">
        <?php endif ?>
        <!-- <div class="relative inline-flex w-full items-stretch mb-3">
            <div class="w-2/4">
                <div class="relative flex flex-wrap items-stretch mb-2">
                    <label for="name">Nome</label>
                    <input type="text" name="name" class="shadow outline-none focus:outline-none focus:ring w-full pr-10 form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $name ?>" placeholder="Nome Completo" />
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">person</i>
                    </span>
                    <div class="invalid-feedback">
                        <?= $errors['name'] ?>
                    </div>
                </div>
            </div>
            <div class=" ml-2 w-2/4">
                <div class="relative flex flex-wrap items-stretch mb-3">
                    <label for="email">E-Mail</label>
                    <input type="email" name="password" placeholder="user@email.com" value="<?= $email ?>" class="shadow outline-none focus:outline-none focus:ring w-full pr-10 form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $email ?>" >
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">email</i>
                    </span>
                    <div class="invalid-feedback">
                        <?= $errors['email'] ?>
                    </div>
                </div>

            </div>
        </div>
        <div class="relative inline-flex w-full items-stretch mb-3">
            <div class="w-1/4">
                <div class="relative flex flex-wrap items-stretch mb-3">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" placeholder="Informe a senha" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">lock_open</i>
                    </span>
                    <div class="invalid-feedback">
                        <?= $errors['password'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="relative inline-flex w-full items-stretch mb-3">
            <div class="w-1/4">
                <div class="relative flex flex-wrap items-stretch mb-3">
                    <label for="password">Confirme a Senha</label>
                    <input type="password" name="password" placeholder="Confirme a Senha" class="px-2 py-1 placeholder-gray-300 text-blue-600 relative bg-white rounded text-sm border border-blueGray-300 shadow outline-none focus:outline-none focus:ring w-full pr-10" />
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">lock</i>
                    </span>
                </div>
            </div>
        </div>
        <div class="relative inline-flex w-full items-stretch mb-3">
            <div class="w-2/4">
                <div class="relative flex flex-wrap items-stretch mb-3">
                    <label for="date">Data de Admissão</label>
                    <input type="date" name="date" placeholder="" class="px-2 py-1 placeholder-gray-300 text-gray-600 relative bg-white rounded text-sm border border-blueGray-300 shadow outline-none focus:outline-none focus:ring w-full pr-10" />
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">date_range</i>
                    </span>
                </div>
            </div>
            <div class=" ml-2 w-2/4">
                <div class="relative flex flex-wrap items-stretch mb-3">
                    <label for="date2">Data de Desligamento</label>
                    <input type="date" name="date2" placeholder="" class="px-2 py-1 placeholder-gray-300 text-blueGray-600 relative bg-white rounded text-sm border border-blueGray-300 shadow outline-none focus:outline-none focus:ring w-full pr-10" />
                    <span class="z-10 leading-snug font-normal text-center text-blueGray-300 absolute bg-transparent rounded text-base items-center justify-center w-8 right-0 px-2 py-1 mr-2">
                        <i class="material-icons mr-2 text-gray-300">date_range</i>
                    </span>
                </div>

            </div>
        </div>
        </div>
        <div class="flex justify-between w-full mb-3">
            <div class="ml-4 w-2/4">
                <label class="items-center mt-1">
                    <input type="checkbox" class="form-checkbox h-5 w-5 text-pink-600"><span class="ml-2 text-gray-600">Administrador</span>
                </label>
            </div>
            <div class="flex justify-between">
                <div class="">
                    <button class=" text-sm font-medium bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg p-2 border border-gray-400 hover:border-red-400">Salvar</button>
                    <button href="/users.php" class="no-underline mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border hover:border-red-400">Cancelar</button>
                </div>

            </div>
        </div>

        <h1>JULIAN</h1>
        <hr>
        <br> -->


        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="name">Nome</label>
                <input type="text" id="name" name="name" value="<?= $name ?>" placeholder="Informe o nome" class="shadow form-control <?= $errors['name'] ? 'is-invalid' : '' ?> " value="<?= $name ?>">
                <div class="invalid-feedback">
                    <?= $errors['name'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" value="<?= $email ?>" placeholder="Informe o email" class="shadow form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?>">
                <div class="invalid-feedback">
                    <?= $errors['email'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="password">Senha</label>
                <input type="password" id="password" name="password" placeholder="Informe a senha" class="shadow form-control <?= $errors['password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="confirm_password">Confirmação de Senha</label>
                <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirme a senha" class="shadow form-control <?= $errors['confirm_password'] ? 'is-invalid' : '' ?>">
                <div class="invalid-feedback">
                    <?= $errors['confirm_password'] ?>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="start_date">Data de Admissão</label>
                <input type="date" id="start_date" name="start_date" class="shadow form-control <?= $errors['start_date'] ? 'is-invalid' : '' ?>" value="<?= $start_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['start_date'] ?>
                </div>
            </div>
            <div class="form-group col-md-6">
                <label for="end_date">Data de Desligamento</label>
                <input type="date" id="end_date" name="end_date" class="shadow form-control <?= $errors['end_date'] ? 'is-invalid' : '' ?>" value="<?= $end_date ?>">
                <div class="invalid-feedback">
                    <?= $errors['end_date'] ?>
                </div>
            </div>
        </div>
        <div class="flex justify-between w-full mb-3">
            <div class="form-check">
                <input class="shadow form-check-input <?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= $is_admin ? 'checked' : '' ?>" type="checkbox" id="is_admin" name="is_admin">
                <label class="form-check-label" for="is_admin">
                    Administrador
                </label>
                <div class="invalid-feedback">
                    <?= $errors['is_admin'] ?>
                </div>
            </div>
            <div class="flex justify-between">
                <div class="">
                    <button class="shadow text-sm font-medium bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg p-2 border border-gray-400 hover:border-red-400">Salvar</button>
                    <button href="/users.php" class="no-underline shadow mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border hover:border-red-400">Cancelar</button>
                </div>
            </div>
        </div>
    </form>
</main>