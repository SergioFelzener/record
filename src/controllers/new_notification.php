<?php
session_start();
requireValidSession(true);

$exception = null;
$userData = [];
$users = User::get();



if(count($_POST) === 0 && isset($_GET['send'])) {
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    $userData['password'] = null;
} elseif(count($_POST) > 0) {
    try {
        $dbUser = new User($_POST);
        if($dbUser->id) {
            $dbUser->update();
            addSuccessMsg('Usuário alterado com sucesso!');
            header('Location: users.php');
            exit();
        } else {
            $dbUser->insert();
            addSuccessMsg('Usuário cadastrado com sucesso!');
        }
        $_POST = [];
    } catch(Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}


loadTemplateView('new_notification', ['users' => $users, 'exception' => $exception]);