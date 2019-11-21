<?php
require_once '../config/Config.php';

class Database
{
    private $dbCon;
    private $host;
    private $userName;
    private $password;
    private $option = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    public function __construct()
    {
        global $db;
        $this->host = $db['hostname'];
        $this->userName = $db['username'];
        $this->password = $db['password'];
        // $this->dbCon = new PDO($host, $userName, $password, $this->option);
    }

    private function connect()
    {
        if ($this->dbCon == null)
            $this->dbCon = new PDO($this->host, $this->userName, $this->password, $this->option);
    }

    private function close()
    {
        $this->dbCon = null;
    }

    public function executeQuery($query)
    {
        $this->connect();
        $result = $this->dbCon->query($query);
        $this->close();
        return $result;
    }
}