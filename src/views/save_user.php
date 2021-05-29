<head>
    <script src="assets/js/powerpass.js"></script>
</head>

<main class="content">
    <?php
    renderTitle(
        'Cadastro de Usuário',
        'Crie e atualize o usuário',
        'person_add'
    );

    include(TEMPLATE_PATH . "/messages.php");
    ?>


    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-1 md:gap-6">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="#" method="POST" enctype="multipart/form-data">
                    <?php if ($id) : ?>
                        <input type="hidden" name="id" value="<?= $id ?>">
                    <?php endif ?>
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-2">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                                    <input type="text" name="name" id="name" value="<?= $name ?>" class="<?= $errors['name'] ? 'is-invalid' : '' ?> p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border border-gray-200 sm:text-sm rounded-md">
                                    <div class="invalid-feedback text-red-600 ml-1" style="font-size:10px;">
                                        <?= $errors['name'] ?>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="email" class="block text-sm font-medium text-gray-700">E-Mail</label>
                                    <input type="email" name="email" id="email" value="<?= $email ?>" class="<?= $errors['email'] ? 'is-invalid' : '' ?> p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border border-gray-200 sm:text-sm rounded-md">
                                    <div class="invalid-feedback text-red-600 ml-1" style="font-size:10px;">
                                        <?= $errors['email'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-2">
                                <div id="printPass"></div>
                                <div id="printPowerPass"></div>
                                    <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                                    <input type="password" name="password" id="password" onkeyup="powerPass()"class="<?= $errors['password'] ? 'is-invalid' : '' ?> p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border border-gray-200 sm:text-sm rounded-md">
                                    <div class="invalid-feedback text-red-600 ml-1" style="font-size:10px;">
                                        <?= $errors['password'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="confirm_password" class="block text-sm font-medium text-gray-700">Confirma Senha</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="<?= $errors['confirm_password'] ? 'is-invalid' : '' ?> p-2 mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm border border-gray-200 sm:text-sm rounded-md">
                                    <div class="invalid-feedback text-red-600 ml-1" style="font-size:10px;">
                                        <?= $errors['confirm_password'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-6 mt-4">
                                <div class="col-span-6 sm:col-span-2">
                                    <label class="block text-sm font-medium text-gray-700 mb-2">
                                        Photo
                                    </label>
                                    <div class="flex items-center">
                                        <span class="inline-block h-12 w-12 rounded-full overflow-hidden bg-gray-100">
                                            <svg class="h-full w-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-4 col-span-1 sm:col-span-2">
                                <label class="block text-sm font-medium text-gray-700">
                                    Cover photo
                                </label>
                                <div class="mt-1 flex justify-center px-6 pt-5 pb-6 border-2 border-gray-300 border-dashed rounded-md">
                                    <div class="space-y-1 text-center">
                                        <svg class="mx-auto h-12 w-12 text-gray-400" stroke="currentColor" fill="none" viewBox="0 0 48 48" aria-hidden="true">
                                            <path d="M28 8H12a4 4 0 00-4 4v20m32-12v8m0 0v8a4 4 0 01-4 4H12a4 4 0 01-4-4v-4m32-4l-3.172-3.172a4 4 0 00-5.656 0L28 28M8 32l9.172-9.172a4 4 0 015.656 0L28 28m0 0l4 4m4-24h8m-4-4v8m-12 4h.02" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                        <div class="flex text-sm text-gray-600">
                                            <label for="file-upload" class="relative justify-center cursor-pointer bg-white rounded-md font-medium text-indigo-600 hover:text-indigo-500 focus-within:outline-none focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                                                <span>Upload a file</span>
                                                <input id="file-upload" name="file-upload" type="file" class="sr-only">
                                            </label>
                                        </div>
                                        <p class="text-xs text-gray-500">
                                            PNG, JPG, GIF up to 10MB
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="grid grid-cols-6 gap-2 mt-6">
                                <div class="col-span-6 sm:col-span-2">
                                    <label for="start_date">Data de Admissão</label>
                                    <input type="date" id="start_date" name="start_date" class="<?= $errors['start_date'] ? 'is-invalid' : '' ?> ml-2 border border-gray-200 p-1 rounded-md shadow-md" value="<?= $start_date ?>">
                                    <div class="invalid-feedback text-red-600 mt-4" style="font-size:10px;">
                                        <?= $errors['start_date'] ?>
                                    </div>
                                </div>

                                <div class="col-span-6 sm:col-span-2">
                                    <label for="end_date">Data de Desligamento</label>
                                    <input type="date" id="end_date" name="end_date" class="ml-2 border border-gray-200 p-1 rounded-md shadow-md  <?= $errors['end_date'] ? 'is-invalid' : '' ?>" value="<?= $end_date ?>">
                                    <div class="invalid-feedback">
                                        <?= $errors['end_date'] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="flex justify-between w-full mt-3 mb-3">
                                <div class="form-check">
                                    <input class="shadow-md form-check-input <?= $errors['is_admin'] ? 'is-invalid' : '' ?>" <?= $is_admin ? 'checked' : '' ?>" type="checkbox" id="is_admin" name="is_admin">
                                    <label class="form-check-label" for="is_admin">
                                        Administrador
                                    </label>
                                    <div class="invalid-feedback">
                                        <?= $errors['is_admin'] ?>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <div class="">
                                        <button class="shadow-md text-sm font-medium bg-gray-100 text-gray-600 hover:bg-green-50 hover:text-green-700 rounded-lg p-2 border border-gray-400 hover:border-green-400">Salvar</button>
                                        <a href="/users.php" style="text-decoration:none;" class="shadow-md mb-4 mr-3 text-sm font-medium bg-gray-100 text-gray-600 hover:bg-red-50 hover:text-red-700 rounded-lg p-2 border border-gray-400 hover:border hover:border-red-400">Cancelar</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
</main>