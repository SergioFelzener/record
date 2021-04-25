<?php
session_start();
requireValidSession(true);

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');

$activeUsersCount = User::getActiveUsersCount();
$absentUsers = WorkingHours::getAbsentUsers();

$yearAndMonth = (new DateTime())->format('Y-m');
$seconds = WorkingHours::getWorkedTimeInMonth($yearAndMonth);
$hoursInMonth = explode(':', getTimeStringFromSeconds($seconds))[0];


loadTemplateView('manager_report', [
    'activeUsersCount' => $activeUsersCount,
    'absentUsers' => $absentUsers,
    'hoursInMonth' => $hoursInMonth,
    'notActive' => $notActive,
]);