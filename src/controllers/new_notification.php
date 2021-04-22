<?php

session_start();
requireValidSession(true);

$exception = null;
$userData = [];
$users = User::get();
$notifications = Notifications::get();

// $notification = new Notifications($_POST);


// echo "PASSOU AQUI ";
// var_dump($_POST);

if (count($_POST) > 0) { 
    try {
        $newNotification = new Notifications($_POST);
        $newNotification->insert();
        addSuccessMsg('Mensagem enviada com sucesso');
        $_POST = [];
    } catch(Exception $e) { 
        $exception = $e;
    }

}



// if (count($_POST) > 0) {
//     $notification = new Notifications($_POST);
//     $notification->insert();
//     addSuccessMsg('Mensagen enviada com sucesso !');
// } else { 
//     addErrorMsg('Mensagem nao enviada');
// }



// print_r($newNotification);



// if (count($_POST) === 0 && isset($_GET['send'])) {
//     $notificationData = $user->getValues();
//     $userData['password'] = null;
// } elseif (count($_POST) > 0) {
//     try {
//         $dbUser = new User($_POST);
//         if ($dbUser->id) {
//             $dbUser->update();
//             addSuccessMsg('Usuário alterado com sucesso!');
//             header('Location: users.php');
//             exit();
//         } else {
//             $dbUser->insert();
//             addSuccessMsg('Usuário cadastrado com sucesso!');
//         }
//         $_POST = [];
//     } catch (Exception $e) {
//         $exception = $e;
//     } finally {
//         $userData = $_POST;
//     }
// }


loadTemplateView('new_notification', ['users' => $users, 'exception' => $exception]);
