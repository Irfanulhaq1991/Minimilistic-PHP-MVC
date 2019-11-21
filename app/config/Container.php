<?php
require_once 'Database.php';

class container
{
    private static $db;

    public static function getDb()
    {
        if (self::$db == null)
            self::$db = new Database();
        return self::$db;
    }
}