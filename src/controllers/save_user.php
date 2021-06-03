<?php
session_start();
requireValidSession(true);

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');

$exception = null;
$userData = [];
$dbUser = [];

$photo = isset($_FILES['photo']) ? $_FILES['photo'] : null;
// print_r($photo);
if ($photo) {
    $imgName = $photo['name'];
    // die();
    $filesPermited = ['jpg', 'jpeg', 'png', 'gif'];
    $size = $photo['size'];
    $extension = explode('.', $imgName);
    $extension = end($extension);
    $newName = null;
    // print_r($photo);
    // echo "<br>";
    // echo "<hr>";
    if (in_array($extension, $filesPermited)) {
        $newName = rand() . '.' . $extension;
        move_uploaded_file($_FILES['photo']['tmp_name'], 'assets/uploads/' . $newName);
        // $dbUser['photo'] = $newName;
    } else {
        addErrorMsg("Tipo de arquivo não permitido");
    }
}

if (count($_POST) === 0 && isset($_GET['update'])) {
    $user = User::getOne(['id' => $_GET['update']]);
    $userData = $user->getValues();
    // print_r($userData);
    $userData['password'] = null;
} elseif (count($_POST) > 0) {

    try {
        $dbUser = new User($_POST);
        // var_dump($newName);
        $dbUser->photo = $newName;
        // print_r($dbUser);
        // echo "<br>";
        // echo "<hr>";
        if ($dbUser->id) {
            $dbUser->update();
            addSuccessMsg('Usuário alterado com sucesso!');
            header('Location: users.php');
            exit();
        } else {
            // print_r($dbUser);
            // echo "<br>";
            // echo "<hr>";
            $dbUser->insert();
            addSuccessMsg('Usuário cadastrado com sucesso!');
        }
        $_POST = [];
    } catch (Exception $e) {
        $exception = $e;
    } finally {
        $userData = $_POST;
    }
}

loadTemplateView('save_user', $userData + ['exception' => $exception, 'notActive' => $notActive]);
