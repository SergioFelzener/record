<?php 

session_start();
requireValidSession();

echo "Testes de sistema:"; 
echo "<br>";
echo "<hr>";
echo "<br>";

$user = new User(['name' => 'teste', 'email' => 'teseeee@teste.com']);
print_r($user);
echo "<br>";
$user->email = 'teste@alterandoemail.com';
echo "novo email : ";
print_r($user->email);
echo "<br>";
print_r($user);

echo "<br>";
echo "<br>";
print_r(User::get(['id'=> 1], 'name, email'));

echo "<hr>";
echo "<br>";

$notification = new Notifications (["title" => "Teste de notificação", "msg" => "Mensagem de notificação"]);
print_r($notification);
echo "<br>";
$notification->msg = 'Alterando conteúdo da notificação'; 
echo "novo conteúdo da Notificação : ";
print_r($notification->msg);
echo "<br>";
print_r($notification);
echo "<hr>";
echo "<br>";

echo "<br>";

echo "<hr>";

$notActive = Notifications::getResultSetFromSelect(['user_id'=> 1, 'active' => 1], 'active');
print_r($notActive->num_rows);

echo "<hr>";
echo "<br>";

echo "<br>";
echo "FIM!"



//controller temporario
// testes 
// echo "controller temporario<br>";

// $i1 = DateInterval::createFromDateString('9 hours');
// $i2 = DateInterval::createFromDateString('6 hours');

// $r1 = sumIntervals($i1, $i2);
// echo "<br>";
// $r2 = substractIntervals($i1, $i2);
// print_r($r1);
// echo "<br>";
// echo "<br>";
// print_r($r2);
// echo "<br>";
// echo "<br>";
// print_r(getDateFromInterval($r1));
// echo "<br><br>";

// print_r(getDateFromInterval($r2));


// $wh = WorkingHours::loadFromUserAndDate(1, date('Y-m-d'));
// [$t1, $t2, $t3, $t4] = $wh->getTimes();

// print_r($t2);
// echo '<br>';
// print_r($t3);
// echo '<br>';
// print_r($t4);
// echo '<br>';
// print_r($t1);
// // echo '<br>';

// $workedIntervalString = $wh->getWorkedInterval()->format('%H:%I:%S');
// print_r($workedIntervalString);
// echo '<br>';

// $lunchIntervalString = $wh->getLunchInterval()->format('%H:%I:%S');
// print_r($lunchIntervalString);
// echo '<br>';

//testando saida do trabalho 

// print_r($wh->getExitTime());

// print_r(getLastDayOfMonth('2021-02'));

// echo Notifications::getCount(['raw' => 'id']);


// // $user = $_SESSION['user'];
// echo "<br>";
// echo "<br>";
// // print_r($user);

// $user = $_SESSION['user'];
// $user_id = $user->id;

// echo "ID do Usuário:", $user_id;

// echo "<br>";
// echo "<br>";

// $notifications =[];
// $notifications = Notifications::get();
// var_dump($notifications);

// echo "<br>";
// echo "<br>";
// $notifications2 = Notifications::getUserNotification(['user_id' => 1]);
// var_dump($notifications2);

// echo "<br>";
// echo "<br>";

// $user = User::getOne(['id' => $user_id]);

// var_dump($user);

// echo "<br>";
// echo "<hr>";

// echo Notifications::getResultSetFromSelect(['title' => 'Titulo'], 'titulo');





// var_dump($sql);

// foreach($notifications as $not) { 


    

// }

// $user = new User(["name" => 'SergioTeste', "email" => 'teste@sergio.com']);

// echo $user->getResultSetFromSelect();



// TESTE DE NOTIFICAções



?>