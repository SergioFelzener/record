<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="assets/css/comum.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css">
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Record - Time to Clock In</title>
</head>

<body class="bg-white bg-opacity-25">

    <form class="form-login" action="#" method="POST">
        <div class="login-card card shadow-2xl border-1 border-blue-900">

            <div class="card-header bg-blue-400">
                <img class="w-80 mx-auto mt-0" src="../assets/img/logorecordgood.png">
            </div>
            <div class="flex justify-center content-center px-3 pt-2">
                <h2 class="text-xl font-black">LOGIN</h2>
            </div>
            <div class="card-body">
                <?php include(TEMPLATE_PATH . '/messages.php') ?>
                <div class="form-group">
                    <label for="email">E-Mail</label> <!-- Passando o caminho correto caso nao passe o $_POST no metodo loadView('name da view', $_POST['email']) para manter o valor do email salvo na tela com o Value-->
                    <input type="email" id="email" name="email" class="form-control <?= $errors['email'] ? 'is-invalid' : '' ?>" value="<?= $email ?> " placeholder="Informe o e-mail" autofocus>
                    <div class="invalid-feedback"><?= $errors['email'] ?></div>
                </div>
                <div class="form-group">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" class="form-control <?= $errors['password'] ? 'is-invalid' : '' ?>" placeholder="Informe a senha" autofocus>
                    <div class="invalid-feedback"><?= $errors['password'] ?></div>
                </div>
            </div>
            <div class="flex justify-end ">
                <a style="text-decoration: none;"class="text-sm font-medium text-gray-700 bg-gray-100 hover:bg-blue-50 hover:text-blue-700 rounded-lg p-2" href="forgot_pass.php">
                    <i class="material-icons mr-2">password</i>
                    Esqueci minha senha
                </a>
            </div>
            <div class="card-footer bg-blue-400">

                <span class="text-white">Sistema de ®egistro de ponto.</span>

                <button class="float-right px-4 shadow-2xl text-sm bg-purple-800 text-white hover:bg-purple-400  rounded-lg p-2 border border-gray-200 hover:text-black hover:border-purple-800">Entrar</button>
                
            </div>
            
        </div>
    </form>
    <?= $texto ?>
</body>

</html>