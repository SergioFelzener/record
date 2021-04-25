<?php 

session_start();
requireValidSession();

loadModel('WorkingHours');

$user = $_SESSION['user'];
$selectedUserId = $user->id;
$notActive = Notifications::getResultSetFromSelect(['user_id' => $selectedUserId, 'active' => 1], 'active');

$date = (new DateTime())->getTimestamp();
$today = strftime('%d de %b de %Y', $date);
loadTemplateView('day_records', ['today' => $today, 'notActive' => $notActive]);

?>