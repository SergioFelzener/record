<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <title>Record - Time to Clock In</title>
</head>

<body class="bg-white bg-opacity-25">

    <form class="form-login" action="#" method="POST">
        <div class="login-card card shadow-2xl border-1 border-blue-900">

            <div class="card-header bg-gray-100">
                <img class="w-80 mx-auto mt-0" src="../assets/img/logoRecNew.png">
            </div>
            <div class="flex justify-center content-center px-3 pt-2">
                <h2 class="text-xl font-black">REDEFINIR SENHA</h2>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">Informe seu E-Mail : </label> <!-- Passando o caminho correto caso nao passe o $_POST no metodo loadView('name da view', $_POST['email']) para manter o valor do email salvo na tela com o Value-->
                    <input type="email" id="email" name="email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?> " autofocus>
                    <div class="invalid-feedback"><?= $errors['email'] ?></div>
                </div>
                <div class="form-group">
                    <label for="name">Informe seu Nome : </label> <!-- Passando o caminho correto caso nao passe o $_POST no metodo loadView('name da view', $_POST['email']) para manter o valor do email salvo na tela com o Value-->
                    <input type="text" id="name" name="name" class="form-control <?= $errors['name'] ? 'is-invalid' : '' ?>" value="<?= $name ?> " autofocus>
                    <div class="invalid-feedback"><?= $errors['name'] ?></div>
                </div>
            </div>
            <div class="card-footer bg-gray-100">
             
                    <span class="text-white"></span>
                
                <button class="float-right px-4 shadow-2xl text-sm bg-blue-800 text-white hover:bg-blue-400  rounded-lg p-2 border border-gray-200 hover:text-black hover:border-blue-800">Enviar</button>
                <a style="text-decoration: none;" href="login.php" class="float-right mr-1 px-4 shadow-2xl text-sm bg-blue-800 text-white hover:bg-blue-400  rounded-lg p-2 border border-gray-200 hover:text-black hover:border-blue-800">Voltar</a>
            </div>
        </div>
    </form>
    <?= $texto ?>
</body>

</html>