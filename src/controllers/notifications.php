<?php

use phpDocumentor\Reflection\Location;

session_start();
requireValidSession();

$exception = null;
$noficationData = [];

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$activeNotifications = [];
$user = User::getOne(['id' => $selectedUserId]);

$notifications = Notifications::getUserNotification(['user_id' => $selectedUserId]);
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');

if (isset($_GET['delete'])) {
    try {
        Notifications::deleteById($_GET['delete']);
        addSuccessMsg('Notificação excluida com sucesso');
        header('Location: day_records.php');
    } catch (Exception $e) {
        if (stripos($e->getMessage(), 'FOREIGN KEY')) {
            addErrorMsg('Notificação não pode ser excluida');
        } else {
            $exception = $e;
        }
    }
}

if (isset($_GET['update'])) { 
    $notification = Notifications::getOne(['id' => $_GET['update']]);
    $notificationData = $notification->getValues();
    $notification->active = null;
    $notification->date = date('Y/m/d');
    // print_r($notification);
    $notification->update();
    header('Location: notifications.php');
    
    // $notification->update();
}


// var_dump($notifications);

// $result = $obj->getActiveNotifications($selectedUserId);


// echo $result;




// loadTemplateView('notifications', ['exception' => $exception, 'notifications' => $activeNotifications]);
loadTemplateView('notifications', ['notifications' => $notifications, 'notActive' => $notActive, 'user' => $user, 'exception' => $exception]);
