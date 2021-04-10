<?php

Database::executeSQL('DELETE FROM working_hours');
Database::executeSQL('DELETE FROM users WHERE id > 12');

function getdayTemplateByOdds($regularRate, $extraRate, $lazyRate)
{

    $regularDayTemplate = [
        'time1' => '08:00:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '17:00:00',
        'worked_time' => DAILY_TIME
    ];

    $extraHourDayTemplate = [
        'time1' => '08:00:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '18:00:00',
        'worked_time' => DAILY_TIME + 3600
    ];

    $lazyDayTemplate = [
        'time1' => '08:30:00',
        'time2' => '12:00:00',
        'time3' => '13:00:00',
        'time4' => '18:00:00',
        'worked_time' => DAILY_TIME - 1800
    ];

    $value = rand(0, 100);

    if($value <= $regularRate) { 
        return $regularDayTemplate;
    } elseif ($value <= $regularRate + $extraRate) { 
        return $extraHourDayTemplate;
    } else { 
        return $lazyDayTemplate;
    }
}

function populateWorkingHours($userId, $initialDate, $regularRate, $extraRate, $lazyRate) { 
    $currentDate = $initialDate;
    $yesterday = new DateTime();
    $yesterday->modify('-1 day');
    $columns = ['user_id' => $userId, 'work_date' => $currentDate];

    while(isBefore($currentDate, $yesterday)) { 
        if(!isWeekend($currentDate)) { 
            $template = getdayTemplateByOdds($regularRate, $extraRate, $lazyRate);
            $columns = array_merge($columns, $template);
            $working_hours = new WorkingHours($columns);
            $working_hours->insert();
        }

        $currentDate = getNextDay($currentDate)->format('Y-m-d');
        $columns['work_date'] = $currentDate;


    }

}

$lastYear = strtotime('first day of last year');
populateWorkingHours(1, date('Y-m-1'), 70, 20, 10);
populateWorkingHours(2, date('Y-m-1', $lastYear), 50, 30, 20);
populateWorkingHours(3, date('Y-m-d', $lastYear), 20, 75, 5);
populateWorkingHours(4, date('Y-m-d', $lastYear), 60, 10, 70);
populateWorkingHours(5, date('Y-m-d', $lastYear), 10, 10, 70);
populateWorkingHours(6, date('Y-m-d', $lastYear), 40, 20, 40);
populateWorkingHours(7, date('Y-m-d', $lastYear), 90, 10, 0);
populateWorkingHours(8, date('Y-m-d', $lastYear), 10, 20, 70);
populateWorkingHours(9, date('Y-m-d', $lastYear), 30, 40, 30);
populateWorkingHours(10, date('Y-m-d', $lastYear), 20, 10, 70);
populateWorkingHours(11, date('Y-m-d', $lastYear), 70, 10, 20);

echo "Tudo certo !";
// print_r(getdayTemplateByOdds(10, 20, 70));