<?php 

session_start();
requireValidSession(true);

loadModel('Settings');
$user = $_SESSION['user'];
$selectedUserId = $user->id;
$exception = null;
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');


loadTemplateView('settings', ['exception' => $exception, 'notActive' => $notActive]);
