<?php 
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

echo User::getCount(['raw' => 'id >= 2']);




?>