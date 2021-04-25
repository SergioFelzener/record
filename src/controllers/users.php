<?php

session_start();
requireValidSession(true);
$user = $_SESSION['user'];
$selectedUserId = $user->id;
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');

$exception = null;

if (isset($_GET['delete'])) {
    try {
        User::deleteById($_GET['delete']);
        addSuccessMsg('Usuário excluído com sucesso');
    } catch (Exception $e) {
        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Usuário com registros no sistema');
        } else {
            $exception = $e;
        }
    }
}

$users = User::get();

foreach ($users as $user) {
    $user->start_date = (new DateTime($user->start_date))->format('d/m/Y');
    if ($user->end_date) {
        $user->end_date = (new DateTime($user->end_date))->format('d/m/Y');
    }
}

loadTemplateView('users', ['users' => $users, 'exception' => $exception, 'notActive' => $notActive]);
