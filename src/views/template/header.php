<!DOCTYPE html>
<html lang="PT-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/comum.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/icofont.min.css"> -->
    <link rel="stylesheet" href="assets/css/template.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Batimento De Ponto</title>
</head>

<body class="">
    <header class="header">
        <div class="menu-toggle mx-3">
            <i class="material-icons mr-2">menu</i>
        </div>
        <div class="logo">
            <div class="card-head">
                <!-- <img style="width:14rem;" src="../assets/img/logo9.png"> -->
            </div>
        </div>
        <div class="spacer">

        </div>
        <div class="dropdown mr-8">
            <div class="dropdown-button">
                <i class="material-icons mr-8">notifications_active</i>
                <img class="avatar" src="<?= "http://www.gravatar.com/avatar.php?gravatar_id=" . md5(strtolower(trim($_SESSION['user']->email))) ?>" alt="user" class="src">
                <span class="ml-3 text-white">
                    <?= $_SESSION['user']->name ?>
                </span>
                <i class="icofont-simple-down ml-2"></i>
                <div class="dropdown-content">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="logout.php">
                                <i class="icofont-logout mr-2">Sair</i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>