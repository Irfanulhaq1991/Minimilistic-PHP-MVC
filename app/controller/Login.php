<?php
require_once  '../app/config/DbConfig.php';
require_once  '../app/config/Config.php';

class Login extends Controller
{
 private $dbConfig;
    public function __construct()
    {
        global  $dbConfigg;
        $this->dbConfig =  $dbConfigg;
    }

    public function login($params = [])
    {
        if(isset($params['username']) && isset($params['password']))
        echo 'Hello '.$params['username'].'</br>'.'your password is '.$params['password'];
    }

}