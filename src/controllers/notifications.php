<?php
session_start();
requireValidSession();

$exception = null;

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$activeNotifications = [];
$user = User::getOne(['id' => $selectedUserId]);

$notifications = Notifications::getUserNotification(['user_id' => $selectedUserId]);

if (isset($_GET['delete'])) {
    try {
        Notifications::deleteById($_GET['delete']);
        addSuccessMsg('Notificação excluida com sucesso');
    } catch (Exception $e) {
        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Notificação não pode ser excluida');
        } else {
            $exception = $e;
        }
    }
}


// var_dump($notifications);

// $result = $obj->getActiveNotifications($selectedUserId);


// echo $result;




// loadTemplateView('notifications', ['exception' => $exception, 'notifications' => $activeNotifications]);
loadTemplateView('notifications', ['notifications' => $notifications, 'user' => $user, 'exception' => $exception]);
