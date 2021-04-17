<?php 

class WorkingHours extends Model { 

    protected static $tableName = 'working_hours';
    protected static $columns = [
        'id', 
        'user_id', 
        'work_date',
        'time1', 
        'time2', 
        'time3', 
        'time4', 
        'worked_time'
    ];

    public static function loadFromUserAndDate($userId, $workDate) {
        $registry = self::getOne(['user_id' => $userId, 'work_date' => $workDate]); 

        if(!$registry) { 
            $registry = new WorkingHours([
                'user_id' => $userId,
                'work_date' => $workDate,
                'worked_time' => 0 
            ]);
        }
        return $registry;
    }

    public function getNextTime() { 
        if(!$this->time1) return 'time1';
        if(!$this->time2) return 'time2';
        if(!$this->time3) return 'time3';
        if(!$this->time4) return 'time4';
        return null;
    }

    public function getActiveClock() { 
        $nextTime = $this->getNextTime();
        if ($nextTime === 'time1' || $nextTime === 'time3') { 
            return 'exitTime';
        } else if ($nextTime === 'time2' || $nextTime === 'time4') { 
            return 'workedInterval';
        }else { 
            return null; 
        }
    }

    public function innout($time) { 
        $timeColumn = $this->getNextTime();
        if(!$timeColumn) { 
            throw new AppException("Você já fez os 4 batimentos no dia");
        }
        $this->$timeColumn = $time;
        $this->worked_time = getSecondsFromDateInterval($this->getWorkedInterval());
        if($this->id) { 
            $this->update();
        }else { 
            $this->insert();
        }
    }

    //retornando intervalo de tempo 
    function getWorkedInterval() { 
        [$t1, $t2, $t3, $t4] = $this->getTimes();
        // criando date interval zerado.
        $part1 = new DateInterval('PT0S');
        $part2 = new DateInterval('PT0S');
        //cado t1 esteja setado pegar o horario e fazer uma diferença com o horario atual. (diff-diferenca).
        if ($t1) $part1 = $t1->diff(new DateTime());
        // caso t2 fechado significa que a part1 está completa pois $t1 está definido  
        if ($t2) $part1 = $t1->diff($t2);
        if ($t3) $part2 = $t3->diff(new DateTime());
        if ($t4) $part2 = $t3->diff($t4);

        return sumIntervals($part1, $part2);

    }

    function getLunchInterval() { 
        [, $t2, $t3,] = $this->getTimes();

        $lunchInterval = new DateInterval('PT0S');

        if ($t2) $lunchInterval = $t2->diff(new DateTime());
        if ($t3) $lunchInterval = $t2->diff($t3);

        return $lunchInterval;

    }

    function getExitTime() { 
        [$t1, , , $t4] = $this->getTimes();
        //duas formas de criar a jornada de trabalho abaixo de 8 horas
        // $workDay = new DateInterval('PT8H');
        //usando metodo estatico passando quantidade de horas
        $workDay = DateInterval::createFromDateString('8 hours');
        // $defautBreakInterval = DateInterval::createFromDateString('1 hour'); //usando almoco defaut de 1 hora


        // caso nao tenha o $t1 pega a hora atual e soma 8 horas
        if(!$t1) { 
            return (new DateTimeImmutable())->add($workDay); //->add($defautBreakInterval);
            // caso tenha $t4 retorna ele mesmo ... 
        } else if ($t4) { 
            return $t4;
            // caso contrario pega a carga de trabalho + lunch interval soma os dois e da a saida 
        } else { 
            $total = sumIntervals($workDay, $this->getLunchInterval());
            
            // return $total;
            // return $this->getLunchInterval();
            // return $workDay;
            return $t1->add($total);
        }

    }

    function getBalance() { 
        if(!$this->time1 && !isPastWorkDay($this->work_date)) return '-';
        if($this->worked_time == DAILY_TIME) return '-';
        $balance = $this->worked_time - DAILY_TIME;
        $balanceString = getTimeStringFromSeconds(abs($balance));
        $sing = $this->worked_time >= DAILY_TIME ? '+' : '-';
        return "{$sing}{$balanceString}";
    }

    public static function getAbsentUsers() { 
        $today = new DateTime();
        $result = Database::getResultFromQuery("
            SELECT name FROM users
            WHERE end_date is NULL
            AND id NOT IN (
                SELECT user_id FROM working_hours
                WHERE work_date = '{$today->format('Y-m-d')}'
                AND time1 IS NOT NULL
            )
        ");

        $absentUsers = [];
        if($result->num_rows > 0) { 
            while($row = $result->fetch_assoc()) { 
                array_push($absentUsers, $row['name']);
            }
        }
        return $absentUsers;
    }

    public static function getWorkedTimeInMonth($yearAndMonth) { 
        $startDate = (new DateTime("{$yearAndMonth}-1"))->format('Y-m-d');
        $endDate = getLastDayOfMonth($yearAndMonth)->format('Y-m-d');

        $result = static::getResultSetFromSelect([
            'raw' => "work_date BETWEEN '{$startDate}' AND '{$endDate}'"
        ], "sum(worked_time) as sum");

        return $result->fetch_assoc()['sum'];
    }



    public static function getMonthlyReport($userId, $date) {
        $registries = [];
        $startDate = getFirstDayOfMonth($date)->format('Y-m-d');
        $endDate = getLastDayOfMonth($date)->format('Y-m-d');

        $result = static::getResultSetFromSelect([
            'user_id' => $userId,
            'raw' => "work_date between '{$startDate}' AND '{$endDate}'"
        ]);

        if($result) {
            while($row = $result->fetch_assoc()) {
                $registries[$row['work_date']] = new WorkingHours($row);
            }
        }
        
        return $registries;
    }




    //retornando datetime array
    function getTimes() { 
        $times = [];
        // pode fazer das 3 maneiras vou usar a operacao ternária
        // if($this->time1) array_push($times, getDateFromString($this->time1)); 
        // $this->time1 && array_push($times, getDateFromString($this->time1)); 
        $this->time1 ? array_push($times, getDateFromString($this->time1)) : array_push($times, null); 
        $this->time2 ? array_push($times, getDateFromString($this->time2)) : array_push($times, null); 
        $this->time3 ? array_push($times, getDateFromString($this->time3)) : array_push($times, null); 
        $this->time4 ? array_push($times, getDateFromString($this->time4)) : array_push($times, null); 

        return $times;
    }

}