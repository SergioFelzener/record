<!DOCTYPE html>
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

<body class="bg-white">

    <form class="form-login" action="#" method="POST">
        <div class="login-card card shadow-2xl border-1 border-gray-400">

            <div class="card-header bg-black">
                <img class="w-80 mx-auto mt-0" src="../assets/img/logopreto.png">
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
            <div class="card-footer bg-black">
             
                    <span class="text-gray-200">Sistema de ®egistro de ponto.</span>
                
                <button class="btn btn-primary float-right px-6">Entrar</button>
            </div>
        </div>
    </form>
    <?= $texto ?>
</body>

</html>