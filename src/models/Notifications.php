<?php 
require_once(realpath(MODEL_PATH . '/Model.php'));

class Notifications extends Model {

    protected static $tableName = 'notifications';
    protected static $colunms = [
        'id', 
        'user_id',
        'title', 
        'msg', 
        'active', 
        'date'
    ];

    public static function getActiveNotifications($id) { 
       $sql = "SELECT * FROM notifications WHERE id={$id}";
       
    }

    
    
}
