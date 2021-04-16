<?php
session_start();
requireValidSession();

$exception = null;
$user = $_SESSION['user'];
$selectedUserId = $user->id;
$activeNotifications = [];

$obj = new Notifications($selectedUserId);

$result = $obj->getActiveNotifications($selectedUserId);


echo $result;




loadTemplateView('notifications');
