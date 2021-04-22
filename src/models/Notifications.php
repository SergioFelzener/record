<?php
require_once(realpath(MODEL_PATH . '/Model.php'));

class Notifications extends Model
{

    protected static $tableName = 'notifications';
    protected static $columns = [
        'id',
        'user_id',
        'title',
        'msg',
        'active',
        'date'
    ];


    //definir clausula where para notificações do usuário.
    public static function getUserNotification($filters = [], $columns = '*')
    {
        $objects = [];
        $result = static::getResultSetFromSelect($filters, $columns);
        if ($result) {
            $class = get_called_class();
            while ($row = $result->fetch_assoc()) {
                array_push($objects, new $class($row));
            }
        }
        return $objects;
    }

    public function insert()
    {

        $this->validate();
        $this->active = true;
        $this->date = date('Y/m/d');

        return parent::insert();
    }

    private function validate()
    {
        $errors = [];

        if (!$this->title) {
            $errors['title'] = 'Título é um campo obrigatório.';
        }

        if (!$this->msg) {
            $errors['msg'] = 'mensagem é um campo obrigatório.';
        }
    }
}
